<!DOCTYPE html>
<html>
<head>
	<title>Signin</title>

<?php
	include 'header.php';
	include 'bootstrap.php';
?>

<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" type="text/css" href="css/login.css">

</head>


<body>

<!-- This is the what contains all the login container which includes the form for logging in -->
	<div class="col-sm-offset-3 col-sm-6 col-xs-10 col-xs-offset-1 logincontainer">

	<!-- This is the form that contains all the neccessary login information -->
	<form class="form-horizontal" role="form" method="post" action="login.php">
		<div class="form-group">
	    	<div class="col-sm-12">
	    		<input class="form-control" type="text" id="formGroupInputSmall" placeholder="Enter username" name="username">
	    	</div>
	  	</div>	
	  	<div class="form-group">
	    	<div class="col-sm-12">
	    		<input class="form-control" type="password" id="formGroupInputSmall" placeholder="Enter password" name="password" >
	    	</div>
	  	</div>

	  	<div class="col-sm-6 col-xs-6">
			<button class="btn btn-success btn-group-justified" type ="submit" name="login" value="Log In">Login</button>
		</div>
		<div class="col-sm-6 col-xs-6">
			<a href="signup.php" class="btn btn-primary btn-group-justified">Sign Up</a>
		</div>

		<!-- This contains the login test which will give off an error if the login is incorrect -->
		<div class="col-sm-12 verificationbox">

		<?php

		include 'logintest.php';

		?>

		</div>
	</form>

	</div>

</body>
</html>

