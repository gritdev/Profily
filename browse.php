<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
?>


<!DOCTYPE html>
<html>
	
	<head>
    <?php
       include 'bootstrap.php';
       include 'header.php';


 if($_POST['searchfront'])    {

    $bam = strip_tags($_POST['searchquery']);
    header('Location: browse.php?searchquery=' . $bam);

}







	?>

	</head>

	<body>


        <div style="margin-top:75px;">
            <?php

       
            

            if(isset($_GET['searchquery']))    {
                $searchquery=$_GET['searchquery'];
                include 'connection.php';
                include 'browseget.php';
            
        }
        else    {

            echo 'nothing searched';

    }


       

            ?>
        </div>

	</body>

</html>




