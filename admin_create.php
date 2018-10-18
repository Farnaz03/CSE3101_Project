<?php
	require_once "dbConnection.php";
	require_once "functions.php";
	
	if(isset($_GET['userID']))
	{
		$theUser = $_GET['userID'];
	}
	
	if (isset($_POST['create']))	// STORING THE VALUES SUBMITTED FROM THE FORM INTO VARIABLES
	{
		$fname = $_POST['firstname'];
		$mnameone = $_POST['middlenameone'];
		$mnametwo = $_POST['middlenametwo'];
		$lname = $_POST['lastname'];
		$nname = $_POST['nickname'];
		$hnumber = $_POST['homenumber'];
		$wnumber = $_POST['worknumber'];
		$mnumber = $_POST['mobilenumber'];
		$alineone = $_POST['addresslineone'];
		$alinetwo = $_POST['addresslinetwo'];
		$email =  $_POST['email'];
		$dobirth = $_POST['dob'];
		$memo = $_POST['memo'];
		
		if ($theUser == 2)
		{
			// SQL QUERY TO INSERT CONTACT INFORMATION INTO THE CONTACTS TABLE OF THE DATABASE
			$sql = "INSERT INTO contacts (firstname, middlenameone, middlenametwo, lastname, nickname, homenumber, worknumber, mobilenumber, addresslineone, addresslinetwo, email, dob, memo, userID) VALUES ('$fname', '$mnameone', '$mnametwo', '$lname', '$nname', '$hnumber', '$wnumber', '$mnumber', '$alineone', '$alinetwo', '$email', '$dobirth', '$memo', 2)"; 
			$sqlQuery = mysqli_query($dbConnected, $sql);
			$_SESSION['message'] = "Address saved"; 
			header('location: admin_contacts_view.php?uid=2');
		}
		else
		{
			// SQL QUERY TO INSERT CONTACT INFORMATION INTO THE CONTACTS TABLE OF THE DATABASE
			$sql = "INSERT INTO contacts (firstname, middlenameone, middlenametwo, lastname, nickname, homenumber, worknumber, mobilenumber, addresslineone, addresslinetwo, email, dob, memo, userID) VALUES ('$fname', '$mnameone', '$mnametwo', '$lname', '$nname', '$hnumber', '$wnumber', '$mnumber', '$alineone', '$alinetwo', '$email', '$dobirth', '$memo', 3)"; 
			$sqlQuery = mysqli_query($dbConnected, $sql);
			$_SESSION['message'] = "Address saved"; 
			header('location: admin_contacts_view.php?uid=3');
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Add Contact</title>
		<link href="createstyle.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<div id="main2">
			<div style="margin-left: 20%; margin-right: 20%;"> 
				<form method='post' action="admin_create.php" class="formFormat">	<!-- FORM TO CAPTURE USER'S INPUT -->
					<h2 style="text-align:center; margin: 0px; margin-bottom: 2%; padding: 0px; font-size:2em; color:#2F4858;">Add New Contact </h2>
					<div class="row">
						<div class="column" style="padding-left: 11%;">
							<label>First Name</label> <br>
							<input type='text' name='firstname' class='form-control' placeholder='' /> <br>

							<label>Last Name</label> <br>
							<input type='text' name='lastname' class='form-control' placeholder='' /> <br>

							<label>Middle Name1</label><br>
							<input type='text' name='middlenameone' class='form-control' placeholder='' /> <br>

							<label>Middle Name2</label><br>
							<input type='text' name='middlenametwo' class='form-control' placeholder='' /> <br>

							<label>Nickname</label><br>
							<input type='text' name='nickname' class='form-control' placeholder='' /> <br>

							<label>Home Number</label><br>
							<input type='text' name='homenumber' class='form-control' placeholder='' /> <br>

							<label>Mobile Number</label><br>
							<input type='text' name='mobilenumber' class='form-control' placeholder='' /> <br>

							<label>Work Number</label><br>
							<input type='text' name='worknumber' class='form-control' placeholder='' /> <br>
						</div>
				
						<div class="column" >
							<label>Email</label><br>
							<input type='text' name='email' class='form-control' placeholder='' /> <br>   

							<label>Address Line 1</label><br>
							<input type='text' name='addresslineone' class='form-control' placeholder='' /> <br>
							
							 <label>Address Line 2</label><br>
							<input type='text' name='addresslinetwo' class='form-control' placeholder='' /> <br>
							
							<label>Date of Birth</label><br>
							<input type='Date' name='dob' class='form-control' placeholder='' /> <br>
							
							<label>Memo</label> <br>
							<input type='textarea' name='memo' class='form-control' placeholder='' /> <br>
							<br>
							<input type="submit" name="create" value="ADD">
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>


	