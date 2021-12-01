<?php

	$mysqli = new mysqli("mysql.eecs.ku.edu", "b808r060", "aiw4ooho", "b808r060");

	$userID = $_REQUEST["users"];
	$query = "SELECT * FROM Posts WHERE author_id='$userID'";

	echo "<table border='solid'>";
	echo "<tr> <th> Posts From " . $userID . "</th>";
	$result = $mysqli->query($query);
	while($row = $result->fetch_assoc())
	{
		echo "<tr><td>" . $row["content"] . "</td></tr>";
	}
	echo "<table>";	 
?>
