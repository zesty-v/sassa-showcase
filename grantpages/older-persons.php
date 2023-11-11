<?php

include '/page-man.php';
include '/dn-api/dn-active-check.php';
include '/dw-api/dw-active-check.php';

?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SASSA - New Grant Options</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
	
    <!-- Custom CSS -->
	<link href="css/sassa-custom.css" rel="stylesheet">

  </head>

  <body>
      
	<div class="jumbotron jumbotron-fluid text-center">
	   <img src="images/sassa-logo1.png" alt="" class="img-fluid">
		<div class="container">
	        <hr class="my-4">
			<label for="submitbtn"><br> <b>SA ID Number:</b>&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" id="numberInput" oninput="formatInput(this)" placeholder="711005 5084 08 1" pattern="\d*" required>
            <div class="text-info"> Enter ID number and select the grant.</div>
	        <hr class="my-4">
            <div class="jumbotron jumbotron-fluid text-center">
                <div class="row">
                    <div class="col-sm">Photo</div>
                    <div class="col-sm">Older Persons Grant Banner and ID number just below</div>
                </div>
                <div class="row">
                    <div class="col-sm">Labels left</div>
                    <div class="col-sm">Values Right</div>
                    <div class="col-sm">messages of concern</div>
                </div>
                <div class="row">
                    <div class="col-sm">Button Back</div>
                    <div class="col-sm">Button Exit</div>
                    <div class="col-sm">Button Next</div>
                </div>
            </div>
		</div>
    </div>
    <div class="container">
       <div class="row">
		  <p class="text-center"><span class="badge badge-info"></span></p>
          <div class="text-center col-lg-6 offset-lg-3">
            <p>Copyright &copy; 2023 &middot; All Rights Reserved.
				<br><span class="<?php 
                    
                echo $_SESSION['loggedin'] ? 'badge badge-success">logged in' : 'badge badge-warning">logged out';
                    
                    ?></span>&nbsp;<span class="badge <?php 
                          
                echo dn_isonline() ? 'badge-primary' : 'badge-danger'; 
                          
                          ?>">Datanamics</span>&nbsp;<span class="badge <?php 
                          
                echo 'badge-danger">DocuWare';
                ?></span></p>
          </div>

       </div>
    </div>
                    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="/js/jquery-3.4.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap-4.4.1.js"></script>
	  
	<!-- Custom functions for SASSA -->
    <script src="/js/sassafunctions.js"></script>
	  
    </body>
</html>

