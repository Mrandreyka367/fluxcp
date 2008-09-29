<?php
if (!defined('FLUX_ROOT')) exit;

$this->loginRequired();

$cost = +(int)Flux::config('ChargeGenderChange');

if ($cost && $session->account->balance < $cost) {
	$hasNecessaryFunds = false;
}
else {
	$hasNecessaryFunds = true;
}

if (count($_POST)) {
	if (!$hasNecessaryFunds || !$params->get('changegender')) {
		$this->deny();
	}
	
	$sex = $session->account->sex == 'M' ? 'F' : 'M';
	$sql = "UPDATE {$server->loginDatabase}.login SET sex = ? WHERE account_id = ?";
	$sth = $server->connection->getStatement($sql);
	
	$sth->execute(array($sex, $session->account->account_id));
	
	if ($cost) {
		$session->loginServer->depositCredits($session->account->account_id, -$cost);
		$session->setMessageData("Your gender has been changed and $cost credit(s) have been deducted from your account.");
	}
	else {
		$session->setMessageData("Your gender has been changed.");
	}
	
	$this->redirect($this->url('account', 'view'));
}
?>