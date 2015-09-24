<!DOCTYPE html>
<html lang="en">
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/header.css">

<?php
    ob_start();
?>



    <div class="navbar navbar-fixed-top">
        <form  class="input-group col-sm-6 col-sm-push-3" role="form" method="post" action="browse.php">
            <!-- Inputting search function for email, first name, last name, and username -->
            <input class="form-control" type="text" id="formGroupInputSmall" 
            placeholder="Enter username or email" name="searchquery">
            <!-- This consists of the button that activates the browse function -->
            <span class="input-group-btn">
                <button class="btn btn-success btn-group-justified" type ="submit" name="searchfront" value="search">Search</button>
            </span>   
        </form>
    </div>
    

    

</div>        

<!-- Everything below this and between the next comment belongs to the navbar -->


<!-- This closes all of the navigation menu -->











</body>

</html>