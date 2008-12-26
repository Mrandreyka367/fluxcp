<?php
return array(	
	// Generic/Misc.
	'YesLabel'                => 'Yes',
	'NoLabel'                 => 'No',
	'NoteLabel'               => 'Note',
	'GenderTypeMale'          => 'Male',
	'GenderTypeFemale'        => 'Female',
	'GenderTypeServer'        => 'Server',
	'RefreshSecurityCode'     => 'Refresh Security Code',
	'NoneLabel'               => 'None',
	'NeverLabel'              => 'Never',
	'NotApplicableLabel'      => 'Not Applicable',
	'UnknownLabel'            => 'Unknown',
	'IsEqualToLabel'          => 'is equal to',
	'IsGreaterThanLabel'      => 'is greater than',
	'IsLessThanLabel'         => 'is less than',
	'AllLabel'                => 'All',
	'SearchLabel'             => 'Search…',
	'GoBackLabel'             => 'Go back to previous page…',
	'SearchButton'            => 'Search',
	'ResetButton'             => 'Reset',
	'FilterButton'            => 'Filter',
	'NotAcceptingDonations'   => "We're sorry, but we are currently not accepting any donations.  We apologize for the inconvenience.",
	//'NotAcceptingDonations'   => "We're sorry, but our donation system is currently undergoing maintenance, please try again later.",
	'FoundSearchResults'      => 'Found a total of %d record(s) across %d page(s).  Displaying result(s) %d-%d.',
	'LoginToDonate'           => 'Please log-in to make a donation.',
	'UnknownCharacter'        => 'No such character found.',
	'AccountIdLabel'          => 'Account ID',
	'AccountLevelLabel'       => 'Account Level',
	'AccountStateLabel'       => 'Account State',
	'CreditBalanceLabel'      => 'Credit Balance',
	'UsernameLabel'           => 'Username',
	'PasswordLabel'           => 'Password',
	'EmailAddressLabel'       => 'E-mail',
	'GenderLabel'             => 'Gender',
	'LoginCountLabel'         => 'Login Count',
	'LastLoginDateLabel'      => 'Last Login Date',
	'LastUsedIpLabel'         => 'Last Used IP',
	'AccountStateNormal'      => 'Normal',
	'AccountStatePermBanned'  => 'Permanently Banned',
	'AccountStateTempBanned'  => 'Temp. Banned (unban: %s)',
	'OnlineLabel'             => 'Online',
	'OfflineLabel'            => 'Offline',
	'ItemIdLabel'             => 'Item ID',
	'ItemNameLabel'           => 'Item Name',
	'ItemAmountLabel'         => 'Amount',
	'ItemIdentifyLabel'       => 'Identified',
	'ItemRefineLabel'         => 'Refined',
	'ItemBrokenLabel'         => 'Broken',
	'ItemCard0Label'          => 'Card 0',
	'ItemCard1Label'          => 'Card 1',
	'ItemCard2Label'          => 'Card 2',
	'ItemCard3Label'          => 'Card 3',
	
	// Module: account
	// - account/changemail
	'EmailChangeTitle'        => 'Change E-mail',
	'EnterEmailAddress'       => 'Please enter an e-mail address.',
	'EmailCannotBeSame'       => 'Your new e-mail cannot be the same as your current.',
	'EmailAlreadyRegistered'  => "The e-mail address you've entered is already registered to another account.",
	'EmailChangeSent'         => 'An e-mail has been sent to your new address with a link that will confirm the change.',
	'EmailAddressChanged'     => 'Your e-mail address has been changed!',
	'EmailChangeFailed'       => 'Failed to change e-mail address.  Please try again later.',
	'EmailChangeHeading'      => 'Change E-mail',
	'EmailChangeInfo'         => 'If you would like to change the e-mail address registered under your account, you can fill out the below form.',
	'EmailChangeInfo2'        => 'After submitting the form, you will be required to confirm your new e-mail address (an e-mail will be sent to the new address with a link).',
	'EmailChangeLabel'        => 'New E-mail Address',
	'EmailChangeInputNote'    => 'Must be a valid e-mail address!',
	'EmailChangeButton'       => 'Change E-mail Address',
	// - account/changepass
	'PasswordChangeTitle'     => 'Change Password',
	'NeedCurrentPassword'     => 'Please enter your current password.',
	'NeedNewPassword'         => 'Please enter your new password.',
	'OldPasswordInvalid'      => "The password you provided doesn't match the one we have on record.",
	'ConfirmNewPassword'      => 'Please confirm your new password.',
	'NewPasswordSameAsOld'    => 'New password cannot be the same as your current password.',
	'PasswordHasBeenChanged'  => 'Your password has been changed, please log-in again.',
	'FailedToChangePassword'  => 'Failed to change your password.  Please contact an admin.',
	'PasswordChangeHeading'   => 'Change Your Password',
	'PasswordChangeInfo'      => 'Please enter your current password, then enter the new password you would like to use and re-enter it to confirm.',
	'CurrentPasswordLabel'    => 'Current Password',
	'NewPasswordLabel'        => 'New Password',
	'NewPasswordConfirmLabel' => 'Re-enter New Password',
	'PasswordChangeNote'      => 'Please be sure to enter the correct information.',
	'PasswordChangeNote2'     => 'After changing your password, you will be logged out.',
	'PasswordChangeButton'    => 'Change Password',
	// - account/changesex
	'GenderChangeTitle'       => 'Change Gender',
	'GenderChangeBadChars'    => 'You cannot change your gender if any of your characters is a: %s',
	'GenderChanged'           => 'Your gender has been changed and %d credit(s) have been deducted from your account.',
	'GenderChangedForFree'    => 'Your gender has been changed.',
	'GenderChangeHeading'     => 'Change Your Gender',
	'GenderChangeCost'        => 'Gender changes cost %d credit(s).',
	'GenderChangeBalance'     => 'Your current balance is %d credit(s).',
	'GenderChangeNoFunds'     => 'You do not have enough credits to perform a gender change at this time.',
	'GenderChangeCharInfo'    => 'You cannot change gender if you have the follow character jobs: %s',
	'GenderChangeSubHeading'  => 'Please make sure you want to really change!',
	'GenderChangeFormText'    => 'Would you like to change your gender to %s?',
	'GenderChangeConfirm'     => 'Are you absolutely sure you want to change your gender?',
	'GenderChangeButton'      => 'Yes, do it please.',
	// - account/confirm
	'AccountConfirmTitle'     => 'Confirm Account',
	'AccountConfirmUnban'     => 'Account has been confirmed and activated.',
	'AccountConfirmMessage'   => 'Your account has been confirmed and activated, you may now log-in.',
	// - account/confirmemail
	'EmailConfirmTitle'       => 'Confirm E-mail',
	'EmailConfirmFailed'      => 'There has been a technical difficulty while updating your e-mail address, please contact an admin.',
	'EmailConfirmChanged'     => 'Your e-mail address has been changed!',
	// - account/create
	'AccountCreateTitle'      => 'Create an Account',
	'AccountConfirmBan'       => 'Awaiting account activation: %s',
	'AccountCreateEmailSent'  => 'An e-mail has been sent containing account activation details, please check your e-mail and activate your account to log-in.',
	'AccountCreateFailed'     => 'Your account has been created, but unfortunately we failed to send an e-mail due to technical difficulties. Please contact a staff member and request for assistance.',
	'AccountCreated'          => 'Congratulations, you have been registered successfully and automatically logged in.',
	'AccountCreateHeading'    => 'Register',
	'AccountCreateTerms'      => 'Terms of Service',
	'AccountCreateInfo'       => 'Please read our %s (ToS) before registering for an account, to ensure that you understand the rules of holding an account with our private Ragnarok Online game server.',
	'AccountCreateInfo2'      => 'By clicking "Create My Account", you agree to be bound by our %s.',
	'AccountCreateGenderInfo' => "The gender you choose here will affect your in-game character's gender!",
	'AccountServerLabel'      => 'Server',
	'AccountUsernameLabel'    => 'Your Username',
	'AccountPasswordLabel'    => 'Your Password',
	'AccountPassConfirmLabel' => 'Confirm Password',
	'AccountEmailLabel'       => 'E-mail Address',
	'AccountGenderLabel'      => 'Gender',
	'AccountSecurityLabel'    => 'Security Code',
	'AccountCreateButton'     => 'Create My Account',
	'InvalidLoginServer'      => 'Invalid login server selected, please try again with a valid server.',
	'InvalidLoginCredentials' => 'Invalid login credentials, please verify that you typed the correct info and try again.',
	'UnexpectedLoginError'    => 'Unexpected error occurred, please try again or report to an admin.',
	'CriticalLoginError'      => 'Something bad happened.  Report to an administrator ASAP.',
	'UsernameAlreadyTaken'    => "The username you've chosen has already been taken by another user.",
	'UsernameTooShort'        => sprintf('Your username should be around %d to %d characters long.', Flux::config('MinUsernameLength'), Flux::config('MaxUsernameLength')),
	'UsernameTooLong'         => sprintf('Your username should be around %d to %d characters long.', Flux::config('MinUsernameLength'), Flux::config('MaxUsernameLength')),
	'PasswordTooShort'        => sprintf('Your password should be around %d to %d characters long.', Flux::config('MinPasswordLength'), Flux::config('MaxPasswordLength')),
	'PasswordTooLong'         => sprintf('Your password should be around %d to %d characters long.', Flux::config('MinPasswordLength'), Flux::config('MaxPasswordLength')),
	'PasswordsDoNotMatch'     => "Your passwords do not match, please make sure that you'ved typed them both correctly.",
	'EmailAddressInUse'       => "The e-mail address you've entered is already registered to another account.  Please use a different e-mail address.",
	'InvalidEmailAddress'     => "The e-mail address you've entered is not in a valid e-mail address format.",
	'InvalidGender'           => 'Gender should be "M" or "F"',
	'InvalidServer'           => "The server you've selected does not exist.",
	'InvalidSecurityCode'     => 'Please enter the security code correctly.',
	'CriticalRegisterError'   => 'Something bad happened.  Report to an administrator ASAP.',
	// - account/edit
	'AccountEditTitle'        => 'Modify Account',
	'AccountEditTitle2'       => 'Modifying My Account',
	'AccountEditTitle3'       => 'Modifiying Account (%s)',
	'CannotModifyOwnLevel'    => 'You cannot modify your own account level.',
	'CannotModifyAnyLevel'    => 'You cannot modify account levels.',
	'CannotModifyLevelSoHigh' => 'You cannot set an account level to be higher than your own.',
	'CannotModifyBalance'     => 'You cannot modify account balances.',
	'InvalidLastLoginDate'    => 'Invalid last login date.',
	'AccountModified'         => 'Account has been modified.',
	'AccountEditHeading'      => 'Modify Account',
	'AccountEditButton'       => 'Modify Account',
	'AccountEditNotFound'     => 'No such account.',
	// - account/index
	'AccountIndexTitle'       => 'List Accounts',
	'AccountIndexHeading'     => 'Accounts',
	'LoginBetweenLabel'       => 'Login Between',
	'AccountIndexNotFound'    => 'No such account.',
	// - account/login
	'LoginTitle'              => 'Log In',
	'LoginHeading'            => 'Log In',
	'LoginButton'             => 'Log In',
	'LoginPageMakeAccount'    => 'Don\'t have an account? <a href="%s">Create one!</a>',
	'TemporarilyBanned'       => 'Your account is temporarily banned.',
	'PermanentlyBanned'       => 'Your account is permanently banned.',
	'IpBanned'                => 'The IP address you are behind is banned.',
	'PendingConfirmation'     => 'Your account is pending e-mail confirmation.',
	// - account/logout
	'LogoutTitle'             => 'Logout',
	'LogoutHeading'           => 'Logout',
	'LogoutInfo'              => 'You are now logged out.',
	'LogoutInfo2'             => 'Please wait a moment while you are <a href="%s">redirected</a>…',
	// - account/resend
	'ResendTitle'             => 'Resend Confirmation E-mail',
	'ResendEnterUsername'     => 'Please enter your account username.',
	'ResendEnterEmail'        => 'Please enter your e-mail address.',
	'ResendFailed'            => 'Failed to resend confirmation code.',
	'ResendEmailSent'         => 'Your confirmation code has been resent, please check your e-mail and proceed to activate your account.',
	'ResendHeading'           => 'Resend Confirmation E-mail',
	'ResendInfo'              => 'Please enter your account name and e-mail address you used during the registration of the account to have us resend your confirmation e-mail.',
	'ResendServerLabel'       => 'Registered Server',
	'ResendAccountLabel'      => 'Account Username',
	'ResendEmailLabel'        => 'E-mail Address',
	'ResendServerInfo'        => 'This is the server the account was registered on.',
	'ResendAccountInfo'       => 'This is the account name you registered.',
	'ResendEmailInfo'         => 'This is the e-mail address you used during the registration of the above account.',
	'ResendButton'            => 'Resend Confirmation E-mail',
	// - account/resetpass
	'ResetPassTitle'          => 'Reset Password',
	'ResetPassEnterAccount'   => 'Please enter your account username.',
	'ResetPassEnterEmail'     => 'Please enter your e-mail address.',
	'ResetPassFailed'         => 'Failed to send reset password e-mail.',
	'ResetPassEmailSent'      => 'An e-mail has been sent with details on how to reset your password.',
	'ResetPassTitle'          => 'Reset Password',
	'ResetPassInfo'           => 'If you lost your password, you can re-set it by entering the e-mail address you used to register your account.',
	'ResetPassInfo2'          => 'An e-mail will then be sent to the specified address with a link allowing you to reset your password, therefore a valid e-mail address is required.',
	'ResetPassServerLabel'    => 'Registered Server',
	'ResetPassAccountLabel'   => 'Account Username',
	'ResetPassEmailLabel'     => 'E-mail Address',
	'ResetPassServerInfo'     => 'This is the server the account was registered on.',
	'ResetPassAccountInfo'    => 'This is the account name you registered.',
	'ResetPassEmailInfo'      => 'This is the e-mail address you used during the registration of the above account.',
	'ResetPassButton'         => 'Send Reset Password E-mail',
	// - account/resetpw
	'ResetPwTitle'            => 'Reset Password',
	'ResetPwFailed'           => 'Failed to re-set password, please try again later.',
	'ResetPwDone'             => 'Your password has been reset and an e-mail containing your new password has been sent to you.',
	'ResetPwDone2'            => 'Your password has been reset, but we failed to deliver the e-mail containing your new password.  Please reset again to resolve this issue.',
	// - account/transfer
	'TransferTitle'           => 'Transfer Donation Credits',
	'TransferGreaterThanOne'  => 'You can only transfer credits in amounts greater than 1.',
	'TransferEnterCharName'   => 'You must input the character name of who will receive the credits.',
	'TransferNoCharExists'    => "Character '%s' does not exist. Please make sure you typed it correctly.",
	'TransferNoBalance'       => 'You do not have a sufficient balance to make the transfer.',
	'TransferUnexpectedError' => 'Unexpected error occurred.',
	'TransferSuccessful'      => 'Credits have been transferred!',
	'TransferHeading'         => 'Transfer Donation Credits',
	'TransferSubHeading'      => 'Credits will be transferred to a character on the %s server.',
	'TransferInfo'            => 'You currently have %s credit(s).',
	'TransferInfo2'           => 'Enter the amount you would like to transfer and the character name belonging to the account you would like your credits transferred to.',
	'TransferAmountLabel'     => 'Amount of Credits',
	'TransferCharNameLabel'   => 'Character Name',
	'TransferAmountInfo'      => 'This is the amount of credits you would like to send.',
	'TransferCharNameInfo'    => 'This is the character name of who will be receiving the credits.',
	'TransferConfirm'         => 'Are you sure you want to do this?',
	'TransferButton'          => 'Transfer',
	'TransferNoCredits'       => 'You have no credits available in your account.',
	// - account/view
	// * account/view submenus
	'ModifyAccountLink'       => 'Modify Account',
	'AccountViewTitle'        => 'View Account',
	'AccountViewTitle2'       => 'Viewing Account (%s)',
	'AccountViewTitle3'       => 'Viewing My Account',
	'AccountTempBanFailed'    => 'Failed to temporarily ban account.',
	'AccountPermBanFailed'    => 'Failed to permanently ban account.',
	'AccountTempBanUnauth'    => 'You are unauthorized to place temporary bans on this account.',
	'AccountPermBanUnauth'    => 'You are unauthorized to place permanent bans on this account.',
	'AccountLiftTempBan'      => 'Account has been unbanned.',
	'AccountLiftPermBan'      => 'Account has been unbanned.',
	'AccountLiftBanUnauth'    => "You are unauthorized to remove this account's ban status.",
	'AccountViewHeading'      => 'Viewing Account',
	'AccountViewDonateLink'   => '(Donate!)',
	'AccountViewTempBanLabel' => 'Temporary Ban',
	'AccountViewPermBanLabel' => 'Permanent Ban',
	'AccountViewUnbanLabel'   => 'Remove Ban',
	'AccountBanReasonLabel'   => 'Reason:',
	'AccountBanUntilLabel'    => 'Ban Until:',
	'AccountTempBanButton'    => 'Ban Account',
	'AccountPermBanButton'    => 'Permanently Ban Account',
	'AccountTempUnbanButton'  => 'Remove Temporary Ban',
	'AccountPermUnbanButton'  => 'Remove Permanent Ban',
	'AccountBanConfirm'       => 'Are you sure?',
	'AccountBanLogSubHeading' => 'Ban Log for %s (recent to oldest)',
	'BanLogBanTypeLabel'      => 'Ban Type',
	'BanLogBanDateLabel'      => 'Ban Date',
	'BanLogBanReasonLabel'    => 'Ban Reason',
	'BanLogBannedByLabel'     => 'Banned By',
	'BanLogBannedByCP'        => 'Control Panel',
	'BanTypeUnbanned'         => 'Unbanned',
	'BanTypePermBanned'       => 'Permanently Banned',
	'BanTypeTempBanned'       => 'Temporarily Banned',
	'AccountViewCharSubHead'  => 'Characters on %s',
	'AccountViewSlotLabel'    => 'Slot',
	'AccountViewCharLabel'    => 'Character Name',
	'AccountViewClassLabel'   => 'Job Class',
	'AccountViewLvlLabel'     => 'Base Level',
	'AccountViewJlvlLabel'    => 'Job Level',
	'AccountViewZenyLabel'    => 'Zeny',
	'AccountViewGuildLabel'   => 'Guild',
	'AccountViewStatusLabel'  => 'Status',
	'AccountViewPrefsLabel'   => 'Preferences',
	'CharModifyPrefsLink'     => 'Modify Preferences',
	'AccountViewNoChars'      => 'This account has no characters on %s.',
	'AccountViewStorage'      => 'Storage Items of %s',
	'AccountViewStorageCount' => '%s has %s storage item(s).',
	'AccountViewNoStorage'    => 'There are no storage items on this account.',
	'AccountViewNotFound'     => "Records indicate that the account you're trying to view does not exist.",
	// - account/xferlog
	'XferLogTitle'            => 'Credit Transfer History',
	'XferLogHeading'          => 'Credit Transfer History',
	'XferLogReceivedSubHead'  => 'Transfers: Received',
	'XferLogSentSubHead'      => 'Transfers: Sent',
	'XferLogCreditsLabel'     => 'Credits',
	'XferLogFromLabel'        => 'From E-mail',
	'XferLogDateLabel'        => 'Transfer Date',
	'XferLogCharNameLabel'    => 'To Character',
	'XferLogNotReceived'      => 'You have not received any credit transfers.',
	'XferLogNotSent'          => 'You have not sent any credit transfers.',
	
	// Module: character
	// - character/changeslot
	// - character/index
	// - character/mapstats
	// - character/online
	// - character/prefs
	// - character/resetlook
	'CantResetLookWhenOnline' => 'Cannot reset look while %s is online.',
	'ResetLookSuccessful'     => "%s's look has been reset!",
	'ResetLookFailed'         => "Failed to reset %s's look.",
	// - character/resetpos
	'CantResetPosWhenOnline'  => 'Cannot reset position while %s is online.',
	'CantResetFromCurrentMap' => "You cannot reset %s's position from the current map.",
	'ResetPositionSuccessful' => "%s's position has been reset!",
	'ResetPositionFailed'     => "Failed to reset %s's position.",
	// - character/view
	
	// Module: cplog
	// - cplog/index.php
	// - cplog/login.php
	// - cplog/paypal.php
	// - cplog/resetpass.php
	// - cplog/txnview.php
	
	// Module: donate
	// - donate/complete
	// - donate/history
	// - donate/index
	// - donate/trusted
	
	// Module: errors
	// - errors/missing_action
	'MissingActionTitle'      => 'Missing Action',
	'MissingActionHeading'    => 'Missing Action!',
	'MissingActionModLabel'   => 'Module:',
	'MissingActionActLabel'   => 'Action:',
	'MissingActionReqLabel'   => 'Request URI:',
	'MissingActionLocLabel'   => 'File system location:',
	// - errors/missing_view
	'MissingViewTitle'        => 'Missing View',
	'MissingViewHeading'      => 'Missing View!',
	'MissingViewModLabel'     => 'Module:',
	'MissingViewActLabel'     => 'Action:',
	'MissingViewReqLabel'     => 'Request URI:',
	'MissingViewLocLabel'     => 'File system location:',
	
	// Module: guild
	// - guild/export
	// - guild/index
	// - guild/view
	
	// Module: history
	// - history/cplogin
	'HistoryCpLoginTitle'     => 'Control Panel Logins',
	'HistoryCpLoginHeading'   => 'Control Panel Logins',
	'HistoryLoginDateLabel'   => 'Login Date/Time',
	'HistoryIpAddrLabel'      => 'IP Address',
	'HistoryErrorCodeLabel'   => 'Error Code',
	'HistoryNoCpLogins'       => 'No control panel login attempts found.',
	// -history/emailchange
	'HistoryEmailTitle'       => 'E-Mail Changes',
	'HistoryEmailHeading'     => 'E-Mail Changes',
	'HistoryEmailRequestDate' => 'Request Date/Time',
	'HistoryEmailRequestIp'   => 'Request IP',
	'HistoryEmailOldAddress'  => 'Old E-Mail',
	'HistoryEmailNewAddress'  => 'New E-Mail',
	'HistoryEmailChangeDate'  => 'Change Date',
	'HistoryEmailChangeIp'    => 'Change IP',
	'HistoryNoEmailChanges'   => 'No e-mail change attempts found.',
	// - history/gamelogin
	'HistoryGameLoginTitle'   => 'Game Logins',
	'HistoryGameLoginHeading' => 'Game Logins',
	'HistoryRepsCodeLabel'    => 'Response Code',
	'HistoryLogMessageLabel'  => 'Log Message',
	'HistoryNoGameLogins'     => 'No in-game login attempts found.',
	// - history/index
	'HistoryIndexTitle'       => 'My Account History',
	'HistoryIndexHeading'     => 'My Account History',
	'HistoryIndexInfo'        => 'Here you can view past account activity of your account.',
	'HistoryIndexInfo2'       => 'Please select an action from the menu.',
	
	// Module: ipban
	// - ipban/add
	'IpbanAddTitle'           => 'Add IP Ban',
	'IpbanEnterIpPattern'     => 'Please input an IP address or pattern.',
	'IpbanInvalidPattern'     => 'Invalid IP address or pattern.',
	'IpbanEnterReason'        => 'Please enter a reason for the IP ban.',
	'IpbanSelectUnbanDate'    => 'Unban date is required.',
	'IpbanFutureDate'         => 'Unban date must be specified to a future date.',
	'IpbanAlreadyBanned'      => 'A matching IP (%s) has already been banned.',
	'IpbanPatternBanned'      => "The IP address/pattern '%s' has been banned.",
	'IpbanAddFailed'          => 'Failed to add IP ban.',
	'IpbanAddHeading'         => 'Add IP Ban',
	'IpbanIpAddressLabel'     => 'IP Address',
	'IpbanReasonLabel'        => 'Ban Reason',
	'IpbanUnbanDateLabel'     => 'Unban Date',
	'IpbanIpAddressInfo'      => 'You may specify a pattern such as 218.139.*.*',
	'IpbanAddButton'          => 'Add IP Ban',
	// - ipban/edit
	'IpbanEditTitle'          => 'Modify IP Ban',
	'IpbanEditFailed'         => 'Failed to modify IP ban.',
	'IpbanEditHeading'        => 'Modify IP Ban',
	'IpbanEditButton'         => 'Modify IP Ban',
	// - ipban/index
	'IpbanListTitle'          => 'IP Ban List',
	'IpbanListHeading'        => 'IP Ban List',
	'IpbanBannedIpLabel'      => 'Banned IP',
	'IpbanBanDateLabel'       => 'Ban Date',
	'IpbanBanReasonLabel'     => 'Ban Reason',
	'IpbanBanExpireLabel'     => 'Ban Expiration Date',
	'IpbanModifyLink'         => 'Modify',
	'IpbanUnbanButton'        => 'Unban Selected',
	'IpbanListNoBans'         => 'There are currently no IP bans.',
	// - ipban/unban
	'IpbanNothingToUnban'     => 'Nothing to unban.',
	'IpbanUnbanned'           => 'Lifted selected IP ban(s)!',
	
	// Module: item
	// - item/add
	// - item/copy
	// - item/edit
	// - item/index
	// - item/view
	
	// Module: itemshop
	// - itemshop/add
	// - itemshop/delete
	// - itemshop/edit
	// - itemshop/imagedel
	
	// Module: logdata
	// - logdata/index
	// - logdata/login
	
	// Module: mail
	// - mail/index
	
	// Module: main
	// - main/index
	'MainPageHeading'         => 'Flux Control Panel',
	'MainPageInfo'            => "If you are seeing this page, it's likely that you've successfully installed Flux.",
	'MainPageInfo2'           => "Would you like to change this page? Well, here's how you can:",
	'MainPageStep1'           => 'Open "%s" in your text editor.',
	'MainPageStep2'           => 'Edit the file from your editor and save your changes.',
	'MainPageThanks'          => 'Thanks for using Flux!',
	// - main/pagenotfound
	'PageNotFoundTitle'       => '404 Page Not Found',
	'PageNotFoundHeading'     => 'Page Not Found',
	'PageNotFoundInfo'        => 'The page you have requested was not found on our server.  Please check the address and make sure it is correct, and try again.',
	// - main/preprocess
	'DisallowedDuringWoE'     => 'The page you have requested is not accessible during WoE.',
	
	// Module: monster
	// - monster/index
	// - monster/view
	
	// Module: purchase
	// - purchase/add
	// - purchase/cart
	// - purchase/checkout
	// - purchase/clear
	// - purchase/index
	// - purchase/pending
	// - purchase/remove
	
	// Module: ranking
	// - ranking/character
	// - ranking/guild
	// - ranking/zeny
	
	// Module: reload
	// - reload/index
	'ReloadTitle'             => 'Reload Databases',
	'ReloadHeading'           => 'Reload Databases',
	'ReloadInfo'              => 'You may reload the server databases here.',
	'ReloadInfo2'             => 'Please select the database that you would like to reload from the available actions.',
	// - reload/mobskill
	'ReloadMobSkillsTitle'    => 'Reload Mob Skills',
	'ReloadMobSkillsHeading'  => 'Reload Mob Skills',
	'ReloadMobSkillsError1'   => '%s is not readable.',
	'ReloadMobSkillsError2'   => '%s is not readable.',
	'ReloadMobSkillsError3'   => '%s is not writable.',
	'ReloadMobSkillsInfo'     => 'Mob skills database has been successfully reloaded! (%s bytes written)',
	
	// Module: server
	// - server/info
	'ServerInfoTitle'         => 'Server Information',
	'ServerInfoHeading'       => 'Server Information',
	'ServerInfoText'          => "Here you'll find various server information.",
	'ServerInfoSubHeading'    => 'Information for %s',
	'ServerInfoSubHeading2'   => 'Job Class Information for %s',
	'ServerInfoAccountLabel'  => 'Accounts',
	'ServerInfoCharLabel'     => 'Characters',
	'ServerInfoGuildLabel'    => 'Guilds',
	'ServerInfoPartyLabel'    => 'Parties',
	'ServerInfoZenyLabel'     => 'Zeny',
	// - server/status
	'ServerStatusTitle'       => 'Current Server Status',
	'ServerStatusHeading'     => 'Server Status',
	'ServerStatusInfo'        => "Understanding the online and offline status of each server can help you understand how an issue can relate to your problem. For example, if the login server is offline it means that you won't be able to log into the game. The character server and map servers are necessary for the actual gameplay past the point of logging in.",
	'ServerStatusServerLabel' => 'Server',
	'ServerStatusLoginLabel'  => 'Login Server',
	'ServerStatusCharLabel'   => 'Character Server',
	'ServerStatusMapLabel'    => 'Map Server',
	'ServerStatusOnlineLabel' => 'Players Online',
	
	// Module: service
	// - service/tos
	'TermsTitle'              => 'Terms of Service',
	'TermsHeading'            => 'Terms of Service',
	'TermsInfo'               => 'Please read before creating an account!',
	'TermsInfo2'              => "FOR CONTROL PANEL ADMINISTRATOR:  You may add your server's ToS in this view file directly.  The location of the view file is: %s",
	
	// Module: unauthorized
	// - unauthorized/index
	'UnauthorizedTitle'       => 'Unauthorized',
	'UnauthorizedHeading'     => 'Unauthorized',
	'UnauthorizedInfo'        => 'You are unauthorized to view this page. <a href="%s">Redirecting…</a>',
	
	// Module: woe
	// - woe/index
);
?>