<?php
ini_set('display_errors','on');
error_reporting(E_ALL | E_STRICT);

require_once 'UserUpdateLogger.php';
require_once 'User.php';
$userArray = array(
    'user1',
    'user2',
    'user3',
    'user4',
);

$logger = new UserUpdateLogger();
$users = new Users($userArray); 

$users->attach($logger);

$users->updateUsers();