    <html>
        <link rel="stylesheet" type="text/css" href="../assets/css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="../assets/css/sweetalert.css" />
        <script src="../assets/js/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script> 
<script src="js/theme.js"></script> 
<script src="../assets/js/sweetalert.js"></script> 
    </html>                     
               
<?php
include ('includes/dbcon.php');
    if (isset($_GET['txRef'])) {
        $ref = $_GET['txRef'];


        $query = array(
           // "SECKEY" => "FLWSECK-f244cb12a4442f89be7e1a4c0faf053a-X",
           "SECKEY" => "FLWSECK_TEST-234d81add228eb291e6137fc3e03fe5e-X",
            "txref" => $ref 
        );

        $data_string = json_encode($query);
                
        $ch = curl_init('https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/verify');                                                                      
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                              
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        $response = curl_exec($ch);

        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = substr($response, 0, $header_size);
        $body = substr($response, $header_size);

        curl_close($ch);

        $resp = json_decode($response, true);

      	$paymentStatus = $resp['data']['status'];
        $chargeResponsecode = $resp['data']['chargecode'];
       

        if (($chargeResponsecode == "00" || $chargeResponsecode == "0")) {
          mysqli_query($con,"UPDATE newinvoice SET status='Paid' WHERE transid='$ref'") or die (mysqli_error($con));
 $query = mysqli_query($con, "SELECT * FROM newinvoice WHERE transid='$ref'") or die(mysqli_error($con));
      $row=mysqli_fetch_array($query);
        
       
        $phone1 = $row['phone'];
        $fullname = $row['fullname'];
$c = $row['phone'];
$d = $row['email'];
$amount = $row['amount'];
$status= $row['status'];
$date = $row['date_add'];
    
echo "<script>window.location.href='success/$ref'</script>";

        } else {
            
        }
        
 

    }
		else {
     echo "
     <script>
         swal({
title: 'Failed',
text: 'Invalid Transaction ID Supplied!',
type: 'error',
confirmButtonText: 'OK'
},
function(isConfirm){
 if (isConfirm) {
window.location.href = '../confirm/$ref';
  }
});
     
     </script>";
    }

?>

<!DOCTYPE html>
<html>
<head>

<style>
.loader {
border: 16px solid #f3f3f3;
border-radius: 50%;
border-top: 16px solid blue;
border-right: 16px solid green;
border-bottom: 16px solid red;
  border-left: 16px solid pink;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
  margin:auto;
  
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body>
<br><br><br><br><br><br><br><br><br>
<div style="width:100%;text-align:center;vertical-align:bottom">
		<div class="loader"></div>

</div>



</body>
</html>