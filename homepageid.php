<link rel="stylesheet" type="text/css" href="css/homepageid.css">

<?php

error_reporting(E_ALL & ~E_NOTICE);
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
	echo "
			
			<div class='hidden-xs col-sm-3 col-sm-offset-9 loginfrontscreen'>
				
				<div class='btn-group btn-group-justified  btndashboard'>
    				<h4>Logged in as: </h4>
 				</div>
				<h3 style='color:white; font-weight:bold;'>$username </h3>
				<br/>
				<img src='https://igcdn-photos-b-a.akamaihd.net/hphotos-ak-xaf1/t51.2885-15/e35/11371033_1691983467691913_172526407_n.jpg' class='img-circle profilepic' alt='Cinque Terre'>
				<br/>
				<div class='btn-group btn-group-justified'>
    				<a href='user.php' class='btn btndashboard'>View Dashboard</a>
 				</div>

				<br/>
				
			


			</div>
			";
			
}

?>