<?php


?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
    <title>SASSA - Child Support Grant</title>

    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link href="/css/bootstrap-4.4.1.css" rel="stylesheet">
      
    <!-- Custom CSS -->
	<link href="/css/sassa-custom.css" rel="stylesheet">

  </head>

<body>
    <?php require('./navbar.php'); ?>
     <div class="row">
       <div class="col-sm text-center img-fluid pt-3"><img src="/images/sassa-logo1.png" alt="" class="img-fluid"></div>
    </div>  
        
    <hr class="my-0">
    <div class="jumbotron jumbotron-fluid text-center">
		
        <div class="container">
            <div class="row">
                <div class="col-sm">
        	        <hr class="my-0">
                    <div class="display-4">History / Search</div>
                    <hr class="my-2">
                </div>
            </div>
		</div>
        
        <form id="idForm" method="GET" action="/querylist.php">

            <div class="row flex-nowrap justify-content-center my-3">
                <div class="col-md-5"></div>
                <div class="col-md-2">
                    <input type="text" id="numberInput" name="idNumber" oninput="formatInput(this)" placeholder="711005 5000 00 1" pattern="[\d ]*">
                </div>
                <div class="col-md-5"></div>
            </div>
            <div class="row flex-nowrap justify-content-center my-3">
                <button type="submit" class="btn btn-primary btn-w-110">Search</button>
            </div>

        </form>
        <?php require($_SERVER['DOCUMENT_ROOT'] . '/db/audit-history.php'); ?>
        <?php include('../bottom-status.php'); ?>

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