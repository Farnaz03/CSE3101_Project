<?php 
	// PHP SCRIPT TO ENSURE USER IS LOGGED IN BEFORE ACCESSING THE INDEX PAGE
	require_once 'dbConnection.php';
	include('functions.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>My Addressbook</title>
		<link href="styles.css" rel="stylesheet" type="text/css">
		<script src="function.js"></script>
	</head>
	<body>
		<div id="main">
			<div class="head">
				<div style="display: inline-block;">		
					<h2>ConnectMe</h2>
				</div>
				<div style="float:right; margin-top: 3%;">
					<img src="images/user1.png" width="60px">			
				
					<?php echo $_SESSION['user']['username']; ?>
						<br>
						<a href="index.php?logout='1'" style="color: #2F4858;"><button class="logoutButton">Logout</button></a>
				</div>
			</div>
			<br>
			<center>
				<h1 style="color: #F6AE2D;">Your Contacts</h1>
			</center>

			<div style="background-color: #33658A; width:100%;">
				<div style="float:right; margin: 0px; padding:0px;">
					<form method="POST" action="search.php">
						<input type="text" name="q" placeholder="search">
						<input type="submit" name="search" value="Search">
					</form>
				</div>

				<div>
					<a href="create.php"><button name="create" style="margin-top:90px;"  class="addMemberButton">+ Add Member</button></a>
				</div>
			</div>

			<?php
				
				if ($_SESSION['user']['user_type'] == 'user')	// CHECKING IF IT IS A REGULAR USER OR ADMIN
				{
					if ($_SESSION['user']['username'] == 'user1')	// CHECKING IF IT IS USER1 OR USER2
					{
						$contacts_SQLselect = "SELECT  ";	// SQL QUERY TO SELECT CONTACTS FROM THE CONTACTS TABLE OF THE DATABASE
						$contacts_SQLselect .= "contactID, firstname, middlenameone, middlenametwo, lastname, nickname, homenumber, worknumber, mobilenumber, addresslineone, addresslinetwo, email, dob, memo, userID ";	
						$contacts_SQLselect .= "FROM contacts WHERE userID = 2";
					}
					else
					{
						$contacts_SQLselect = "SELECT  ";	// SQL QUERY TO SELECT CONTACTS FROM THE CONTACTS TABLE OF THE DATABASE
						$contacts_SQLselect .= "contactID, firstname, middlenameone, middlenametwo, lastname, nickname, homenumber, worknumber, mobilenumber, addresslineone, addresslinetwo, email, dob, memo, userID ";	
						$contacts_SQLselect .= "FROM contacts WHERE userID = 3";
					}
				}
				
				$contacts_SQLselect_Query = mysqli_query($dbConnected, $contacts_SQLselect);	// QUERYING THE DATABASE
				// CREATE A TABLE TO DISPLAY THE CONTACTS class='altrowstable' id='alternatecolor'
				echo "<table>";
					echo "<thead>";							// PRINTING THE TABLE HEADINGS TO SCREEN
						echo "<tr class='altrowstable'>";
							echo "<th>Contact ID</th>";
							echo "<th>First Name</th>";
							echo "<th>Middle Name</th>";
							echo "<th>Middle Name</th>";
							echo "<th>Last Name</th>";
							echo "<th>Nickame</th>";
							echo "<th>Home Number</th>";
							echo "<th>Work Number</th>";
							echo "<th>Mobile Number</th>";
							echo "<th>Address Line 1</th>";
							echo "<th>Address Line 2</th>";
							echo "<th>Email</th>";
							echo "<th>Date of Birth</th>";
							echo "<th>Memo</th>";
							echo "<th>Edit</th>";
							echo "<th>Delete</th>";
						echo"</tr>";
					echo "</thead>";
					echo "<tbody>";
					
					$index = 1;	
					// WHILE LOOP TO CYCLE EACH ROW FROM THE QUERY RESULT
					while ($row = mysqli_fetch_array($contacts_SQLselect_Query, MYSQLI_ASSOC))
					{
						// ASSIGNING EACH CELL'S VALUE TO A VARIABLE
						$ID = $row['contactID'];
						$FirstName = $row['firstname'];
						$MiddleNameOne = $row['middlenameone'];
						$MiddleNameTwo = $row['middlenametwo'];
						$LastName = $row['lastname'];
						$Nickname = $row['nickname'];
						$HomeNumber = $row['homenumber'];
						$WorkNumber = $row['worknumber'];
						$MobileNumber = $row['mobilenumber'];
						$AddressLineOne = $row['addresslineone'];
						$AddressLineTwo = $row['addresslinetwo'];
						$Email = $row['email'];
						$DateOfBirth = $row['dob'];
						$Memo = $row['memo'];
						// PRINTING THE VALUES TO THE TABLE
						echo "<tr class='altrowstable'>";
							echo "<td>".$ID."</td>";
							echo "<td>".$FirstName."</td>";
							echo "<td>".$MiddleNameOne."</td>";
							echo "<td>".$MiddleNameTwo."</td>";
							echo "<td>".$LastName."</td>";
							echo "<td>".$Nickname."</td>";
							echo "<td>".$HomeNumber."</td>";
							echo "<td>".$WorkNumber."</td>";
							echo "<td>".$MobileNumber."</td>";
							echo "<td>".$AddressLineOne."</td>";
							echo "<td>".$AddressLineTwo."</td>";
							echo "<td>".$Email."</td>";
							echo "<td>".$DateOfBirth."</td>";
							echo "<td>".$Memo."</td>";
							echo "<td align='center'><a href='edit.php?eid=".$row['contactID']."' title='Edit'><img src='images/edit.png' width='20px'/></a></td>";
							echo "<td align='center'><a href='functions.php?id=".$row['contactID']."' title='Delete'><img src='images/delete.png' width='20px'/></a></td>";
						echo "</tr>";
						
						$index++;
					}
				echo "</table>";
	
				mysqli_free_result($contacts_SQLselect_Query);
			?>
		</div>
	</body>
</html>	
				