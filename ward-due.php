<?php
require_once ("DBController.php");
$db_handle = new DBController();
$query = "SELECT * FROM states";
$countryResult = $db_handle->runQuery($query);

?>
<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/slick.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.css">
		<link rel="stylesheet" href="assets/css/odometer.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/select2.min.css">

        <title>Pay Ward Due | NAPPS Pay</title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>

    <body>

        <!-- Preloader -->
        
        <!-- End Preloader -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="luvion-responsive-nav">
                <div class="container">
                    <div class="luvion-responsive-menu">
                        <div class="logo">
                            <a href="index">
                                <img src="assets/img/newfun2.png" alt="logo">
                                <img src="assets/img/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="luvion-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index">
                            <img src="assets/img/newfun2.png" alt="logo">
                            <img src="assets/img/logo.png" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="#" class="nav-link active">Home </a>
                                    
                                </li>

                                <li class="nav-item"><a href="about-us" class="nav-link">About Us</a></li>

                                <!-- <li class="nav-item"><a href="faq" class="nav-link">F.A.Q </a>
                                   
                                </li> -->

                                

                              

                                <li class="nav-item"><a href="#" class="nav-link">Make Payment <i class="fas fa-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="national-due" class="nav-link">Pay National Due</a></li>

                                        <li class="nav-item"><a href="zonal-due" class="nav-link">Pay Zonal Due</a></li>

                                        <li class="nav-item"><a href="state-due" class="nav-link">Pay State Due</a></li>
                                        <li class="nav-item"><a href="lg-due" class="nav-link">Pay L.G Due</a></li>
                                        <li class="nav-item"><a href="ward-due" class="nav-link">Pay Ward Due</a></li>
                                        <li class="nav-item"><a href="exam-due" class="nav-link">Pay Examination Due</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="contact-us" class="nav-link">Contact</a></li>
                            </ul>

                           
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        
        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
          <div class="container">
              <div class="page-title-content">
                  <h2>Pay Ward Due</h2>
                
              </div>
          </div>
      </div>
      <!-- End Page Title Area -->

      <section class="contact-area ptb-70">
          <div class="container">
              <div class="section-title">
                  <h2>Kindly provide necessary and accurate information</h2>
                  <div class="bar"></div>
                
              </div>

              <div class="row">
           

                  <div class="col-lg-12 col-md-12">
                   
                      <div class="contact-form">
                          
                          <form method="post" id="login-form">
                              <div class="row">
                              <div class="col-lg-6 col-md-6">
                                      <div class="form-group">
                                          <input type="text" name="phone" required  class="form-control" placeholder="Phone Number" >
                                         
                                      </div>
                                      
                                  </div>

                                  <div class="col-lg-6 col-md-6">
                                      <div class="form-group">
                                          <input type="text" class="form-control" name="fullname" required placeholder="School Name">
                                        
                                      </div>
                                  </div>
                                  <div class="col-lg-6 col-md-6">
                                      <div class="form-group">
                                          <input type="text" class="form-control" name="matric" required placeholder="Proprietors' Name">
                                         
                                      </div>
                                  </div>
                                  <div class="col-lg-6 col-md-6">
                                      <div class="form-group">
                                          <input type="email" name="email" class="form-control"  placeholder="Email Address">
                                        
                                      </div>
      
                                  </div>
                                  


                                  

                                  <div class="col-lg-4 col-md-4">
                                      <div class="form-group"  >
                                          <select class="select2 form-control" name="level" required>
                                              <option value="">Seelct Zone</option>
                                              <option value="North Central">North Central</option>
                                              <option value="North East">North East</option>
                                              <option value="North West">North West</option>
                                              <option value="South East">South East</option>
                                              <option value="South South">South South</option>
                                              <option value="South West">South West</option>
                                              
                                          </select>
                                      
                                      </div>
                                  </div>

                                 

                                  <div class="col-lg-4 col-md-4">
                                      <div class="form-group">
                                          <select class="select2 form-control" id="country-list" name="country" onChange="getState();">
                                              <option value="" >Select State</option>
                                              <?php
foreach ($countryResult as $country) {
    ?>
<option value="<?php echo $country["id"]; ?>"><?php echo $country["name"]; ?></option>
<?php
}
?>
                                            </select>
                                             
                                      </div>
                                  </div>


                                  
                                       <div class="col-lg-4 col-md-4">
                                      <div class="form-group">
                                          <select class="select2 form-control" name="state" id="state-list" required>
                                              <option value="" >Select Local Government</option>
                                             
                                            </select>

                                           
                                      </div>
                                  </div>

                                  
                                  <div class="col-lg-12 col-md-12">
                                    
                                      <button name="login_button" id="login_button" type="submit" class="btn btn-primary">Proceed</button>
                                 
                                      <div class="clearfix"></div>
                                  </div>
                                </div>
                              
                          </form>
                          
                      </div>
                  </div>
              </div>
          </div>
          
          <div class="bg-map"><img src="assets/img/bg-map.png" alt="image"></div>
      </section>
      
      <footer class="footer-area">
          <div class="container">
              

                <div class="copyright-area">
                  <p>Copyright <?php echo date('Y');?>, Developed By <a href="https://titangalaxy.com.ng" target="_BLank">TitanGalaxy</a>. All rights reserved</p>
              </div>
          </div>
       
      </footer> 
        <!-- End Footer Area -->
       
        <div class="go-top"><i class="fas fa-arrow-up"></i></div>

        <!-- Links of JS files -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.meanmenu.js"></script>
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
		<script src="assets/js/jquery.appear.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/parallax.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/select2.min.js"></script>
        <script type="text/javascript" src="scripts/validation.min.js"></script>
<script type="text/javascript" src="scripts/data5.js"></script>
        <script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

});

</script>  
        <script src="assets/js/main.js"></script>
        <script>
function getState() {
        var str='';
        var val=document.getElementById('country-list');
        for (i=0;i< val.length;i++) { 
            if(val[i].selected){
                str += val[i].value + ','; 
            }
        }         
        var str=str.slice(0,str.length -1);
        
  $.ajax({          
          type: "GET",
          url: "get_state.php",
          data:'country_id='+str,
          success: function(data){
            $("#state-list").html(data);
          }
  });
}
</script>
        
    </body>
</html>
      
   