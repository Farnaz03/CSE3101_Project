<?php
	// PHP SCRIPT TO ENSURE USER IS LOGGED IN BEFORE ACCESSING THE INDEX PAGE
	include('functions.php');
	if (!isLoggedIn())
	{
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>ConnectMe Home</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
		<div class="header">
			<h2>ConnectMe</h2>
		</div>
		<div class="content">
			<!-- NOTIFICATION MESSAGE THAT DEPENDS ON THE OUTCOME OF THE LOGIN ATTEMPT -->
			<?php if (isset($_SESSION['success'])) : ?>
				<div class="error success" >
					<h3>
						<?php 
							echo $_SESSION['success']; 
							unset($_SESSION['success']);
						?>
					</h3>
				</div>
			<?php endif ?>
			
			<!-- LOGGED IN USER INFORMATION -->
			<div style="display: -webkit-box;">
			    <div class="profile_info" style="margin-left:25%; margin-right: 10%;">
					<img src="images/admin_profile.png" style="width: 150px; height: 150px; display: inline-block;" class="indexavatar">
					<div style="float:right; display: inline-block; margin-top: 36%;">
						<?php  if (isset($_SESSION['user'])) : ?>
							<strong style="font-size: 1.8em; color: #25E6E8;"><?php echo $_SESSION['user']['username']; ?></strong>
							<small>
								<br>
								<a href="index.php?logout='1'" style="color: #F26419; font-size: 1.5em;">logout</a>
							</small>
						<?php endif ?>
					</div>
				</div>
		    </div>

			<form method="post" action="admin_contacts_view.php">	<!-- FORM TO SELECT WHICH USER CONTACTS TO VIEW -->
				<p style="font-size: 1.4em;">Select user</p>
				<select name="users" style="width: 30%; padding-top: 9px; padding-bottom: 7px;">
					<option value="user1">User1</option>
					<option value="user2">User2</option>
				</select>
				<input type="submit" name="selection" value="Select" style="width:15%;">
			</form>
		</div>
	</body>
</html>