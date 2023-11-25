<?php

    require($_SERVER['DOCUMENT_ROOT'] . '/const-site.php');

    sleep(CONST_PAGE_DELAY);
   
    require($_SERVER['DOCUMENT_ROOT'] . '/page-man.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/dn-api/dn-active-check.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/dw-api/dw-active-check.php');

    require($_SERVER['DOCUMENT_ROOT'] . '/dn-api/dn-real-time-id-verification.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/dn-api/dn-profile-id-verification.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/dn-api/dn-photo-id-verification.php');

?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
    <title>ERROR: ID Not Found</title>

    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link href="/css/bootstrap-4.4.1.css" rel="stylesheet">
      
    <!-- Custom CSS -->
	<link href="/css/sassa-custom.css" rel="stylesheet">

    <!-- Include Bootstrap CSS (optional, for styling) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>
      
    <div class="row">
       <div class="col-sm text-center img-fluid pt-3"><img src="/images/2.2.childcare.png" alt="" class="img-fluid"></div>
    </div>

	<div class="jumbotron jumbotron-fluid text-center custom-jumbotron">
		<div class="container">
            <div class="row">
                <div class="col-sm">
        	        <hr class="my-0 mt-4">
                    <div class="display-4 text-white bg-danger">ID Not Found</div>
                    <hr class="my-0">
                </div>
            </div>
		</div>
        
    
            <div class="row flex-nowrap  justify-content-center">
                <div class="col-sm-3 m-1 p-1 text-center lead">
                    <!-- No backbutton here as this is the first page after the menu. Pressing cancel will take you to the menu again. -->
                </div>

                <div class="col-sm-3 m-1 p-1 text-center lead">
                    <button type="button" class="btn btn-warning" onclick="window.location.href='../menu.php';">Go Back</button>
                </div>

                <div class="col-sm-3 m-1 p-1 text-center lead">
                    <!-- <button type="button" class="btn btn-primary" onclick="window.location.href='./child-support-docs.php';">Next -&gt;</button> -->
                </div>

            </div>

            <hr>

        </div>
    </div>
    
    <?php include('bottom-status.php'); ?>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="/js/jquery-3.4.1.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap-4.4.1.js"></script>
    
	<!-- Custom functions for SASSA -->
    <script src="/js/sassafunctions.js"></script>
    
    </body>
</html>