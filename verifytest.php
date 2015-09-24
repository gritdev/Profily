<link rel="stylesheet" type="text/css" href="css/verifytest.css">

<?php

error_reporting(E_ALL & ~E_NOTICE);
$passkey=$_GET['passkey'];



	include_once("connection.php");

	
	$sql = "UPDATE `learnlearn`.`members` SET `activated` = '1' WHERE `members`.`codegen` = '$passkey'";
	

	$check = mysqli_query($dbCon, "SELECT * FROM members WHERE codegen='$passkey'");
	if(mysqli_num_rows($check)==0)	{
				echo "
						<button type='button' class='btn btn-danger btn-block'>Permission denied!</button>
						<br/>
						<div class='row'>
    						<div class='span12'>
  						      	<img class='notgrantedpic' src='http://photos.johannilsson.me/images/404_dark.png' />
    						</div>    
						</div> ";
						header('Refresh: 1; URL=index.php');
	}
	elseif (mysqli_query($dbCon, $sql)) {
			echo "<button type='button' class='btn btn-default btn-block'>Successfully verified!</button>

			<br/>

			<div class='video-container'>
			<iframe width='560' height='315' src='https://www.youtube.com/embed/FrgGHAab9D8' frameborder='0' allowfullscreen></iframe>
			</div>
			<br/> 
			<div>Here is a demo on creating your profily account.</div>
			<br/>
			<a href='user.php'><button type='button' class='btn btn-success btn-block btn-justified'>Open Profily Account</button></a>";
			$usernamecheck = mysqli_query($dbCon, "SELECT username FROM members WHERE codegen='$passkey'");
			if ($usernamecheck)	{
				$row = mysqli_fetch_row($usernamecheck);
				$userId = $row[0];
				$buildprofile = "INSERT INTO profiles (profileuser) VALUES ('$userId');";
				mysqli_query($dbCon, $buildprofile);
			}


	}
	else {
				echo "Failed";
	}

?>