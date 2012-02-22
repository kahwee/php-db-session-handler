<?php
require('DbSessionHandler.php');
class ExampleSessionHandler extends DbSessionHandler {
	protected $pdo_data_source_name = 'mysql:dbname=test;host=127.0.0.1';
	protected $pdo_username = 'root';
	protected $pdo_password = 'root';
	protected $session_db_table = 'php_sessions';
	protected $session_name = 'member_key';
}

?>