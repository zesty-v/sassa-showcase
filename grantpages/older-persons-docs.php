<?php

    require($_SERVER['DOCUMENT_ROOT'] . '/const-site.php');

    sleep(CONST_PAGE_DELAY);
   
    require($_SERVER['DOCUMENT_ROOT'] . '/page-man.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/dn-api/dn-active-check.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/dw-api/dw-active-check.php');





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
    <?php include 'graph4socialmedia.php'; ?>
      
    <!-- Custom CSS -->
	<link href="/css/sassa-custom.css" rel="stylesheet">

    <!-- Include Bootstrap CSS (optional, for styling) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>

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
                <div class="col-6 lead text-center">Application Form</div>
                <div class="col-3 text-left">
                    <input class="form-check-input" type="checkbox" id="2-2-check">
                </div>
            </div>

            <!-- Row 3 -->
            <div class="row flex-nowrap">
                <div class="col-3 text-right">
                    <input class="form-check-input red-checkbox" type="checkbox" id="3-1-check" checked disabled>
                </div>
                <div class="col-6 lead text-center">Grant Applicant SA ID</div>
                <div class="col-3 text-left">
                    <input class="form-check-input" type="checkbox" id="3-2-check">
                </div>
            </div>

            <!-- Row 4 -->
            <div class="row flex-nowrap">
                <div class="col-3 text-right">
                    <input class="form-check-input red-checkbox" type="checkbox" id="4-1-check" checked disabled>
                </div>
                <div class="col-6 lead text-center">Proof of Residence</div>
                <div class="col-3 text-left">
                    <input class="form-check-input" type="checkbox" id="4-2-check">
                </div>
            </div>

            <!-- Row 5 -->
            <div class="row flex-nowrap">
                <div class="col-3 text-right">
                    <input class="form-check-input" type="checkbox" id="5-1-check">
                </div>
                <div class="col-6 lead text-center">Proof of income / dividends (if any)</div>
                <div class="col-3 text-left">
                    <input class="form-check-input" type="checkbox" id="5-2-check">
                </div>
            </div>

            <!-- Row 6 -->
            <div class="row flex-nowrap">
                <div class="col-3 text-right">
                    <input class="form-check-input" type="checkbox" id="6-1-check">
                </div>
                <div class="col-6 lead text-center">Proof of assets incl. value of property</div>
                <div class="col-3 text-left">
                    <input class="form-check-input" type="checkbox" id="6-2-check">
                </div>
            </div>

            <!-- Row 7 -->
            <div class="row flex-nowrap">
                <div class="col-3 text-right">
                    <input class="form-check-input" type="checkbox" id="7-1-check">
                </div>
                <div class="col-6 lead text-center">Proof of Private Pension</div>
                <div class="col-3 text-left">
                    <input class="form-check-input" type="checkbox" id="7-2-check">
                </div>
            </div>

            <!-- Row 8 -->
            <div class="row flex-nowrap">
                <div class="col-3 text-right">
                    <input class="form-check-input" type="checkbox" id="8-1-check" checked disabled>
                </div>
                <div class="col-6 lead text-center">3 Months bank statements</div>
                <div class="col-3 text-left">
                    <input class="form-check-input" type="checkbox" id="8-2-check">
                </div>
            </div>

            <!-- Row 9 -->
            <div class="row flex-nowrap">
                <div class="col-3 text-right">
                    <input class="form-check-input" type="checkbox" id="9-1-check">
                </div>
                <div class="col-6 lead text-center">UIF Member or Discharge certificate</div>
                <div class="col-3 text-left">
                    <input class="form-check-input" type="checkbox" id="9-2-check">
                </div>
            </div>

            <!-- Row 10 -->
            <div class="row flex-nowrap">
                <div class="col-3 text-right">
                    <input class="form-check-input red-checkbox" type="checkbox" id="10-1-check" checked disabled>
                </div>
                <div class="col-6 lead text-center">Copy of will, final liquidation and distribution accounts</div>
                <div class="col-3 text-left">
                    <input class="form-check-input" type="checkbox" id="10-2-check">
                </div>
            </div>


            <div class="row flex-nowrap  justify-content-center">
                <div class="col-sm-3 m-1 p-1 text-center lead">
                    <button type="button" class="btn btn-primary" onclick="history.back();">&lt;- Back</button>
                </div>
                <div class="col-sm-3 m-1 p-1 text-center lead">
                    <button type="button" class="btn btn-warning">Cancel</button>
                </div>
                <div class="col-sm-3 m-1 p-1 text-center lead">
                    <button type="button" class="btn btn-primary">Next -&gt;</button>
                </div>
            </div>

            <hr class="my-2">
                        
        </div>
    </div>
    <div class="container">
       <div class="row">
		  <p class="text-center"><span class="badge badge-info"></span></p>
          <div class="text-center col-lg-6 offset-lg-3">
            <p>Copyright &copy; 2023 &middot; All Rights Reserved.<br>
				<span class="shadow badge <?php 
                
                // Determine if the user is currently logged-in.
                echo $_SESSION['loggedin'] ? 'badge-success">logged in' : 'badge-warning">logged out';
                    
                    ?></span></span>&nbsp;<span class="badge <?php 
                    
                // Determine if Datanamics is on line.
                echo dn_isonline() ? 'badge-primary' : 'badge-danger'; 
                    
                    ?> shadow">Datanamics</span>&nbsp;<span class="badge <?php 
                    
                // Determine if Docuware is on line.
                echo dw_isonline() ? 'badge-primary' : 'badge-danger';
                          
                    ?> shadow">DocuWare
                
                </span>
              </p>
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


            
            
            
            