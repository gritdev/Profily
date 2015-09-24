<?php
error_reporting(E_ALL & ~E_NOTICE);
if($_POST['signup'])    {
    include_once("connection.php");
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);
    $email = strip_tags($_POST['email']);
    $codegen=md5(uniqid(rand()));
    $firstname = strip_tags($_POST['firstname']);
    $lastname = strip_tags($_POST['lastname']);
    $gender = strip_tags($_POST['sex']);
    $privacy = strip_tags($_POST['privacy']);
    $sql = "INSERT INTO `learnlearn`.`members` (`id`, `username`, `password`, `activated`, `email`, `codegen`, `lastname`, `gender`, `firstname`, `privacy`) VALUES 
            (NULL, '$username', '$password', '0', '$email', '$codegen', '$lastname', '$gender', '$firstname', '$privacy');";
    $usernamecheck = mysqli_query($dbCon, "SELECT * FROM members WHERE username='$username'");
    $emailcheck = mysqli_query($dbCon, "SELECT * FROM members WHERE email='$email'");
    if (strlen ($username) < 1 || strlen ($username) > 20 )	{
			echo "Username must be at least 1 character and less than 20 characters.";
		}
	elseif(mysqli_num_rows($usernamecheck)>0)	{
				echo "
				<div class='col-sm-12 col-xs-12'>
					<button class='btn btn-danger btn-group-justified errorsignup active disbaled'>Username taken already</button>
				</div>";
			}
	elseif(mysqli_num_rows($emailcheck)>0)	{
				echo "
				<div class='col-sm-12 col-xs-12'>
					<button class='btn btn-danger btn-group-justified errorsignup active disbaled'>Email taken already</button>
				</div>";
			}
	elseif (strlen ($password) < 6)	{
			echo "
				<div class='col-sm-12 col-xs-12'>
					<button class='btn btn-danger btn-group-justified errorsignup active disbaled'>Password must be at least 6 characters</button>
				</div>";
		}
    else    {
        if (mysqli_query($dbCon, $sql)) {
            echo "
				<div class='col-sm-12 col-xs-12'>
					<button class='btn btn-success btn-group-justified errorsignup active'>Profile created verify email</button>
				</div>";
            // the message




                // multiple recipients
                $to  = 'gritdevteam@gmail.com'; // note the comma
        

                // subject
                $subject = 'Birthday Reminders for August';

                // message
                $link="localhost/profily/verify.php?passkey=";
                $message = "<a href='".$link."".$codegen."'>Link</a>";

                // To send HTML mail, the Content-type header must be set
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";



                // Mail it
                mail($to, $subject, $message, $headers);



        }
        else {
            echo "Failed";
        }
    }


}

?>