<?php
 ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
include_once 'database/config.php';
include_once 'classes/User.class.php';


session_start();
global $pdo;

$user = new User($pdo);

define( "BASE_URL", 'http://localhost/login-registration/public' );
