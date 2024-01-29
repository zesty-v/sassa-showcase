<?php

    require($_SERVER['DOCUMENT_ROOT'] . '/partials/standard-page-requires.php');
    
    // Name of the view.
    $viewName = 'ID Not Found';


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

  </head>

  <body>
      
    <?php require('modalmessage.php'); ?>
    <?php require('navbar.php'); ?>

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
                    <div></div>
                    <div class="dark-text"><h4 class="mt-4"> ID number not found on Profile or at Home Affairs</h4></div>
                    <div class="dark-text"><b> ID number: </b><?= $_SESSION['curr-id'] ?></div>
                    <div class="dark-text mb-4"><b> Application type: </b><?= $_SESSION['application-type'] ?></div>
                    
                </div>
            </div>
		</div>
        
            <div class="row flex-nowrap  justify-content-center">

                <div class="col-sm-3 m-1 p-1 text-center lead">
                    <button type="button" class="btn btn-warning btn-w-110" onclick="window.location.href='../menu.php';">Cancel</button>
                </div>

                <div class="col-sm-3 m-1 p-1 text-center lead">
                     <button type="button" class="btn btn-primary btn-w-110" onclick="window.location.href='/print-templates/print-id-not-found.php';">Print Letter</button>
                </div>

            </div>

        <?php require("./db/audit-history.php") ?>

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