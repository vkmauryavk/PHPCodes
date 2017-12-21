n
	<?php

	$id=$_GET['id'];
	$query="SELECT * FROM users where id=$id";

	$result=mysqli_query($connection,$query);

	if (!$result) {

		echo "View is not working";
	}
	while ($row=mysqli_fetch_array($result)) {
		
			$id=$row['id'];
			$fname=$row['fname'];
			$lname=$row['lname'];
			$email=$row['email'];
			

	}
	 ?>

<?php 


	if (isset($_POST['edit'])) {

			$id=$_POST['id'];
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$email=$_POST['email'];
			$gender=$_POST['gender'];
			$city=$_POST['city'];
	
	$edit_query="UPDATE users set fname='$fname', lname='$lname',email='$email',gender='$gender',city='$city' where id=$id ";

	$edit_result=mysqli_query($connection,$edit_query);
	if ($edit_result) {
		 echo "Query is working ";
		 header("Location:index.php");
	}


	}








 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Details</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
<form class="form-group" action="edit.php" method="post">
		<div class="col-xs-5">
		<h1>Insert the Details</h1>
			<div class="panel panel-default">
				<div class="panel-body">
				<h1>Enter your Details</h1>
			
			<div class="form-group">
				<label>Fisrt Name</label>
			<input type="text" name="fname" value="<?php echo $fname; ?>" class="form-control" placeholder="Enter your First name" >
			</div>
			<div class="form-group">
				<label>Last Name</label>
			<input type="text" name="lname" value="<?php echo $lname; ?>" class="form-control" placeholder="Enter your Last name" >
			</div>
			<div class="form-group">
				<label>Email</label>
			<input type="text" name="email" value="<?php echo $email; ?>" class="form-control" placeholder="Enter your Email" >
			</div>
			<div class="form-group">
			<label>Gender </label>
				<label class="radio-inline"><input type="radio" name="gender" value="male">	Male</label>
				<label class="radio-inline"><input type="radio" name="gender" value="female">	Female</label>


				</div>
			<div class="form-group">
				<label>City</label>
			<select class="form-control" name="city">
			<option>Pune</option>
			<option>Mumbai</option>
			<option>Banglore</option>
			<option>Ahmedabad</option>
			 </select>

			</div>

	<input type="hidden" name="id" value="<?php echo $id; ?>">
		
		<input type="submit" name="edit" value="Edit" class="form-control btn-primary">
		

		</div>

		</div>
			</div>
				
</form>


</body>
</html>