<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Search</title>
		<link href="styles.css" rel="stylesheet" type="text/css">
		<script src="function.js"></script>
	</head>

	<body>
		<div id="main2">
			<?php
				include_once 'dbConnection.php';
				require_once 'functions.php';
				echo"<div>";
					if(isset($_POST['search'])){
						$q = $_POST['q'];
						$sql = "SELECT * FROM contacts WHERE firstname LIKE '%" . $q . "%' OR middlenameone LIKE '%" . $q . "%' OR";
						$sql .= " middlenametwo LIKE '%" . $q . "%' OR lastname LIKE '%" . $q . "%' OR nickname LIKE '%" . $q . "%' OR";
						$sql .= " homenumber LIKE '%" . $q . "%' OR worknumber LIKE '%" . $q . "%' OR mobilenumber LIKE '%" . $q . "%' OR";
						$sql .= " addresslineone LIKE '%" . $q . "%' OR addresslinetwo LIKE '%" . $q . "%' OR email LIKE '%" . $q . "%' OR";
						$sql .= " dob LIKE '%" . $q . "%' OR memo LIKE '%" . $q . "%'";
						$query = mysqli_query($dbConnected, $sql);
						$count = mysqli_num_rows($query);
						
						if($count == "0")
						{
							echo "No result found!</font></div>";
						}
						else
						{
							echo"<div style='margin: 5% 30% 10% 30%;'>";
							echo "<table class='searchContent'>";
								
								$indx = 1;
								while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
								{
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
									
									echo "<tr> <th align='right'>Contact ID: </th> <td> $ID </td> </tr>"; 
									echo "<tr><th align='right'>First Name: </th><td>".$FirstName."</td></tr>";
									echo "<tr><th align='right'>Middle Name: </th><td>".$MiddleNameOne."</td></tr>";
									echo "<tr><th align='right'>Middle Name: </th><td>".$MiddleNameTwo."</td></tr>";
									echo "<tr><th align='right'>Last Name: </th><td>".$LastName."</td></tr>";
									echo "<tr><th align='right'>Nickname: </th><td>".$Nickname."</td></tr>";
									echo "<tr><th align='right'>Home Number: </th><td>".$HomeNumber."</td></tr>";
									echo "<tr><th align='right'>Work Number: </th><td>".$WorkNumber."</td></tr>";
									echo "<tr><th align='right'>Mobile Number: </th><td>".$MobileNumber."</td></tr>";
									echo "<tr><th align='right'>Address Line 1: </th><td>".$AddressLineOne."</td></tr>";
									echo "<tr><th align='right'>Address Line 2: </th><td>".$AddressLineTwo."</td></tr>";
									echo "<tr><th align='right'>Date of Birth: </th><td>".$DateOfBirth."</td></tr>";
									echo "<tr><th align='right'>Memo: </th><td>".$Memo."</td></tr>";
									echo "<tr> <td align='center' colspan='2' style='padding:15px;'><a href='edit.php?eid=".$row['contactID']."' title='Edit'><img src='images/edit.png' width='50px' style='margin-right:15px;'/></a>  
										<a href='functions.php?id=".$row['contactID']."' title='Delete'><img src='images/delete.png' width='50px'/></a></td> </tr>";

									$indx++;
								}
							echo"</table> <br>";
							
							mysqli_free_result($query);
						}
						
						echo "<div style='margin-left:92%;'>";
							if($_SESSION['user']['user_type'] == 'user')
							{
								echo "<a href='contacts.php'><button class='logoutButton' style='width:130px; height: 40px; font-size:1.1em;'>Back</button</a>";
							}
							else
							{
								$sql = "SELECT * FROM contacts WHERE contactID = $ID";
								$sqlQuery = mysqli_query($dbConnected, $sql);
								$queryRow = mysqli_fetch_array($sqlQuery, MYSQLI_ASSOC);
								echo "<p><a href='admin_contacts_view.php?uid=".$queryRow['userID']."'><button class='button'>Back</button></a></p>";
							}
						echo "</div>";
					}
				echo "</div>";
			?>
		</div>
	</body>
</html>