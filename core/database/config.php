<?php 
$dsn = 'mysql:host=localhost;dbname=logreg';
$user = 'root';
$pass = '';

try{
	$pdo = new PDO($dsn,$user,$pass);
}
catch(PDOException $e){
	echo 'connection failed'.$e->getMessage();
}