<!DOCTYPE html>
<html>

<head>

  <title>Signup</title>

  <link rel="stylesheet" type="text/css" href="css/signup.css">

  <?php
  	include 'index.php';
  	include 'bootstrap.php';
  ?>

</head>



<body>

  <div class="col-sm-offset-3 col-sm-6 col-xs-10 col-xs-offset-1 logincontainer">
    <form class="form-horizontal" role="form" method="post" action="signup.php">
    	<div class="form-group">
        	<div class="col-sm-6 col-xs-6">
        		<input class="form-control" type="text" id="formGroupInputSmall" placeholder="Enter firstname" name="firstname">
        	</div>
        	<div class="col-sm-6 col-xs-6">
        		<input class="form-control" type="text" id="formGroupInputSmall" placeholder="Enter lastname" name="lastname">
        	</div>
      </div>

    	<div class="form-group">
             <label for="genderSelect"  class="col-sm-3 col-xs-6 control-label">
                <div style="text-align: left;">Select Gender:</div>
             </label>
             <div class="col-sm-9 col-xs-6">
                <select id="genderoption" class="form-control" name="sex">
                   <option>M</option>
                   <option>F</option>
                </select>
             </div>
        </div>
        
    	  <div class="form-group">
            <label for="privacy"  class="col-sm-3 col-xs-6 control-label">
              <div style="text-align: left;">Profile Privacy:</div>
            </label>
            <div class="col-sm-9 col-xs-6">
              <select id="privacy" class="form-control" name="privacy">
                  <option>Public</option>
                  <option>Private</option>
              </select>
            </div>
        </div>

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
      	
        <div class="form-group">
        	<div class="col-sm-12">
        		<input class="form-control" type="email" id="formGroupInputSmall" placeholder="Enter email" name="email" >
        	</div>
      	</div>

      	<div class="col-sm-12 col-xs-12">
    		  <button class="btn btn-success btn-group-justified" type ="submit" name="signup" value="Log In">Sign Up</button>
    	  </div>

      	<div class="col-sm-12 verificationbox">

      	<?php

      	include 'signuptest.php';

      	?>

      	</div>

    </form>

  </div>

</body>








