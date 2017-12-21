<?php 
	session_start(); ?>
<?php 
	if(!isset($_SESSION['username']))
	{

		header("Location:login.php");

	}


 ?>

<?php 
	require_once"db.php" ?>
	<?php


	$query="SELECT * FROM users ORDER BY id DESC";

	$result=mysqli_query($connection,$query);

	if ($result) {

		echo "View is working";
	}
	else{

		echo "Query is not working";
	}



 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Users List</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">

<a href="logout.php">Logout</a>
<hr />
<br>
<br>
	<h2><a href="add.php">Add users</a></h2>
<div class="panel panel-default">
<h1 align="center">This is All users Details</h1>
	<div class="panel-body">
	<table class="table table-responsive">
		<tr>
			<th>Id</th>
			<th>First name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Gender</th>
			<th>City</th>
			<th>Edit|Delete</th>
		</tr>
		
		<?php 
		while ($row=mysqli_fetch_array($result)) { 
			
			echo "<tr>";
			echo "<td>".$row['id']."</td>";	
			echo "<td>".$row['fname']."</td>";	
			echo "<td>".$row['lname']."</td>";	
			echo "<td>".$row['email']."</td>";	
			echo "<td>".$row['gender']."</td>";	
			echo "<td>".$row['city']."</td>";	
			echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a>|<a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Ary sure you want delete')\">Delete</a></td>";	

			echo "</tr>";
		 }?>
		 	
		

	</table>
		
	</div>	
</div>

	
</div>

</body>
</html>