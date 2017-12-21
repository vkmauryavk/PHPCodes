<?php 

$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$dbname="reg";


	$connection=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

	if (!$connection) {
		echo "Connection is working";
	}






 ?>