<?php
require_once ("DBController.php");
$db_handle = new DBController();
$query = "SELECT * FROM cdue1";
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

        <title>Pay Departmental Due | Funaab Pay</title>

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
                                <li class="nav-item"><a href="#" class="nav-link">Home </a>
                                    
                                </li>

                                <li class="nav-item"><a href="about-us" class="nav-link">About Us</a></li>

                                <!-- <li class="nav-item"><a href="faq" class="nav-link">F.A.Q </a>
                                   
                                </li> -->

                                

                              

                                <li class="nav-item"><a href="#" class="nav-link">Make Payment <i class="fas fa-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="sug-due" class="nav-link">Pay S.U.G Due</a></li>

                                        <li class="nav-item"><a href="naas-due" class="nav-link">Pay N.A.A.S Due</a></li>

                                        <li class="nav-item"><a href="college-due" class="nav-link">Pay College Due</a></li>
                                        <li class="nav-item"><a href="department-due" class="nav-link">Pay Department Due</a></li>
                                        <li class="nav-item"><a href="pgschool" class="nav-link">Pay P.G School Due</a></li>
                                        <li class="nav-item"><a href="hostel-due" class="nav-link">Pay Hostel Due</a></li>
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
                  <h2>Pay Departmental Due</h2>
                
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
                                  <div class="col-lg-12 col-md-12">
                                      <div class="form-group">
                                          <input type="text" class="form-control" name="fullname" required placeholder="Fullname">
                                        
                                      </div>
                                  </div>
                                  <div class="col-lg-6 col-md-6">
                                      <div class="form-group">
                                          <input type="email" name="email" class="form-control" required  placeholder="Email Address">
                                        
                                      </div>
      
                                  </div>
                                  <div class="col-lg-6 col-md-6">
                                      <div class="form-group">
                                          <input type="text" name="phone" required  class="form-control" placeholder="Phone Number" >
                                         
                                      </div>
                                      
                                  </div>


                                  <div class="col-lg-6 col-md-6">
                                      <div class="form-group">
                                          <input type="text" class="form-control" name="matric" required placeholder="Matric Number">
                                         
                                      </div>
                                  </div>

                                  <div class="col-lg-6 col-md-6">
                                      <div class="form-group"  >
                                          <select class="select2 form-control" name="level" required>
                                              <option value=""> Select Level</option>
                                              <option value="100">100</option>
                                              <option value="200">200</option>
                                              <option value="200 D.E">200 D.E</option>
                                              <option value="300">300</option>
                                              <option value="400">400</option>
                                              <option value="500">500</option>
                                              <option value="600">600</option>
                                              <option value="FNG I">FNG I</option>
                                              <option value="FNG II">FNG II</option>
                                          </select>
                                      
                                      </div>
                                  </div>

                                 

                                  <div class="col-lg-6 col-md-6">
                                      <div class="form-group">
                                          <select class="select2 form-control" id="country-list" name="country" onChange="getState();">
                                              <option value="" >Select College</option>
                                              <?php
foreach ($countryResult as $country) {
    ?>
<option value="<?php echo $country["id"]; ?>"><?php echo $country["college"]; ?></option>
<?php
}
?>
                                            </select>
                                             
                                      </div>
                                  </div>

                                 
                                       <div class="col-lg-6 col-md-6">
                                      <div class="form-group">
                                          <select class="select2 form-control" name="state" id="state-list" required>
                                              <option value="" >Select Department</option>
                                             
                                            </select>

                                           
                                      </div>
                                  </div> 
                                
                                  <div id="show" class="col-lg-12 col-md-6" >
                    
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
        <style>
        .widget {
border: 1px solid #c9c9c9;
border-radius: 3px;
margin-top: 10px;
margin-bottom: 20px; 

}

.widget p{
  margin: 3px 0px 5px 0px !important;
  line-height: 20px;
}

.widget hr{
  margin: 8px 0px;
  border-top: 1px solid #ccc;
  border-bottom: 1px solid #fff;
}

.widget .table *{
  border-color:#e8e8e8 !important;
}

.widget .table.table-bordered{
  margin-bottom:0px;
  border:0px;
}

.widget .table.table-bordered tr th{
  border-top:0px;
  border-left:0px;
}

.widget .table.table-bordered tr th:last-child{
  border-right:0px;
}

.widget .table.table-bordered tr:first-child td{
  border-top:0px;
}

.widget .table.table-bordered tr:last-child td{
  border-bottom:0px;
}

.widget .table.table-bordered td{
  border-right:1px solid #ddd;
}

.widget .table.table-bordered tr td:first-child{
  border-left:0px;
}

.widget .table.table-bordered td:last-child{
  border-right:0px;
}

.widget.wblack{

color: #ddd;
border: 1px solid #222;
}

.widget.wblack hr{
  border-top: 1px solid #444;
  border-bottom: 1px solid #222;
}

.widget.wblack a{
  color: #aaa;
}

.widget.wblack a:hover{
  color: #888;
}

.widget .padd, .modal-body{
  padding: 13px 15px;
}

.widget .widget-head,.modal-header{
background-color: #f8f8f8;
background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f2f2f2));
background: -webkit-linear-gradient(top, #f8f8f8, #f2f2f2);
background: -moz-linear-gradient(top, #f8f8f8, #f2f2f2);
background: -ms-linear-gradient(top, #f8f8f8, #f2f2f2);
background: -o-linear-gradient(top, #f8f8f8, #f2f2f2);
background: linear-gradient(top, #f8f8f8, #f2f2f2);   
border-top-right-radius: 3px;
border-top-left-radius: 3px;
text-shadow:0px 1px #fff;
border-bottom: 1px solid #ccc;
border-top: 1px solid #fff;
  color: #666;
  font-size: 13px;
  font-weight: bold;
  padding: 8px 5px;
}

.widget.wblack .widget-head{
background-color: #333;
background: -webkit-gradient(linear, left top, left bottom, from(#333), to(#111));
background: -webkit-linear-gradient(top, #333, #111);
background: -moz-linear-gradient(top, #333, #111);
background: -ms-linear-gradient(top, #333, #111);
background: -o-linear-gradient(top, #333, #111);
background: linear-gradient(top, #333, #111);
text-shadow:0px 1px #000;
border-bottom: 1px solid #555;
border-top: 1px solid #666;
box-shadow: inset 0px 1px 1px #444;
  color: #ccc;
}

.widget .widget-head .widget-icons i{
  font-size: 14px;
  margin: 0px 4px;
}

.widget .widget-head .widget-icons a{
  color: #aaa;
}

.widget .widget-head .widget-icons a:hover{
  color: #999;
}

.widget.wblack .widget-head .widget-icons i{
  font-size: 14px;
  margin: 0px 4px;
}

.widget .widget-foot, .modal-footer{
background-color: #f8f8f8;
background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f2f2f2));
background: -webkit-linear-gradient(top, #f8f8f8, #f2f2f2);
background: -moz-linear-gradient(top, #f8f8f8, #f2f2f2);
background: -ms-linear-gradient(top, #f8f8f8, #f2f2f2);
background: -o-linear-gradient(top, #f8f8f8, #f2f2f2);
background: linear-gradient(top, #f8f8f8, #f2f2f2);   
border-bottom-right-radius: 3px;
border-bottom-left-radius: 3px;
text-shadow:0px 1px #fff;
border-bottom: 1px solid #fff;
border-top: 1px solid #ccc;
padding: 8px 15px;
font-size: 12px;
color: #555;
box-shadow: inset 0px 1px 1px #fff;
}

.widget.wblack .widget-foot{
background-color: #111;
background: -webkit-gradient(linear, left top, left bottom, from(#222), to(#111));
background: -webkit-linear-gradient(top, #222, #111);
background: -moz-linear-gradient(top, #222, #111);
background: -ms-linear-gradient(top, #222, #111);
background: -o-linear-gradient(top, #222, #111);
background: linear-gradient(top, #222, #111);
text-shadow:0px 1px #000;
border-bottom: 1px solid #000;
border-top: 1px solid #222;
color: #aaa;
box-shadow: inset 0px 1px 1px #444;
}

/* Widget white extras */


    </style>
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
<script type="text/javascript" src="scripts/data4.js"></script>
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
<script type="text/javascript">
  $(document).ready(function(){ /* PREPARE THE SCRIPT */
    $("#state-list").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
      var memno = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
      var dataString = "college="+memno; /* STORE THAT TO A DATA STRING */

      $.ajax({ /* THEN THE AJAX CALL */
        type: "POST", /* TYPE OF METHOD TO USE TO PASS THE DATA */
        url: "get-data1.php", /* PAGE WHERE WE WILL PASS THE DATA */
        data: dataString, /* THE DATA WE WILL BE PASSING */
        success: function(result){ /* GET THE TO BE RETURNED DATA */
          $("#show").html(result); /* THE RETURNED DATA WILL BE SHOWN IN THIS DIV */
        }
      });

    });
  });
</script>
<script>
        var allowsubmit = false;
        $(function(){
            //on keypress 
          
            //jquery form submit
            $('#form').submit(function(){
            
                var pass = $('#balance').val();
                var confpass = $('#wamount').val();
 
                //just to make sure once again during submit
                //if both are true then only allow submit
                if(pass >= 1){
                    allowsubmit = true;
                }
                if(allowsubmit){
                    return true;
                }else{
                    return false;
                }
            });
        });
    </script>      
    </body>
</html>
      
   