<link rel="stylesheet" type="text/css" href="css/logintest.css">

<?php


error_reporting(E_ALL & ~E_NOTICE);
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    header('Location: user.php');
}

if($_POST['login'])	{
	include_once("connection.php");
	$username = strip_tags($_POST['username']);
	$password = strip_tags($_POST['password']);

	$sql = "SELECT username, password FROM members 
	WHERE username = '$username' AND activated = '1'";
	$query = mysqli_query($dbCon, $sql);

	if ($query)	{
		$row = mysqli_fetch_row($query);
		$dbUsername = $row[0];
		$dbPassword = $row[1];
	}

	if ($username == '')	{
		echo "<button class='btn btn-danger btn-group-justified errorsignup active'>Please enter a username</button>";
;	}
	elseif ($username == $dbUsername && $password == $dbPassword)	
	{
		$_SESSION['username'] = $username;
		header('Location: user.php');
	}

	else 
	{
		echo "<button class='btn btn-danger btn-group-justified errorsignup active'>Incorrect password</button>";
	}


}

?>