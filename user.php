<!DOCTYPE html>
<html>
<head>
    
    <title>Profile <?php echo $username; ?></title>
    <link href="css/user.css" rel="stylesheet">

    <?php
		include 'header.php';
		include 'bootstrap.php';


		error_reporting(E_ALL & ~E_NOTICE);
		session_start();

		if (isset($_SESSION['username'])) {
		    $username = $_SESSION['username'];
		}   else {
		    header('Location: login.php');
		    die();
		}

	?>

    
</head>

<body>
	<!-- This div contains all of the profile information on the page -->
	<div class="container-fluid">

		<div class="col-sm-offset-1 col-sm-4 col-xs-6 col-xs-offset-3 usernamebox">
			<div class="col-sm-12 welcomeuser">
			<h3 class="welcometext">Welcome <?php echo $username; ?></h3>
			<br/>
			<h3 class="welcometext">Welcome <?php echo $userId; ?></h3>
			</div>
			<form class="form-horizontal" role="form" method="post" action="login.php">
				
			</form>
		</div> 


	</div>

</body>
</html>