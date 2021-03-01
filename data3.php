<?php

include_once("includes/dbcon.php");

if(isset($_POST['login_button'])) {
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $level = trim($_POST['level']);
    $mno  = trim($_POST['matric']);
    $coll = trim($_POST['country']);
    $department = trim($_POST['state']);
    //$stype = trim($_POST['stype']);
    $con1 = "NAPPS/ST/";
   $tcode=$con1.''.rand(10000,99999);
   $transid=rand(100000,999999);
   $ptype = 'State Due';
   $pfee = '100';
   $amount = '4000';


	$sql = "INSERT INTO newinvoice (transid,fullname,mno,email,phone,level,college,department, amount, pfee, ptype, date_add, refcode)
    values ('$transid','$fullname','$mno','$email','$phone', '$level', '$coll','$department', '$amount','$pfee', '$ptype', NOW(), '$tcode')";
   

   

	if (mysqli_query($con, $sql)) {	
        // $response = $transid;
        // echo json_encode($response);
        echo json_encode(array("status"=>200,"transid"=>$transid)); 
                }
                elseif ($amount>$balance)  {
                    echo json_encode(array("status"=>201));
                }        
    }

    
	

?>