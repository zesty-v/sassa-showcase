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