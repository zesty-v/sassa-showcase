<?php

    require($_SERVER['DOCUMENT_ROOT'] . '/const-site.php');

    sleep(CONST_PAGE_DELAY);
   
    require($_SERVER['DOCUMENT_ROOT'] . '/page-man.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/dn-api/dn-active-check.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/dw-api/dw-active-check.php');

    $_SESSION['sessionAudit'][] = time() . ': ' . $_SESSION['userName'] . ' - ' . $_SESSION['curr-id'] . ' Marking Child Support Grant application documents that are available.';

?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
    <title>SASSA - Older Persons Grant - Documentation</title>

    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link href="/css/bootstrap-4.4.1.css" rel="stylesheet">
      
    <!-- Custom CSS -->
	<link href="/css/sassa-custom.css" rel="stylesheet">

    <!-- Include Bootstrap CSS (optional, for styling) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>

    <?php require('../modalmessage.php'); ?>
    <?php require('../navbar.php'); ?>
      
    <div class="row">
       <div class="col-sm text-center img-fluid pt-3"><img src="/images/6.2.oldagegrant.png" alt="" class="img-fluid"></div>
    </div>

	<div class="jumbotron jumbotron-fluid text-center custom-jumbotron">
		<div class="container">
            <div class="row">
                <div class="col-sm">
        	        <hr class="my-0">
                    <div class="display-4">Older Persons Grant: Documents</div>
                    <hr class="my-2">
                </div>
            </div>
		</div>
        
        <div class="container">
            <!-- Row 1 -->
            <div class="row flex-nowrap">
                <div class="col-3 h3 text-right">Required</div>
                <div class="col-6 h3 text-center">Document</div>
                <div class="col-3 h3 text-left">Present</div>
            </div>

            <!-- Row 2 -->
            <div class="row flex-nowrap">
                <div class="col-3 text-right">
                    <input class="form-check-input red-checkbox" type="checkbox" id="2-1-check" checked disabled>
                </div>
                <div class="col-6 lead text-center">Parent or Guardian's ID</div>
                <div class="col-3 text-left">
                    <input class="form-check-input" type="checkbox" id="2-2-check">
                </div>
            </div>

            <!-- Row 3 -->
            <div class="row flex-nowrap">
                <div class="col-3 text-right">
                    <input class="form-check-input red-checkbox" type="checkbox" id="3-1-check" checked disabled>
                </div>
                <div class="col-6 lead text-center">Child(rens)'s Birth Certificate</div>
                <div class="col-3 text-left">
                    <input class="form-check-input" type="checkbox" id="3-2-check">
                </div>
            </div>

            <!-- Row 4 -->
            <div class="row flex-nowrap">
                <div class="col-3 text-right">
                    <input class="form-check-input red-checkbox" type="checkbox" id="4-1-check" checked disabled>
                </div>
                <div class="col-6 lead text-center">Proof of maintenance received for child(ren)</div>
                <div class="col-3 text-left">
                    <input class="form-check-input" type="checkbox" id="4-2-check">
                </div>
            </div>

            <!-- Row 5 -->
            <div class="row flex-nowrap">
                <div class="col-3 text-right">
                    <input class="form-check-input" type="checkbox" id="5-1-check checked disabled">
                </div>
                <div class="col-6 lead text-center">Proof of income</div>
                <div class="col-3 text-left">
                    <input class="form-check-input" type="checkbox" id="5-2-check">
                </div>
            </div>

            <!-- Row 6 -->
            <div class="row flex-nowrap">
                <div class="col-3 text-right">
                    <input class="form-check-input" type="checkbox" id="6-1-check">
                </div>
                <div class="col-6 lead text-center">Court order stating applicant has custody over the child (if divorced)</div>
                <div class="col-3 text-left">
                    <input class="form-check-input" type="checkbox" id="6-2-check">
                </div>
            </div>

            <!-- Row 7 -->
            <div class="row flex-nowrap">
                <div class="col-3 text-right">
                    <input class="form-check-input" type="checkbox" id="7-1-check">
                </div>
                <div class="col-6 lead text-center">Death certificate if missing persons report from SAPS (orpahns)</div>
                <div class="col-3 text-left">
                    <input class="form-check-input" type="checkbox" id="7-2-check">
                </div>
            </div>

            <!-- Row 8 -->
            <div class="row flex-nowrap">
                <div class="col-3 text-right">
                    <input class="form-check-input" type="checkbox" id="8-1-check">
                </div>
                <div class="col-6 lead text-center">Marriage Certificate if applicable</div>
                <div class="col-3 text-left">
                    <input class="form-check-input" type="checkbox" id="8-2-check">
                </div>
            </div>

            <div class="row flex-nowrap  justify-content-center">
                <div class="col-sm-3 m-1 p-1 text-center lead">
                    <button type="button" class="btn btn-primary" onclick="history.back();">&lt;- Back</button>
                </div>
                <div class="col-sm-3 m-1 p-1 text-center lead">
                    <button type="button" class="btn btn-warning" onclick="window.location.href='../menu.php'">Cancel</button>
                </div>
                <div class="col-sm-3 m-1 p-1 text-center lead">
                    <button type="button" class="btn btn-primary">Next -&gt;</button>
                </div>
            </div>

            <hr class="my-2">
                        
        </div>
    </div>


    <?php include('../bottom-status.php'); ?>
                
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="/js/jquery-3.4.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap-4.4.1.js"></script>
	  
	<!-- Custom functions for SASSA -->
    <script src="/js/sassafunctions.js"></script>
	  
<?php var_dump($_SESSION['sessionAudit']); ?>

    </body>
</html>



            
            
            
            