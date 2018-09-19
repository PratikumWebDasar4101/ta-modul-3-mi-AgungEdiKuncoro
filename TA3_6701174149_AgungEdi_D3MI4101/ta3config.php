
<?php 
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "telyutizen";
 	try{
		$koneksi = new PDO("mysql:host={$host}; dbname={$database};", $username,$password);
		$koneksi -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $x){
		print "Koneksi atau query bermasalah : " . $x -> getMessage() . "<br>";
		die();
	}
 ?>  