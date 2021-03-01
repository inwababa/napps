<?php

include_once("includes/dbcon.php");

if(isset($_POST['login_button2'])) {
    $transid = trim($_POST['transid']);
 


	$sql = "SELECT * FROM newinvoice WHERE transid='$transid'";
   

   

	if (mysqli_query($con, $sql) == TRUE) {	
        // $response = $transid;
        // echo json_encode($response);
        $gg = mysqli_query($con, $sql);
        $count = mysqli_num_rows($gg);
        $row = mysqli_fetch_array($gg);
        $ts = $row['status'];
        if ($count>0 && $ts=='Paid'){
        echo json_encode(array("status"=>200,"transid"=>$transid)); 
                }
                else if($count> 0 && $ts=='Not Paid') {
                    echo json_encode(array("status"=>201,"transid"=>$transid));
                }        

                elseif ($count==0) {
                    echo json_encode(array("status"=>202));
                }
    }

}   
	

?>