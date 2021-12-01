<?php

	$mysqli = new mysqli("mysql.eecs.ku.edu", "b808r060", "aiw4ooho", "b808r060");
	$query = "SELECT * FROM Users";
	
	$result = $mysqli->query($query);
	
	while($row = $result->fetch_assoc())
	{
		echo "<option>" . $row["user_id"] . "</option>";
	}	 
?>
