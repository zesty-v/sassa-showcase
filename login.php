<?php

    require($_SERVER['DOCUMENT_ROOT'] . '/const-site.php');

    sleep(CONST_PAGE_DELAY);

    require($_SERVER['DOCUMENT_ROOT'] . '/page-man.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/dn-api/dn-active-check.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/dw-api/dw-active-check.php');

    $_SESSION['loggedin'] = false;

    if (!isset($_SESSION['loginmsg'])) {$_SESSION['loginmsg'] = 'Please log in...';}
    $_SESSION['sessionAudit'] = array();

?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>SASSA - Login</title>

    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link href="/css/bootstrap-4.4.1.css" rel="stylesheet">
    
    <!-- Custom CSS -->
	<link href="/css/sassa-custom.css" rel="stylesheet">

  </head>
    
  <body>
	
     <div class="row">
       <div class="col-sm text-center img-fluid pt-3"><img src="/images/sassa-logo1.png" alt="" class="img-fluid"></div>
    </div>  
        
    <hr class="my-0">
    <div class="jumbotron jumbotron-fluid text-center">

       <form action="auth.php" method="post" >
        <p class="lead">
         <input class="rounded-lg text-center" type="text" name="username" id="username" required placeholder="user name">
       </p>
       <p class="lead">
         <input class="rounded-lg text-center" type="password" name="password" id="password" required placeholder="password">
       </p>
       <p class="text-danger"><?php echo $_SESSION['loginmsg'];?></p>

       <p class="lead">
		  <input class="rounded-lg btn-outline-primary text-center" type="submit" name="submit" id="submit" value="Login">
       </p>
        </form>
        
    </div>
	
    <?php include('bottom-status.php'); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.4.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>
    
    <!-- Custom functions for SASSA -->
    <script src="js/sassafunctions.js"></script>

<?php var_dump($_SESSION['sessionAudit']); ?>
      
  </body>
</html>
