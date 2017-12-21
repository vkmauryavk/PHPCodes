<?php 
//this is for fetch for data
	require_once"db.php"; ?>
<?php session_start(); ?>
<?php 



	if(isset($_SESSION['username']))
	{

		header("Location:index.php");

	}


 



 ?>

	<?php 

		if (isset($_POST['login'])) {
				
			$username=$_POST['username'];
			$password=$_POST['password'];


		$query=" SELECT * from login where name='$username'";

		$result=mysqli_query($connection,$query);

			if (!$result) {
				echo "Result is not working";
			}


		while ($row=mysqli_fetch_array($result)) {
			
				$fusername=$row['name'];
				$fpassword=$row['password'];

				if ($username==$fusername&&$password==$fpassword) {
					
					//header("location:welcome.php");
					$_SESSION['username']=$fusername;
					echo $_SESSION['username'];
					header("location:index.php");
				}
				else{

					echo "Failed";
					header("location:login.php");
				}



		}




		}


	 ?>










<!DOCTYPE html>
<html>
<head>
	<title>Login Here</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
<a href="logout.php">Logout</a>
<hr />
<div class="col-lg-4"></div>
<div class="col-lg-4">
	<div class="panel panel-primary">
			<div class="panel-body">
				<form action="login.php" method="post">
				<h2>Login Here</h2>
				<br>
				<label>Name</label>
		<input type="text" class="form-control" name="username">
			<label>Password</label>
		<input type="password" class="form-control" name="password">
		<br>
		<input type="submit"  class="form-control btn btn-primary" name="login" value="Submit">
	</form>

			</div>
		
	</div>
</div>

<div class="col-lg-4"></div>
</body>
</html>