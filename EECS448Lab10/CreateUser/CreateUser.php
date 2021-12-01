<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	$mysqli = new mysqli("mysql.eecs.ku.edu", "b808r060", "aiw4ooho", "b808r060");
	$userID = $_REQUEST["username"];
	echo "<p> username: " . $userID . "<p><br>";
	
	$queryCounter = "SELECT * FROM Users WHERE user_id = '$userID'";
	$result = $mysqli->query($queryCounter);

	$queryUsers = "INSERT INTO Users(user_id) VALUES ('$userID')";
	
	if($result->num_rows == 0 && $userID!=""){
		if($mysqli->query($queryUsers)){
			printf("User Created Successfully!");
		}
		else{
			printf("Post Failed. Please Try Again.");
		}	
	}
	else
	{
		printf("Duplicate or Empty Entry. Please Try Again.");
	}

	if ($mysqli->connect_errno) { 
		printf("Connect failed: %s\n", $mysqli->connect_error); 
	}

	$mysqli->close();
?>
