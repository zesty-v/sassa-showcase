<?php

    require($_SERVER['DOCUMENT_ROOT'] . '/const-site.php');

    sleep(CONST_PAGE_DELAY);
   
    $appType = 'Older Persons Grant';

    require($_SERVER['DOCUMENT_ROOT'] . '/page-man.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/dn-api/dn-active-check.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/dw-api/dw-active-check.php');

    require($_SERVER['DOCUMENT_ROOT'] . '/dn-api/dn-real-time-id-verification.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/dn-api/dn-profile-id-verification.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/dn-api/dn-photo-id-verification.php');

    // Get the applican ID record from the "Profile Database".
    $data = dn_profile_id_verification($_SESSION['curr-id'], time());

    // Now check if there were results that were returned.
    // Make audit Entry
    $_SESSION['sessionAudit'][] = time() . ': ' . $_SESSION['userName'] . ' - ' . $_SESSION['curr-id'] . ' Application Start Older Persons Grant.';


    // Now get the ID photo from HA
    $image = dn_photo_id_verification($_SESSION['curr-id'], time());


    // If not, perform a real-time id verification.


    // On success retrieve the image:


    // Ensure fields are ready to be used below.
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
                    <div class="display-4">Older Persons Grant: ID</div>
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
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">ID Number:</div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow"><?php echo $_SESSION['curr-id'] ?></div>
                    </div>
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">First Name:</div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow"><?php echo $data->idProfile->firstNames; ?></div>
                    </div>                  
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">Last Name: </div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow"><?php echo $data->idProfile->surName; ?></div>
                    </div>
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">Date of Birth: </div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow"><?php echo $data->idProfile->dob; ?></div>
                    </div>
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">Age: </div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow"><?php echo $data->idProfile->age; ?></div>
                    </div>
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">Gender: </div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow"><?php echo $data->idProfile->gender; ?></div>
                    </div>
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">Citizenship: </div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow"><?php echo $data->idProfile->citizenship; ?></div>
                    </div>
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow flex-nowrap">Deceased Status </div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow"><?php echo empty($data->idProfile->deathDate) ? 'Alive' : 'Deceased'; ?></div>
                    </div>
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow">Other Grants: </div>
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monspace shadow">???</div>
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
                    <!-- No backbutton here as this is the first page after the menu. Pressing cancel will take you to the menu again. -->
                </div>

                <div class="col-sm-3 m-1 p-1 text-center lead">
                    <button type="button" class="btn btn-warning" onclick="history.back();">Cancel</button>
                </div>

                <div class="col-sm-3 m-1 p-1 text-center lead">
                    <button type="button" class="btn btn-primary" onclick="window.location.href='https://sassa-dev.futurism.co.za/grantpages/older-persons-docs.php';">Next -&gt;</button>
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

        <!-- Include Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
	  
<?php var_dump($_SESSION['sessionAudit']); ?>
      
    </body>
    
</html>