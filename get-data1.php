<?php

include "includes/dbcon.php"; // called the database connection file here 

$get_criteria= mysqli_real_escape_string($con,$_POST['college']); // filter the input coming from the user's selection
?>
 
 
<?php


    $query=mysqli_query($con,"select * from dfees where department='$get_criteria'")or die(mysqli_error($con));
      $count=mysqli_num_rows($query);
      while ($row1=mysqli_fetch_array($query)){
      
       
     $stype = $row1['stype'];
    
       
?>     

<?php
if($count>0){

echo '
                                      <div class="form-group">
                                          <div class="widget">
              
              <div class="widget-head">
                <p style="text-align: center; font-weight: bolder; text-transform:uppercase;">'.$stype.'</p>
                <div class="widget-icons pull-right">
                </div>  
                <div class="clearfix"></div>
              </div>
              <div class="widget-content referrer">
               
                <div class="widget-foot text-center">
                  <input type="radio"  value="'.$stype.'" name="stype">
                </div>
              </div>
            </div>

                                      </div>';
                              

                       
} 
} 
if($count==0) {
  echo '
  <div class="col-lg-12 col-md-12">
                                    <div class="alert alert-info mt-4" align="center"> <span class="badge badge-info">NOTE:</span> Your Department is Not Available For Payment, Kindly Contact Your Departmental Executives. Thank you </div>
                                    </div>
  ';
}
             
            
           if($count>0){
               echo '
               <div class="col-lg-12 col-md-12">
                                    
               <button name="login_button" id="login_button" type="submit" class="btn btn-primary">Proceed</button>
          
               <div class="clearfix"></div>
           </div>
               ';
           } 
            ?>  
           
