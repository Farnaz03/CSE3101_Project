<?php
	include_once 'dbConnection.php';
	include('functions.php');
	
	if(isset($_GET['eid']) && $_GET['eid'] !== '')
	{
		// STORE THE ID OF THE CONTACT TO BE EDITED IN A VARIABLE
		$contactID = $_GET['eid'];
		
		// QUERY TO SELECT THE CONTACT FROM THE CONTACTS TABLE OF THE DATABASE
		$queryStmt = "SELECT * FROM contacts WHERE contactID = $contactID";
		
		// QUERY THE DATABASE AND STORE THE RESULT IN THE VARIABLE $contactsQuery
		$contactsQuery = mysqli_query($dbConnected, $queryStmt);
		
		// STORE THE RESULT AS AN ASSOCIATIVE ARRAY
		$row = mysqli_fetch_array($contactsQuery, MYSQLI_ASSOC);
	}
	/*else
	{
		echo "eid is empty";
	}*/
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Edit Contact</title>
		<link href="createstyle.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<div id="main2">
			<div style="margin-left: 20%; margin-right: 20%;">
				<form method='post' action="update.php" class="formFormat">
					<h2 style="text-align:center; margin: 0px; margin-bottom: 2%; padding: 0px; font-size:2em; color:#2F4858;">Add New Contact</h2>
					<div class="row">
						<div class="column" style="padding-left: 11%;">
							
							<input type='hidden' name='id' value="<?php echo $row['contactID'];?>" class='form-control' placeholder='' /> <br>
							
							<label for="firstname">First Name</label> <br>
							<input type='text' name='firstname' value="<?php echo $row['firstname'];?>" class='form-control' placeholder='' /> <br>

							<label for="middlenameone">Middle Name 1</label><br>
							<input type='text' name='middlenameone' value="<?php echo $row['middlenameone'];?>" class='form-control' placeholder='' /> <br>

							<label for="middlenametwo">Middle Name 2</label><br>
							<input type='text' name='middlenametwo' value="<?php echo $row['middlenametwo'];?>" class='form-control' placeholder='' /> <br>

							<label for="lastname">Last Name</label> <br>
							<input type='text' name='lastname' value="<?php echo $row['lastname'];?>" class='form-control' placeholder='' /> <br>

							<label for="nickname">Nickname</label><br>
							<input type='text' name='nickname' value="<?php echo $row['nickname'];?>" class='form-control' placeholder='' /> <br>

							<label for="homenumber">Home Number</label><br>
							<input type='text' name='homenumber' value="<?php echo $row['homenumber'];?>" class='form-control' placeholder='' /> <br>

							<label for="mobilenumber">Mobile Number</label><br>
							<input type='text' name='mobilenumber' value="<?php echo $row['mobilenumber'];?>" class='form-control' placeholder='' /> <br>

							<label for="worknumber">Work Number</label><br>
							<input type='text' name='worknumber' value="<?php echo $row['worknumber'];?>" class='form-control' placeholder='' /> <br>
						</div>

						<div class="column" >
							<br>
							<label for="addresslineone">Address Line 1</label><br>
							<input type='text' name='addresslineone' value="<?php echo $row['addresslineone'];?>" class='form-control' placeholder='' /> <br>
							
							 <label for="addresslinetwo">Address Line 2</label><br>
							<input type='text' name='addresslinetwo' value="<?php echo $row['addresslinetwo'];?>" class='form-control' placeholder='' /> <br>
							
							<label for="email">Email</label><br>
							<input type='text' name='email' value="<?php echo $row['email'];?>" class='form-control' placeholder='' /> <br>
							
							<label for="dob">Date of Birth</label><br>
							<input type='Date' name='dob' value="<?php echo $row['dob'];?>" class='form-control' placeholder='' /> <br>
							
							<label for="memo">Memo</label> <br>
							<input type='textarea' name='memo' value="<?php echo $row['memo'];?>" class='form-control' placeholder='' /> <br>
					
							<br>
							<input type="submit" class="viewContactButton"; value="Save">
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
