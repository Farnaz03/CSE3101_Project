<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Contact Update</title>
		<link rel="stylesheet" href="styles.css" type="text/css"  />
	</head>
	<body style="background-color: #33658A;">
		<div id="main2">
			<?php
				require_once 'dbConnection.php';
				require_once 'functions.php';

				if($_POST)
				{
					// STORE THE VALUES PASSED BY edit.php INTO VARIABLES
					$cID = $_POST['id'];
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

					// STORE THE SQL UPDATE QUERY INTO A VARIABLE
					$updateStmt = "UPDATE contacts SET firstname = '$fname', middlenameone = '$mnameone', middlenametwo = '$mnametwo', lastname = '$lname', nickname = '$nname', homenumber = '$hnumber', worknumber = '$wnumber', mobilenumber = '$mnumber', addresslineone = '$alineone', addresslinetwo = '$alinetwo', email = '$email',  dob = '$dobirth', memo = '$memo' WHERE contactID=$cID";
					
					// QUERY THE DATABASE
					$updateQuery = mysqli_query($dbConnected, $updateStmt);

					// MESSAGES TO DISPLAY UPON THE SUCCESS OR FAILURE OF THE QUERY
					if($updateQuery)
					{
						echo"<div style='margin-top:10%; font-size:2em;'> <center>";
						echo "<h1 ><font color='#F6AE2D'>SUCCESSFUL UPDATE!</font></h1>";
						echo "<p><b><font color='#25E6E8'>Member Updated in Database.</b></p>";
						echo "</center></div>";
					}
					else
					{
						echo "There was an error. Contact not updated!";
					}
				}

				if($_SESSION['user']['user_type'] == 'user')
				{
					echo "<a href='contacts.php'><center><button class='logoutButton' style='float:none; font-size:1.2em; padding:8px 25px;'>Back</button></center></a>";
				}
				else
				{
					$selectUserID = "SELECT * FROM contacts WHERE contactID = $cID";
					$queryUserID = mysqli_query($dbConnected, $selectUserID);
					$row = mysqli_fetch_array($queryUserID, MYSQLI_ASSOC);
					echo "<a href='admin_contacts_view.php?uid=".$row['userID']."'><center><button class='logoutButton' style='float:none; font-size:1.2em; padding:8px 25px;'>Back</button></center></a>";
				}
			?>
        </div>
    </body>
</html>
