<?php 

require_once'db.php';
	$id=$_GET['id'];
	$query="delete from users where id=$id ";

	$result=mysqli_query($connection,$query);
	if ($result) {
		echo "delete is successful";

	}else{

		echo "Not working in delete";
	}

	header("Location:index.php");

 ?>