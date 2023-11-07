<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SASSA - Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">

  </head>
  <body>
	
	
   <hr class="my-4">
    <div class="jumbotron jumbotron-fluid text-center">
       <h1 class="display-4"><img src="images/sassa-logo1.png" width="578" height="154" alt="">&nbsp;</h1>

       <form action="menu.php" method="post" >
        <p class="lead">
         <input class="rounded-lg" type="text" name="username" id="username" required placeholder="            user name">
       </p>
       <p class="lead">
         <input class="rounded-lg" type="password" name="password" id="password" required placeholder="             password">
       </p>

       <p class="lead">
		  <input class="rounded-lg" type="submit" name="submit" id="submit" value="Login">
       </p>
        </form>
    </div>
	  
    <div class="container">
       <div class="row">
		  <p class="text-center"><span class="badge badge-info"></span></p>
          <div class="text-center col-lg-6 offset-lg-3">
            <p>Copyright &copy; 2023 &middot; All Rights Reserved.
				<br><span class="badge badge-danger">logged out</span></p>
          </div>

       </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.4.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>
    
    <!-- Custom functions for SASSA -->
    <script src="js/sassafunctions.js"></script>
	  
  </body>
</html>
