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

    <title>SASSA - New Grant Options</title>

    <link href="/css/bootstrap-4.4.1.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <?php include 'graph4socialmedia.php'; ?>
      
    <!-- Custom CSS -->
	<link href="/css/sassa-custom.css" rel="stylesheet">

  </head>

  <body>
      
	<div class="jumbotron jumbotron-fluid text-center">
	   <img src="/images/sassa-logo1.png" alt="" class="img-fluid">
		<div class="container">
	        <hr class="my-3">
			<input type="text" id="numberInput" oninput="formatInput(this)" placeholder="711005 5084 08 1" pattern="\d*" required>
            <div class="text-info">Enter Client SA ID number and select the grant type.</div>
<!--			<div class="jumbotron jumbotron-fluid text-center"> -->
                <div class="row flex-nowrap justify-content-center my-3">
                    <div class="col-md">
                        <a href="grantpages/care-dependency.php" onclick="return isValidSAID(this, document.getElementById('numberInput').value);">
                            <div class="position-relative">
                                <img src="images/1.0.caredependency.png" onmouseover="toggleImageSrc(this, 'images/1.1.caredependency.png');" alt="Care Dependency" onmouseout="toggleImageSrc(this, 'images/1.0.caredependency.png');" class="img-fluid max-size-210">
                                <div class="spinner-border position-absolute" role="status" style="width: 4rem; height: 4rem; top: 40%; left: 40%; display: none;">
                                </div>
                            </div>
                        </a>
                        Care Dependency<br><br>
                    </div>
                    
                    <div class="col-md">
                        <a href="grantpages/child-support.php">
                            <div class="position-relative" onclick="return isValidSAID(this, document.getElementById('numberInput').value);">
                                <img src="images/2.0.childcare.png" onmouseover="toggleImageSrc(this, 'images/2.1.childcare.png');" alt="Child Support" onmouseout="toggleImageSrc(this, 'images/2.0.childcare.png');" class="img-fluid max-size-210">
                                <div class="spinner-border position-absolute" role="status" style="width: 4rem; height: 4rem; top: 40%; left: 40%; display: none;">
                                </div>
                            </div>
                        </a>
                        Child Support<br><br>
                    </div>
                    
                    <div class="col-md">
                        <a href="grantpages/foster-child.php">
                            <div class="position-relative" onclick="return isValidSAID(this, document.getElementById('numberInput').value);">
                                <img src="images/3.0.fosterchild.png" onmouseover="toggleImageSrc(this, 'images/3.1.fosterchild.png');" alt="Foster Child" onmouseout="toggleImageSrc(this, 'images/3.0.fosterchild.png');" class="img-fluid max-size-210">
                                <div class="spinner-border position-absolute" role="status" style="width: 4rem; height: 4rem; top: 40%; left: 40%; display: none;">
                                </div>
                            </div>
                        </a>
                        Foster Child<br><br>
                    </div>
                    
                </div>
                
                <div class="row flex-nowrap justify-content-center my-3">
                    
                    <div class="col-md">
                        <a href="grantpages/disability.php" onclick="return isValidSAID(this, document.getElementById('numberInput').value);">
                            <div class="position-relative">
                                <img src="images/4.0.disability.png" onmouseover="toggleImageSrc(this, 'images/4.1.disability.png');" alt="Disability" onmouseout="toggleImageSrc(this, 'images/4.0.disability.png');" class="img-fluid max-size-210">
                                <div class="spinner-border position-absolute" role="status" style="width: 4rem; height: 4rem; top: 40%; left: 40%; display: none;">
                                </div>
                            </div>
                        </a>
                        Disability<br><br>
                    </div>
                    
                    <div class="col-md">
                        <a href="grantpages/grant-in-aid.php" onclick="return isValidSAID(this, document.getElementById('numberInput').value);">
                            <div class="position-relative">
                                <img src="images/5.0.grantinaid.png" onmouseover="toggleImageSrc(this, 'images/5.1.grantinaid.png');" alt="Grant-in-Aid" onmouseout="toggleImageSrc(this, 'images/5.0.grantinaid.png');" class="img-fluid max-size-210">
                                <div class="spinner-border position-absolute" role="status" style="width: 4rem; height: 4rem; top: 40%; left: 40%; display: none;">
                                </div>
                            </div>
                        </a>
                        Grant-in-Aid<br><br>
                    </div>
                    
                    <div class="col-md">
                        <a href="grantpages/older-persons.php" onclick="return isValidSAID(this, document.getElementById('numberInput').value);">
                            <div class="position-relative">
                                <img src="images/6.0.oldagegrant.png" onmouseover="toggleImageSrc(this, 'images/6.1.oldagegrant.png');" alt="Older Persons" onmouseout="toggleImageSrc(this, 'images/6.0.oldagegrant.png');" class="img-fluid max-size-210">
                                <div class="spinner-border position-absolute" role="status" style="width: 4rem; height: 4rem; top: 40%; left: 40%; display: none;">
                                </div>
                            </div>
                        </a>
                        Older Persons<br><br>
                    </div>
                    
                </div>
                <div class="row flex-nowrap justify-content-center my-3">
                    
                    <div class="col-md">
                        <a href="grantpages/relief-of-distress.php" onclick="return isValidSAID(this, document.getElementById('numberInput').value);">
                            <div class="position-relative">
                                <img src="images/7.0.reliefofdistress.png" onmouseover="toggleImageSrc(this, 'images/7.1.reliefofdistress.png');" alt="Relief of Distress" onmouseout="toggleImageSrc(this, 'images/7.0.reliefofdistress.png');" class="img-fluid max-size-210">
                                <div class="spinner-border position-absolute" role="status" style="width: 4rem; height: 4rem; top: 40%; left: 40%; display: none;">
                                </div>
                            </div>
                        </a>
                        Relief of Distress<br><br>
                    </div>
                    
                    <div class="col-md">
                        <a href="grantpages/war-veterans.php" onclick="return isValidSAID(this, document.getElementById('numberInput').value);">
                            <div class="position-relative">
                                <img src="images/8.0.warveterans.png" onmouseover="toggleImageSrc(this, 'images/8.1.warveterans.png');" alt="War Veterans" onmouseout="toggleImageSrc(this, 'images/8.0.warveterans.png');" class="img-fluid max-size-210">
                                <div class="spinner-border position-absolute" role="status" style="width: 4rem; height: 4rem; top: 40%; left: 40%; display: none;">
                                </div>
                            </div>
                        </a>
                        War Veterans<br><br>
                    </div>
                    <div class="col-md">
                        <a href="grantpages/covid-19-relief.php" onclick="return isValidSAID(this, document.getElementById('numberInput').value);">
                            <div class="position-relative">
                                <img src="images/9.0.caredependencycovid.png" onmouseover="toggleImageSrc(this, 'images/9.1.caredependencycovid.png');" alt="Relief of Distress" onmouseout="toggleImageSrc(this, 'images/9.0.caredependencycovid.png');" class="img-fluid max-size-210">
                                <div class="spinner-border position-absolute" role="status" style="width: 4rem; height: 4rem; top: 40%; left: 40%; display: none;">
                                </div>
                            </div>
                        </a>
                        Covid-19 Relief of Distress<br><br>
                    </div>
                </div>
            </div>
<!--		</div> -->
    </div>
    <div class="container">
       <div class="row">
		  <p class="text-center"><span class="badge badge-info"></span></p>
          <div class="text-center col-lg-6 offset-lg-3">
            <p>Copyright &copy; 2023 &middot; All Rights Reserved.<br>
				<span class="badge <?php 
                
                // Determine if the user is currently logged-in.
                echo $_SESSION['loggedin'] ? 'badge-success">logged in' : 'badge-warning">logged out';
                    
                    ?></span></span>&nbsp;<span class="badge <?php 
                    
                // Determine if Datanamics is on line.
                echo dn_isonline() ? 'badge-primary' : 'badge-danger'; 
                    
                    ?>">Datanamics</span>&nbsp;<span class="badge <?php 
                    
                // Determine if Docuware is on line.
                echo dw_isonline() ? 'badge-primary' : 'badge-danger';
                          
                    ?>">DocuWare
                
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

