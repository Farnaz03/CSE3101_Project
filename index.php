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
			<!-- NOTIFICATION MESSAGE THAT INDICATES A SUCCESSFUL LOG IN -->
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

		   <div style="display: -webkit-box;">
			   	<div style="width: 40%; margin-left: 20%;">
					<img src="images/user1.png" class="indexavatar">
			    </div>
				<div style="width: 10%; margin-top: 20%;">
					<?php  if (isset($_SESSION['user'])) : ?>
						<strong style="font-size: 1.8em; color: #25E6E8;"><?php echo $_SESSION['user']['username']; ?></strong>
						<small>
							<br>
							<a href="index.php?logout='1'" style="color: #F26419; font-size: 1.5em;">Logout</a>
						</small>

					<?php endif ?>
				</div>
			</div>
			
			<div class='contacts_link'>
				<a href='contacts.php' style="color: #2F4858;"><button class="viewContactButton">View Contacts</button></a>   <!-- LINK TO THE LIST OF CONTACTS -->
			</div>
		</div>
	</body>
</html>