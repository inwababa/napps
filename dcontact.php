<?php

include_once("includes/dbcon.php");

if(isset($_POST['login_button'])) {
    $fullname = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $subject = trim($_POST['subject']);
    $message  = trim($_POST['message']);
    

	$sql = "INSERT INTO contact (fullname,email,phone,subject,message,date_add)
    values ('$fullname','$email','$phone', '$subject', '$message', NOW())";
   

   

	if (mysqli_query($con, $sql)) {	
        // $response = $transid;
        // echo json_encode($response);
        echo json_encode(array("status"=>200)); 
                }
                elseif ($amount>$balance)  {
                    echo json_encode(array("status"=>201));
                }        
    }

    
	

?>