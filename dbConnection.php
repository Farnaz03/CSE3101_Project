<?php
{
	// Database Connection Script
	include('dbConfig.php');
	$dbSuccess = false;
	// connecting to the host
	$dbConnected = mysqli_connect($db['hostname'], $db['username'], $db['password']);

	// connecting to the database upon successful host connection
	if($dbConnected)
	{
		$dbSelected = mysqli_select_db($dbConnected, $db['database']);
		if($dbSelected)
		{
			$dbSuccess = true;
		}
		else
		{
			echo "DATABASE SELECTION FAILED";
		}
	}
	else
	{
		echo "MySQL CONNECTION FAILED";
	}
}