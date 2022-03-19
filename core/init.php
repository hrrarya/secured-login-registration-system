<?php

include_once 'database/config.php';
include_once 'classes/User.class.php';


session_start();
global $pdo;

$user = new User($pdo);

define( "BASE_URL", 'http://localhost/secured-login-registration-system/public' );
