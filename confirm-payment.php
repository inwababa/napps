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
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/animate.min.css">
        <link rel="stylesheet" href="../assets/css/fontawesome.min.css">
        <link rel="stylesheet" href="../assets/css/flaticon.css">
        <link rel="stylesheet" href="../assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="../assets/css/nice-select.css">
        <link rel="stylesheet" href="../assets/css/slick.min.css">
        <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="../assets/css/meanmenu.css">
		<link rel="stylesheet" href="../assets/css/odometer.min.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/responsive.css">
        <link rel="stylesheet" href="../assets/css/select2.min.css">

        <title>Confirm Payment | NAPPS Pay</title>

        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
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
                            <a href="../index">
                                <img src="../assets/img/newfun2.png" alt="logo">
                                <img src="../assets/img/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="luvion-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="../index">
                            <img src="../assets/img/newfun2.png" alt="logo">
                            <img src="../assets/img/logo.png" alt="logo">
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
        
        <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
          <div class="container">
              <div class="page-title-content">
                  <h2>Confirm Payment Details</h2>
                 
              </div>
          </div>
      </div>
      <!-- End Page Title Area -->
      <?php
               include ("includes/dbcon.php");
               
               //$query = mysqli_query($con, "SELECT * FROM states WHERE id='$id'") or die(mysqli_error($con));
 $id = $_GET['transid'];
                           $query = mysqli_query($con, "SELECT * FROM newinvoice WHERE transid='$id'") or die(mysqli_error($con));
      $row=mysqli_fetch_array($query);
        $amount=$row['amount'];
        $fullname =$row['fullname'];
        $mno = $row['mno'];
        $email = $row['email'];
        $phone = $row['phone'];
        $department = $row['department'];
        $coll = $row['college'];
        //$stype = $row['stype'];
        $transid = $row['transid'];
        $ptype  = $row['ptype'];
        $level = $row['level'];
        $pfee = $row['pfee'];
        $total = $amount + $pfee;

        $dd = mysqli_query($con, "SELECT * FROM states WHERE id='$coll'") or die(mysqli_error($con));
        $row2=mysqli_fetch_array($dd);
        $college = $row2['name'];
                            ?>

      <!-- Start Contact Area -->
      <section class="contact-area ptb-70">
          <div class="container">
              <div class="section-title">
                  <h2>Kindly cross-check the information provided.</h2>
                  <div class="bar"></div>
                
              </div>

              <div class="row">
           

                  <div class="col-lg-8">
                   
                      <div class="contact-form" >
                         
            <div class="alert alert-info mt-4"> <span class="badge badge-info">NOTE:</span> *Don't forget to copy/write down the Transaction ID below! </div>
                         
                              <div class="row" >



                                  <div class="col-lg-12 col-md-12">
                                      <div class="form-group">
                                          <input type="text" value="<?php echo $fullname;?>" class="form-control" readonly>
                                       
                                      </div>
                                     
                                  </div>
                                  <div class="col-lg-6 col-md-6">
                                      <div class="form-group">
                                          <input type="text" value="<?php echo $mno;?>" class="form-control"  readonly>
                                         
                                      </div>
                                  </div>

                                  <div class="col-lg-6 col-md-6">
                                      <div class="form-group" >
                                          <input type="text" value="<?php echo $level;?> Zone" class="form-control"  readonly>
                                      </div>
                                  </div>

                                  <div class="col-lg-6 col-md-6">
                                      <div class="form-group">
                                          <input type="email" value="<?php echo $email;?>"  class="form-control" readonly>
                                        
                                      </div>
                                  </div>
                                  <div class="col-lg-6 col-md-6">
                                      <div class="form-group">
                                          <input type="text" value="<?php echo $phone;?>" class="form-control"  readonly>
                                         
                                      </div>
                                  </div>



                                  <div class="col-lg-6 col-md-6">
                                      <div class="form-group">
                                          <input type="text" value="<?php echo $college;?>"  class="form-control" readonly>
                                      </div>
                                  </div>
                                  
                                       


                                  <div class="col-lg-6 col-md-6">
                                      <div class="form-group">
                                          <input type="text" value="<?php echo $department;?>"  class="form-control" readonly>
                                      </div>
                                  </div>

                                  <div class="col-lg-12 col-md-12">
                                      <div class="form-group">
                                          <input type="text" value="Payment For <?php echo $ptype;?>" class="form-control" readonly>
                                      </div>
                                  </div>

                               
                         
                      </div>
                      
                  </div>
             
              </div>
              <aside class="col-lg-4">
                  <div class="bg-light shadow-md rounded p-3">
                    <h3 class="text-5 mb-3">Payment Summary</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2">Transaction ID <span class="float-right text-4 font-weight-800 text-dark" style="font-weight: 800;"><?php echo $transid;?></span><br></li>
                      <li class="mb-2">Amount to Pay <span class="float-right text-4 font-weight-500 text-dark">₦<?php echo $amount;?>.00</span><br>
                       </li>
                      <li class="mb-2">Processing Fee <span class="float-right text-4 font-weight-500 text-dark">₦<?php echo $pfee;?>.00</span></li>
                      
                    </ul>
                    <div class="text-dark bg-light-4 text-4 font-weight-600 p-3" style="font-weight: 700;"> Total Amount <span class="float-right text-7"> ₦<?php echo number_format($total);?>.00</span> </div>
                    <br>
                   
                    <button onClick="payWithRave()" class="btn btn-primary btn-block" type="submit">Make Payment</button>

                    <br>
                    <a href="#" class="btn btn-info btn-block" type="submit">Download Invoice</a>
                  </div>
                </aside>
          </div>
          
          <div class="bg-map"><img src="../assets/img/bg-map.png" alt="image"></div>
          </div>
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
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/jquery.meanmenu.js"></script>
        <script src="../assets/js/jquery.nice-select.min.js"></script>
        <script src="../assets/js/slick.min.js"></script>
        <script src="../assets/js/jquery.magnific-popup.min.js"></script>
		<script src="../assets/js/jquery.appear.min.js"></script>
        <script src="../assets/js/odometer.min.js"></script>
        <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="../assets/js/parallax.min.js"></script>
        <script src="../assets/js/wow.min.js"></script>
        <script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
	
        <script>
const API_publicKey = "FLWPUBK_TEST-e62d10e8b8299f8f4c1801b4de5ea16b-X";

 function payWithRave() {
var x = getpaidSetup({
PBFPubKey: API_publicKey,
customer_email: "<?php echo $email;?>",
amount: <?php echo $total;?>,
customer_phone: "<?php echo $phone;?>",
currency: "NGN",
txref: "<?php echo $transid;?>",
meta: [{
metaname: "Fullname",
metavalue: "<?php echo $fullname;?>"
 }],
 onclose: function() {},
callback: function(response) {
                var txref = response.tx.txRef; // collect txRef returned and pass to a 					server page to complete status check.
console.log("This is the response returned after a charge", response);
 if (
response.tx.chargeResponseCode == "00" ||
   response.tx.chargeResponseCode == "0"
        ) {
                 
window.location.href = "../process/"+response.tx.txRef;
                    // redirect to a success page
               } else {
                    // redirect to a failure page.
                }

                x.close(); // use this to close the modal immediately after payment.
         }
     });
   }
</script>

       

        
    </body>
</html>
      
   