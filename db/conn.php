<?php 
/*
* To connect to a database you can use APIs or PDOs
*/	
	// local database connection
	// $host = '127.0.0.1';
	// $db = 'attendance_db';
	// $user = 'root';
	// $pass = '';
	// $charset = 'utf8mb4';


    // remote database connection
	$host = 'remotemysql.com';
	$db = 'KHI4MyizfN';
	$user = 'KHI4MyizfN';
	$pass = 'n9xhGrbywv';
	$charset = 'utf8mb4';

	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

	try{
		$pdo = new PDO($dsn, $user, $pass);
		// if there is an error we want to see it
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		throw new PDOException($e->getMessage());
	} 

	require_once 'crud.php';
	require_once 'user.php';
	$crud = new crud($pdo);
	$user = new user($pdo);

	$user->insertUser("admin", "password");



?>