<?php
require_once "app/classes/User.php"; 
require_once 'inc/header.php' ;

$user = new User();
$user->logout();

header('Location: login.php');
exit();