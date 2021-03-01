<?php
$transid = $_GET['transid'];


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
      
        <title>Payment Successful | Funaab Pay</title>

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
                                <li class="nav-item"><a href="../index" class="nav-link">Home </a>
                                    
                                </li>

                                <li class="nav-item"><a href="../about-us" class="nav-link">About Us</a></li>

                                <!-- <li class="nav-item"><a href="../faq" class="nav-link">F.A.Q </a>
                                   
                                </li> -->

                                

                              

                                <li class="nav-item"><a href="#" class="nav-link">Make Payment <i class="fas fa-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="../sug-due" class="nav-link">Pay S.U.G Due</a></li>

                                        <li class="nav-item"><a href="../naas-due" class="nav-link">Pay N.A.A.S Due</a></li>

                                        <li class="nav-item"><a href="../college-due" class="nav-link">Pay College Due</a></li>
                                        <li class="nav-item"><a href="../department-due" class="nav-link">Pay Department Due</a></li>
                                        <li class="nav-item"><a href="../pgschool" class="nav-link">Pay P.G School Due</a></li>
                                        <li class="nav-item"><a href="../hostel-due" class="nav-link">Pay Hostel Due</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="../contact-us" class="nav-link">Contact</a></li>
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
                  <h2>Payment Successful</h2>
                
              </div>
          </div>
      </div>
      <!-- End Page Title Area -->

      <section class="about-area ptb-70">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-md-8 col-lg-8 col-xl-8 mx-auto">
                     
                    <div class="bg-light shadow-sm rounded p-3 p-sm-4 mb-4" >
                      <div class="text-center my-5">
                       <div class="animation-ctn">
  	<div class="icon icon--order-success svg">
          <svg xmlns="http://www.w3.org/2000/svg" width="154px" height="154px">  
            <g fill="none" stroke="#22AE73" stroke-width="2"> 
              <circle cx="77" cy="77" r="72" style="stroke-dasharray:480px, 480px; stroke-dashoffset: 960px;"></circle>
              <circle id="colored" fill="#22AE73" cx="77" cy="77" r="72" style="stroke-dasharray:480px, 480px; stroke-dashoffset: 960px;"></circle>
              <polyline class="st0" stroke="#fff" stroke-width="10" points="43.5,77.8 63.7,97.9 112.2,49.4 " style="stroke-dasharray:100px, 100px; stroke-dashoffset: 200px;"/>   
            </g> 
          </svg>
        </div>
</div>

                        <!-- <p class="text-center text-success text-8 line-height-07" style="font-weight: 900;">Success!</p> -->
                        <h3 class="text-center" style="font-weight: 600;">Payment Completed Successfully!</h3>
                        
                      <?php
include ("includes/dbcon.php");
$query = mysqli_query($con, "SELECT * FROM newinvoice WHERE transid = '$transid' AND status='Paid'") or die (mysqli_error($con));

while($row = mysqli_fetch_array($query)){
$a= $row['date_add'];
$b= $row['ptype'];
$c= $row['refcode'];
$d= $row['amount'];
$z = $row['department'];
$status= $row['status'];

?>
<p>You have successfully paid a sum of <strong style="font-weight: bolder; color: red;">NGN<?php echo number_format($d);?>.00</strong> for the Payment of <strong style="font-weight: bolder; color: red;"><?php echo $b;?></strong></p>
                      </div>
 <?php
if($b == 'S.U.G Due')
{
?> 
                      <a style="cursor:pointer" href="sugreceipt/<?php echo $transid;?>" type="submit" class="btn btn-primary btn-block"><i class='fas fa-download'></i> Download Receipt</a>
                      <?php 
}
else if ($b == 'NAAS Due')
{
?>
 <a style="cursor:pointer" href='naasreceipt/<?php echo $transid;?>' type="submit" class="btn btn-primary btn-block"><i class='fas fa-download'></i> Download Receipt</a>
 <?php 
}
else if ($b == "College Due" && $department=="Animal Nutrition")
{
?>  
<a href='nassareceipt/<?php echo $transid;?>' class='btn btn-primary btn-block'><i class='fas fa-download'></i> Download Receipt</a>
<?php 
}
else if ($b == "College Due" && $department=="Animal Physiology")
{
?>  
<a href='nassareceipt/<?php echo $transid;?>' class='btn btn-primary btn-block'><i class='fas fa-download'></i> Download Receipt</a>
<?php 
}
else if ($b == "College Due" && $department=="Animal Production and Health")
{
?>  
<a href='nassareceipt/<?php echo $transid;?>' class='btn btn-primary btn-block'><i class='fas fa-download'></i> Download Receipt</a>
<?php 
}
else if ($b == "College Due" && $department=="Animal Breeding and Genetics")
{
?>  
<a href='nassareceipt/<?php echo $transid;?>' class='btn btn-primary btn-block'><i class='fas fa-download'></i> Download Receipt</a>
<?php 
}
else if ($b == "College Due" && $department=="Pasture and Range Management")
{
?>  
<a href='nassareceipt/<?php echo $transid;?>' class='btn btn-primary btn-block'><i class='fas fa-download'></i> Download Receipt</a>
<?php 
}
else if ($b == "Departmental Due" && $department=="Plant Breeding and Seed Technology")
{
?> 
<a href='pbstreceipt/<?php echo $transid;?>' class='btn btn-primary btn-block'><i class='fas fa-download'></i> Download Receipt</a>
<?php 
}
else 
{
?>  
<a href='receipt/<?php echo $transid;?>' class='btn btn-primary btn-block'><i class='fas fa-download'></i> Download Receipt</a>
                
                  <?php  }?>
                  <?php  }?>
                      <a href="../index" class="btn btn-info btn-block"><i class="fas fa-chevron-left"></i> HomePage</a>
                    </div>

                  </div>

                
              </div>
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
     
    </body>
</html>
      
   