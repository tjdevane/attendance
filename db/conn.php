<?php 
/*
* To connect to a database you can use APIs or PDOs
*/	
	// 
	$host = '127.0.0.1';
	$db = 'attendance_db';
	$user = 'root';
	$pass = '';
	$charset = 'utf8mb4';


    // remote database connection
	$host = 'remotemysql.com';
	$db = 'KHI4MyizfN';
	$user = 'KHI4MyizfN';
	$pass = 'n9xhGrbywv';
	$charset = 'utf8mb4';

	// an engine for connecting to the database
	// dsn: data source name
	// msql is the driver (type of database connecting to)
	// 9:13 ch.26
	// https://www.php.net/manual/en/book.pdo.php
	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

	try{
		$pdo = new PDO($dsn, $user, $pass);
		// if there is an error we want to see it
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		throw new PDOException($e->getMessage());
	} 

	require_once 'crud.php';
	$crud = new crud($pdo);

?>