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
      
    <title>SASSA - Child Support Grant</title>

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
        	        <hr class="my-0">
                    <div class="display-4">Child Support: Parent ID</div>
                    <hr class="my-2">
                </div>
            </div>
		</div>
        <div class="container">

            <div class="row flex-nowrap">
                <div class="col-sm-2 m-1 p-1"></div>
                <div class="col-sm-2 m-1 p-1 pt-3 rounded-lg shadow bg-dark">
                    <div class="row flex-nowrap">
                        <div class="col-sm-12">
                            <img src="/images/id_photo.jpg" alt="ID Photo" class="img-fluid">
                        </div>
                    </div>
                    <div class="row flex-nowrap">
                        <div class="col-sm-12 text-white">
                            Online Profile / Home Affairs Live 
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">ID Number:</div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow">711005 084 08 1</div>
                    </div>
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">First Name:</div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow">Sytze</div>
                    </div>
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">Second Name: </div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow">(none)</div>
                    </div>                    
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">Last Name: </div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow">Visser</div>
                    </div>
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">Date of Birth: </div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow">1971/10/05</div>
                    </div>
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">Age: </div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow">52</div>
                    </div>
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">Gender: </div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow">Male</div>
                    </div>
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">Citizenship: </div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow">South African</div>
                    </div>
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow flex-nowrap">Deceased Status </div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow">Alive</div>
                    </div>
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">Other Grants: </div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monspace shadow">???</div>
                    </div>
                </div>
                <div class="col-sm-2 m-1 p-1"></div>
            </div>
            
            <hr class="my-4">
            <div class="display-4">Eligible Lineage</div>
            <hr class="my-2">

            <div class="row flex-nowrap">
                <div class="col-sm-2 m-1 p-1"></div>
                <div class="col-sm-2 m-1 p-1 text-right bg-dark text-white rounded-lg shadow">
                    <label class="form-check-label text-right" for="sibling1Checkbox">Sibling 1: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input class="form-check-input blue-checkbox text-right" type="checkbox" id="sibling1Checkbox">
                </div>
                <div class="col-sm-2 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">ID Number:</div>
                <div class="col-sm-4 m-1 p-1 m-1 p-1 bg-light text-left rounded-lg text-monspace shadow">000423 5003 08 3</div>
                <div class="col-sm-2 m-1 p-1"></div>
            </div>

            <div class="row flex-nowrap">
                <div class="col-sm-2 m-1 p-1"></div>
                <div class="col-sm-2 m-1 p-1"></div>
                <div class="col-sm-2 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">First Name:</div>
                <div class="col-sm-4 m-1 p-1 m-1 p-1 bg-light text-left rounded-lg text-monspace shadow">Jean</div>
                <div class="col-sm-2 m-1 p-1"></div>
            </div>

            <div class="row flex-nowrap">
                <div class="col-sm-2 m-1 p-1"></div>
                <div class="col-sm-2 m-1 p-1"></div>
                <div class="col-sm-2 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">Second Name:</div>
                <div class="col-sm-4 m-1 p-1 m-1 p-1 bg-light text-left rounded-lg text-monspace shadow">(none)</div>
                <div class="col-sm-2 m-1 p-1"></div>
            </div>

            <div class="row flex-nowrap">
                <div class="col-sm-2 m-1 p-1"></div>
                <div class="col-sm-2 m-1 p-1"></div>
                <div class="col-sm-2 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">Last Name:</div>
                <div class="col-sm-4 m-1 p-1 m-1 p-1 bg-light text-left rounded-lg text-monspace shadow">Visser</div>
                <div class="col-sm-2 m-1 p-1"></div>
            </div>

            <div class="row flex-nowrap">
                <div class="col-sm-2 m-1 p-1"></div>
                <div class="col-sm-2 m-1 p-1 text-right bg-dark text-white rounded-lg shadow">
                    <label class="form-check-label text-right" for="sibling2Checkbox">Sibling 2: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input class="form-check-input blue-checkbox text-right" type="checkbox" id="sibling2Checkbox">
                </div>
                <div class="col-sm-2 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">ID Number:</div>
                <div class="col-sm-4 m-1 p-1 m-1 p-1 bg-light text-left rounded-lg text-monspace shadow">000423 5003 08 3</div>
                <div class="col-sm-2 m-1 p-1"></div>
            </div>

            <div class="row flex-nowrap">
                <div class="col-sm-2 m-1 p-1"></div>
                <div class="col-sm-2 m-1 p-1"></div>
                <div class="col-sm-2 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">First Name:</div>
                <div class="col-sm-4 m-1 p-1 m-1 p-1 bg-light text-left rounded-lg text-monspace shadow">Andre</div>
                <div class="col-sm-2 m-1 p-1"></div>
            </div>

            <div class="row flex-nowrap">
                <div class="col-sm-2 m-1 p-1"></div>
                <div class="col-sm-2 m-1 p-1"></div>
                <div class="col-sm-2 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">Second Name:</div>
                <div class="col-sm-4 m-1 p-1 m-1 p-1 bg-light text-left rounded-lg text-monspace shadow">(none)</div>
                <div class="col-sm-2 m-1 p-1"></div>
            </div>

            <div class="row flex-nowrap">
                <div class="col-sm-2 m-1 p-1"></div>
                <div class="col-sm-2 m-1 p-1"></div>
                <div class="col-sm-2 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">Last Name:</div>
                <div class="col-sm-4 m-1 p-1 m-1 p-1 bg-light text-left rounded-lg text-monspace shadow">Visser</div>
                <div class="col-sm-2 m-1 p-1"></div>
            </div>

        </div>
    
    
        <div class="container">
            <div class="row flex-nowrap justify-content-center">
                <div class="col-sm-2 m-1 p-1"></div>
                <div class="col-sm-8 pt-4 pb-2 text-danger font-weight-bold">Select children to apply for above.</div>
                <div class="col-sm-2 m-1 p-1"></div>
            </div>


            <div class="row flex-nowrap  justify-content-center">
                <div class="col-sm-3 m-1 p-1 text-center lead">
                    <!-- No backbutton here as this is the first page after the menu. Pressing cancel will take you to the menu again. -->
                </div>

                <div class="col-sm-3 m-1 p-1 text-center lead">
                    <button type="button" class="btn btn-warning" onclick="window.location.href='../menu.php';">Cancel</button>
                </div>

                <div class="col-sm-3 m-1 p-1 text-center lead">
                    <button type="button" class="btn btn-primary" onclick="window.location.href='./child-support-docs.php';">Next -&gt;</button>
                </div>

            </div>

            <hr>

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
    
    </body>
</html>