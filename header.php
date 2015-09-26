<!DOCTYPE html>
<html lang="en">
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/header.css">

<?php
    ob_start();
    include 'bootstrap.php';
?>



    <nav class="navbar navbar-fixed-top">
        <!-- This will contain the search button icon for displaying the search bar in responsive
        form -->
        <div class="visible-xs col-xs-2">
            
                <span class="glyphicon glyphicon-search" id="search container"></span>
        
        </div>

        <!-- This is where the logo will be placed -->
        <div class="Brand col-sm-3 col-xs-6">
            <a href="index.php"><h1>Profily.me</h1></a>
        </div>
        
        <!-- Container for form will be right here -->
        <form  class="input-group col-sm-5 col-xs-12" role="form" method="post" action="browse.php">
            <!-- Inputting search function for email, first name, last name, and username -->
            <input class="form-control" type="text" id="formGroupInputSmall" 
            placeholder="Enter username or email" name="searchquery">
            <!-- This consists of the button that activates the browse function -->
            <span class="input-group-btn">
                <button class="btn btn-success btn-group-justified" type ="submit" name="searchfront" value="search">Search</button>
            </span>   
        </form>

    </nav>
    

    

       

<!-- Everything below this and between the next comment belongs to the navbar -->


<!-- This closes all of the navigation menu -->











</body>

</html>