<?php
    
    // All standard page includes
    require($_SERVER['DOCUMENT_ROOT'] . '/partials/standard-page-requires.php');  

    // Name of the view.
    $appType = 'Child Support Grant';           // NAme of the application
    $viewName = 'Child Support Grant';          // Name of the View
    $reference = time();                        // Reference for the Datanamic API calls.
    $children = FALSE;                          // Flag to check if children were found.
    $siblingno = 0;                             // Counting the children :-)

    // Capture application type for printing.
    $_SESSION['application-type'] = $appType;

    // Audit Entry
    writeAuditlog($_SESSION['userName'], $_SESSION['curr-id'], $appType, 'Application started.');

    // Get the applican ID record from the "Profile Database".
    $data = dn_profile_id_verification($_SESSION['curr-id'], $reference);
    
    // Now check the results that were returned.
    if (empty($data)) {
        
        writeAuditlog($_SESSION['userName'], $_SESSION['curr-id'], $appType, 'Profile ID verification unsuccessful. will try realtime Home Affairs check.');
        
        // Now check the HA DB.
        $data = dn_realtime_id_verification($_SESSION['curr-id'], time());
        
        if (empty($data)) {
        
            writeAuditlog($_SESSION['userName'], $_SESSION['curr-id'], $appType, 'HA ID verification unsuccessful.');
            
            // Here we need to navigate to an error page. Like an ID not found. 
            header('Location: ../id-not-found.php');
            exit;
        
        } else {
            
            writeAuditlog($_SESSION['userName'], $_SESSION['curr-id'], $appType, 'HA ID verification success.');

            // Capture dob to be user to determine eligibility.
            $dob = $data->realTimeResults->dob;
            $citizen = $data->realTimeResults;
            
       }
            
    } else {
        
        $citizen = $data->idProfile;

    }

    // Citizen profile was found in the database (non-HA).
    writeAuditlog($_SESSION['userName'], $_SESSION['curr-id'], $appType, 'Profile ID verification success.');


    // Now get the ID photo from HA
    $image = dn_photo_id_verification($_SESSION['curr-id'], time());

    // Check if the image was found. 
    if (empty($image)) {

        // this is not the end of the world, we just wont show the ID photo if not found.
        writeAuditlog($_SESSION['userName'], $_SESSION['curr-id'], $appType, 'HA ID photo retrieval unsuccessful.');

    } else {

        // Make an audit log not that we could not find the id.
        writeAuditlog($_SESSION['userName'], $_SESSION['curr-id'], $appType, 'HA ID photo retrieval success.');

    }

    // Capture the name and surname etc. for printing purposes.
    $_SESSION['name'] = $citizen->firstNames;
    $_SESSION['surname'] = $citizen->surName;

    // Now check for lineage.
    $lineage = dn_consumer_lineage($_SESSION['curr-id'], $reference);

    // Check if children were found.
    // I dont want to go into details about when there are no children as this is a showcase of 
    // profile and real-time ID verification and not a demonstration that we understand the rules
    // of SASSA 101%.

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

  </head>

  <body>
    
    <?php require('../modalmessage.php'); ?>
    <?php require('../navbar.php'); ?>

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
                        <div class="col-sm-8 m-1 p-1 bg-light text-left rounded-lg text-monospace shadow-sm"><?php echo $_SESSION['curr-id']; ?></div>
                    </div>
                    <div class="row flex-nowrap">
                        <div class="col-sm-4 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow-sm">First Names:</div>
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
            
            <hr class="my-4">
            <div class="display-4">Eligible Lineage</div>
            <hr class="my-2">

<?php
            
    // Check if 'Consumers' and 'Consumer' keys exist and are not empty
    if (!empty($lineage['Result']['Consumers']['Consumer'])) {
        
        // Iterate through each consumer
        foreach ($lineage['Result']['Consumers']['Consumer'] as $consumer) {
            
            // Check if the relationship type is 'Child'
            if (isset($consumer['Relationship']) && $consumer['Relationship']['Relation'] === 'Child') {
            
                $children = TRUE;
                $siblingno++;

?>
            <div class="row flex-nowrap">
                <div class="col-sm-2 m-1 p-1"></div>
                <div class="col-sm-2 m-1 p-1 text-right bg-dark text-white rounded-lg shadow-sm">
                    <label class="form-check-label text-right" for="sibling1Checkbox">Sibling <?=$siblingno?>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input class="form-check-input blue-checkbox text-right" type="checkbox" id="sibling1Checkbox">
                </div>
                <div class="col-sm-2 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow-sm">ID Number:</div>
                <div class="col-sm-4 m-1 p-1 m-1 p-1 bg-light text-left rounded-lg text-monspace shadow-sm"><?=$consumer['RealTimeIDV']['HAIDNO']?></div>
                <div class="col-sm-2 m-1 p-1"></div>
            </div>

            <div class="row flex-nowrap">
                <div class="col-sm-2 m-1 p-1"></div>
                <div class="col-sm-2 m-1 p-1"></div>
                <div class="col-sm-2 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow-sm">First Names:</div>
                <div class="col-sm-4 m-1 p-1 m-1 p-1 bg-light text-left rounded-lg text-monspace shadow-sm"><?=$consumer['RealTimeIDV']['HANames']?></div>
                <div class="col-sm-2 m-1 p-1"></div>
            </div>

            <div class="row flex-nowrap">
                <div class="col-sm-2 m-1 p-1"></div>
                <div class="col-sm-2 m-1 p-1"></div>
                <div class="col-sm-2 m-1 p-1 text-right bg-secondary text-white rounded-lg shadow-sm">Last Name:</div>
                <div class="col-sm-4 m-1 p-1 m-1 p-1 bg-light text-left rounded-lg text-monspace shadow-sm"><?=$consumer['RealTimeIDV']['HASurname']?></div>
                <div class="col-sm-2 m-1 p-1"></div>
            </div>
            
<?php
            }
        
        }
    
    }          
?>

        <div class="container">
            <div class="row flex-nowrap justify-content-center">
                <div class="col-sm-2 m-1 p-1"></div>
                <div class="col-sm-8 pt-4 pb-2 text-danger font-weight-bold"><?=$siblingno>0 ? 'Select child(ren) above to apply for.' : 'No child(ren) found for the applicant.' ?></div>
                <div class="col-sm-2 m-1 p-1"></div>
            </div>


            <div class="row flex-nowrap  justify-content-center">
                
                <div class="col-sm-3 m-1 p-1 text-center lead">
                    <button type="button" class="btn btn-warning btn-w-110" onclick="window.location.href='../menu.php';">Cancel</button>
                </div>

                <div class="col-sm-3 m-1 p-1 text-center lead">
                     <button type="button" class="btn btn-primary btn-w-110" onclick="window.location.href='../print-templates/print-child-support.php';">Print Letter</button>
                </div>

                <div class="col-sm-3 m-1 p-1 text-center lead">
                    <button type="button" class="btn btn-primary btn-w-110" onclick="this.disabled=true; window.location.href='/grantpages/child-support-docs.php';">Next -&gt;</button>
                </div>

            </div>

            <?php require("../db/audit-history.php") ?>

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