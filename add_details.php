<?php require_once'db.php'; ?>

<?php 

	if (isset($_POST['register'])) {
		
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$email=$_POST['email'];
			$gender=$_POST['gender'];
			$city=$_POST['city'];
	
	$query="INSERT INTO users(fname,lname,email,gender,city) VALUES('$fname','$lname','$email','$gender','$city')";

	$result=mysqli_query($connection,$query);
	if ($result) {
		 echo "Query is working ";
		 header("Location:index.php");
	}


	}




 ?>