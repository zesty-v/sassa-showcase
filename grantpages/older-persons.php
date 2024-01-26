<?php

    require_once '/db/dbfunctions.php';

    // Name of the view.
    $appType = 'Older Persons Grant';
    $viewName = 'Older Persons Grant';

    // All standard page includes
    require('../partials/standard-page-requires.php');
    
    // Make audit Entry
    writeAuditlog($_SESSION['userName'], $_SESSION['curr-id'], $appType, ' Application started.');

    // Get the applican ID record from the "Profile Database".
    $data = dn_profile_id_verification($_SESSION['curr-id'], time());

    // Now check if there were results that were returned.

    // Now get the ID photo from HA
    $image = dn_photo_id_verification($_SESSION['curr-id'], time());

?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
    <title>SASSA - Older Persons Grant</title>

    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link href="/css/bootstrap-4.4.1.css" rel="stylesheet">
      
    <!-- Custom CSS -->
	<link href="/css/sassa-custom.css" rel="stylesheet">

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
                    <div class="display-4">Older Persons Grant: ID</div>
                    <hr class="my-2">
                </div>
            </div>
		</div>
        <div class="container">

            <div class="row flex-nowrap">
                <div class="col-sm-2 m-1 p-1"></div>
                <div class="col-sm-2 m-1 p-1 pt-3 rounded-lg shadow-sm bg-dark">
                    <div class="row flex-nowrap">
                        <div class="col-sm-12">
                            <img src="<?php echo 'data:image/jpeg;base64,' . $image->IDPhotoResults->IDPhoto; ?>" alt="ID Photo" class="img-fluid">
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
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow-sm">ID Number:</div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow-sm"><?php echo $_SESSION['curr-id'] ?></div>
                    </div>
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow-sm">First Name:</div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow-sm"><?php echo $data->idProfile->firstNames; ?></div>
                    </div>                  
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow-sm">Last Name: </div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow-sm"><?php echo $data->idProfile->surName; ?></div>
                    </div>
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow-sm">Date of Birth: </div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow-sm"><?php echo $data->idProfile->dob; ?></div>
                    </div>
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow-sm">Age: </div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow-sm"><?php echo $data->idProfile->age; ?></div>
                    </div>
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow-sm">Gender: </div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow-sm"><?php echo $data->idProfile->gender; ?></div>
                    </div>
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow-sm">Citizenship: </div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow-sm"><?php echo $data->idProfile->citizenship; ?></div>
                    </div>
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow-sm flex-nowrap">Deceased Status </div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow-sm"><?php echo empty($data->idProfile->deathDate) ? 'Alive' : 'Deceased'; ?></div>
                    </div>
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow-sm">Other Grants: </div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monspace shadow-sm">???</div>
                    </div>
                </div>
                <div class="col-sm-2 m-1 p-1"></div>
            </div>

            <div class="row flex-nowrap justify-content-center">
                <div class="col-sm-2 m-1 p-1"></div>
                <div class="col-sm-8 pt-4 pb-2 text-danger font-weight-bold">Applicant is not eligible: Aged under 60 years</div>
                <div class="col-sm-2 m-1 p-1"></div>
            </div>


            <div class="row flex-nowrap  justify-content-center">
                <div class="col-sm-3 m-1 p-1 text-center lead">
                    <button type="button" class="btn btn-warning btn-w-110" onclick="history.back();">Cancel</button>
                </div>

                <div class="col-sm-3 m-1 p-1 text-center lead">
                     <button type="button" class="btn btn-primary btn-w-110" onclick="window.location.href='../print.php';">Print Letter</button>
                </div>
                
                <div class="col-sm-3 m-1 p-1 text-center lead">
                    <button type="button" class="btn btn-primary btn-w-110" onclick="window.location.href='/grantpages/older-persons-docs.php';">Next -&gt;</button>
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