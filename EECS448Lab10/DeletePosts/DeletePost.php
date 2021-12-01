<?php

	$mysqli = new mysqli("mysql.eecs.ku.edu", "b808r060", "aiw4ooho", "b808r060");

	$userID = $_REQUEST["users"];
	
	foreach($_POST['postID'] as $ID){

		$query = "DELETE FROM Posts WHERE post_id=$ID";
		$mysqli->query($query);
		printf("Deleted: %s\n", $ID);}
	
	$mysqli->close();
?>
