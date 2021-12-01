<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	$mysqli = new mysqli("mysql.eecs.ku.edu", "b808r060", "aiw4ooho", "b808r060");
	$userID = $_REQUEST["username"];
	$content = $_REQUEST["content"];
	echo "<p> username: " . $userID . "<p><br>";
	
	$queryCounter = "SELECT * FROM Users WHERE user_id = '$userID'";
	$rowCounter = "SELECT * FROM Posts";

	$result = $mysqli->query($queryCounter);
	$result2 = $mysqli->query($rowCounter);
	$postID = ($result2->num_rows) + 1;

	$queryUsers = "INSERT INTO Posts(post_id, content, author_id) VALUES ('$postID','$content','$userID')";

	if($result->num_rows >= 1 && $content!=""){
		if($mysqli->query($queryUsers)){
			printf("Post Created Successfully!");
		}
		else{
			printf("Post Failed");
		}	
	}
	else
	{
		printf("User not in Users database or Empty Content Box. Please Try Again.");
	}

	if ($mysqli->connect_errno) { 
		printf("Connect failed: %s\n", $mysqli->connect_error); 
	}

	$mysqli->close();
?>
