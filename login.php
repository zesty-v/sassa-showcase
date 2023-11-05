 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap - Prebuilt Layout</title>
    
	  <style>
        #centeredPlaceholder::placeholder {
            text-align: center;
        }
    </style>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">

  </head>
  <body>
	
	<script src="sassa-functions.js"></script>
	  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <a class="navbar-brand" href="#">Navbar</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
             </li>
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="#">Action</a>
                   <a class="dropdown-item" href="#">Another action</a>
                   <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="#">Something else here</a>
                </div>
             </li>
             <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
             </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
             <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
       </div>
    </nav>

    <hr class="my-4">
    <div class="jumbotron jumbotron-fluid text-center">
       <h1 class="display-4"><img src="images/sassa-logo1.png" width="578" height="154" alt=""/>&nbsp;</h1>
       <p class="lead">
         <input type="text" name="u_name" id="u_name" placeholder="            user name">
       </p>
       <p class="lead">
         <input type="password" name="u_pwd" id="u_pwd" placeholder="             password">
       </p>

       <p class="lead">
		  <a class="btn btn-primary btn-lg" href="loggedin.html" role="button">Submit</a>
       </p>
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
  </body>
</html>
