<?php


	$sql = "SELECT username, password FROM members 
	WHERE username = '$searchquery' OR email = '$searchquery'";
	$query = mysqli_query($dbCon, $sql);

	while ($row = mysqli_fetch_row($query))	{
		$dbUser = $row[0];
		echo $dbUser;
		echo "<a href='$dbUser'>$dbUser</a>";
		echo "<br/>";
	}



?>