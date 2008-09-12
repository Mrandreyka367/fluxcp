<?php
require_once 'Flux/DataObject.php';
require_once 'Flux/LoginError.php';

/**
 * Contains all of Flux's session data.
 */
class Flux_SessionData {
	/**
	 * Actual session data array.
	 *
	 * @access private
	 * @var array
	 */
	private $sessionData;
	
	/**
	 * Session data filters.
	 *
	 * @access private
	 * @var array
	 */
	private $dataFilters = array();
	
	/**
	 * Selected login server group.
	 *
	 * @access public
	 * @var Flux_LoginAthenaGroup
	 */
	public $loginAthenaGroup;
	
	/**
	 * Selected login server.
	 *
	 * @access public
	 * @var Flux_LoginServer
	 */
	public $loginServer;
	
	/**
	 * Account object.
	 *
	 * @access public
	 * @var Flux_DataObject
	 */
	public $account;

	
	/**
	 * Create new SessionData instance.
	 *
	 * @param array $sessionData
	 * @access public
	 */
	public function __construct(array &$sessionData)
	{
		$this->sessionData = &$sessionData;
		$this->initialize();
	}
	
	/**
	 * Initialize session data.
	 *
	 * @param bool $force
	 * @return bool
	 * @access private
	 */
	private function initialize($force = false)
	{	
		$keysToInit = array('username', 'serverName', 'athenaServerName', 'securityCode');
		foreach ($keysToInit as $key) {
			if ($force || !$this->{$key}) {
				$method = ucfirst($key);
				$method = "set{$method}Data";
				$this->$method(null);
			}
		}
		
		if ($this->serverName && ($this->loginAthenaGroup = Flux::getServerGroupByName($this->serverName))) {
			$this->loginServer = $this->loginAthenaGroup->loginServer;
			if (!$this->athenaServerName) {
				$this->setAthenaServerNameData(current($this->getAthenaServerNames()));
			}
		}
		
		// Get new account data every request.
		if ($this->loginAthenaGroup && $this->username && ($account = $this->getAccount($this->loginAthenaGroup, $this->username))) {
			$this->account = $account;
		}
		else {
			$this->account = new Flux_DataObject(null, array('level' => AccountLevel::UNAUTH));
		}
		
		return true;
	}
	
	/**
	 * Log current user out.
	 * 
	 * @return bool
	 * @access public
	 */
	public function logout()
	{
		$this->loginAthenaGroup = null;
		$this->loginServer = null;
		return $this->initialize(true);
	}
	
	public function __call($method, $args)
	{
		if (count($args) && preg_match('/set(.+?)Data/', $method, $m)) {
			$arg     = current($args);
			$meth    = $m[1];
			$meth[0] = strtolower($meth[0]);
			
			if (array_key_exists($meth, $this->dataFilters)) {
				foreach ($this->dataFilters[$meth] as $callback) {
					$arg = call_user_func($callback, $arg);
				}
			}
			
			$this->sessionData[$meth] = $arg;
		}
	}
	
	public function __get($prop)
	{
		if (array_key_exists($prop, $this->sessionData)) {
			return $this->sessionData[$prop];
		}
	}
	
	/**
	 * Set session data.
	 *
	 * @param array $keys Session keys to be affected.
	 * @param mixed $value Value to be assigned to all specified keys.
	 * @return mixed whatever was set
	 * @access public
	 */
	public function setData(array $keys, $value)
	{
		foreach ($keys as $key) {
			$key = ucfirst($key);
			$this->{"set{$key}Data"}($value);
		}
		return $value;
	}
	
	/**
	 * Add a session data setter filter.
	 *
	 * @param string $key Which session key
	 * @param string $callback Function callback.
	 * @return string Callback
	 * @access public
	 */
	public function addDataFilter($key, $callback)
	{
		if (!array_key_exists($key, $this->dataFilters)) {
			$this->dataFilters[$key] = array();
		}
		
		$this->dataFilters[$key][] = $callback;
		return $callback;
	}
	
	/**
	 * Checks whether the current user is logged in.
	 */
	public function isLoggedIn()
	{
		return $this->account->level >= AccountLevel::NORMAL;
	}
	
	/**
	 * User login.
	 *
	 * @param string $server Server name
	 * @param string $username
	 * @param string $password
	 * @throws Flux_LoginError
	 * @access public
	 */
	public function login($server, $username, $password)
	{
		$loginAthenaGroup = Flux::getServerGroupByName($server);
		if (!$loginAthenaGroup) {
			throw new Flux_LoginError('Invalid server.', Flux_LoginError::INVALID_SERVER);
		}
		
		if (!$loginAthenaGroup->isAuth($username, $password)) {
			throw new Flux_LoginError('Invalid login', Flux_LoginError::INVALID_LOGIN);
		}
		
		$creditsTable  = Flux::config('FluxTables.CreditsTable');
		$creditColumns = 'credits.balance, credits.last_donation_date, credits.last_donation_amount';
		
		$sql  = "SELECT login.*, {$creditColumns} FROM {$loginAthenaGroup->loginDatabase}.login ";
		$sql .= "LEFT OUTER JOIN {$creditsTable} AS credits ON login.account_id = credits.account_id ";
		$sql .= "WHERE login.sex != 'S' AND login.level >= 0 AND login.userid = ? LIMIT 1";
		$smt  = $loginAthenaGroup->connection->getStatement($sql);
		$res  = $smt->execute(array($username));
		
		if ($res && ($row = $smt->fetch())) {
			$this->setServerNameData($server);
			$this->setUsernameData($username);
			$this->initialize(false);
		}
		else {
			$message  = "Unexpected error during login.\n";
			$message .= 'PDO error info, if any: '.print_r($smt->errorInfo(), true);
			throw new Flux_LoginError($message, Flux_LoginError::UNEXPECTED);
		}
		
		return true;
	}
	
	/**
	 * Get account object for a particular user name.
	 *
	 * @param Flux_LoginAthenaGroup $loginAthenaGroup
	 * @param string $username
	 * @return mixed
	 * @access private
	 */
	private function getAccount(Flux_LoginAthenaGroup $loginAthenaGroup, $username)
	{
		$creditsTable  = Flux::config('FluxTables.CreditsTable');
		$creditColumns = 'credits.balance, credits.last_donation_date, credits.last_donation_amount';
		
		$sql  = "SELECT login.*, {$creditColumns} FROM {$loginAthenaGroup->loginDatabase}.login ";
		$sql .= "LEFT OUTER JOIN {$loginAthenaGroup->loginDatabase}.{$creditsTable} AS credits ON login.account_id = credits.account_id ";
		$sql .= "WHERE login.sex != 'S' AND login.level >= 0 AND login.userid = ? LIMIT 1";
		$smt  = $loginAthenaGroup->connection->getStatement($sql);
		$res  = $smt->execute(array($username));
		
		if ($res && ($row = $smt->fetch())) {
			return $row;
		}
		else {
			return false;
		}
	}
	
	/**
	 * Get available server names.
	 *
	 * @access public
	 */
	public function getAthenaServerNames()
	{
		if ($this->loginAthenaGroup) {
			$names = array();
			foreach ($this->loginAthenaGroup->athenaServers as $server) {
				$names[] = $server->serverName;
			}
			return $names;
		}
		else {
			return array();
		}
	}
	
	/**
	 * Get a Flux_Athena instance by its name based on current server settings.
	 * 
	 * @param string $name
	 * @access public
	 */
	public function getAthenaServer($name = null)
	{
		if (is_null($name) && $this->athenaServerName) {
			return $this->getAthenaServer($this->athenaServerName);
		}
		
		if ($this->loginAthenaGroup && ($server = Flux::getAthenaServerByName($this->serverName, $name))) {
			return $server;
		}
		else {
			return false;
		}
	}
	
	/**
	 * Get flash message.
	 *
	 * @return string
	 * @access public
	 */
	public function getMessage()
	{
		$message = $this->message;
		$this->setMessageData(null);
		return $message;
	}
}
?>