<?php
require('ExampleSessionHandler.php');
$session_handler = new ExampleSessionHandler();
session_start();
$_SESSION['User'] = array('username' => 'kahwee', 'country_id' => 'US', 'first_name' => 'Kah Wee', 'last_name' => 'Teng');
$_SESSION['User']['country_id'] = 'US';
$_SESSION['User']['start_ip'] = '';
unset($_SESSION['User']['first_name']);
unset($_SESSION['User']['last_name']);
var_dump($_SESSION);
?>