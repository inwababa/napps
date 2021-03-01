<?php

include_once("includes/dbcon.php");

if(isset($_POST['login_button1'])) {
    $transid = trim($_POST['transid']);
 


	$sql = "SELECT * FROM newinvoice WHERE transid='$transid'";
   

   

	if (mysqli_query($con, $sql) == TRUE) {	
        // $response = $transid;
        // echo json_encode($response);
        $gg = mysqli_query($con, $sql);
        $count = mysqli_num_rows($gg);
        if ($count>0){
        echo json_encode(array("status"=>200,"transid"=>$transid)); 
                }
                else if($count== 0) {
                    echo json_encode(array("status"=>201));
                }        
    }

}   
	

?>