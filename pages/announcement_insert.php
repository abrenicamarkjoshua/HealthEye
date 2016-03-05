<?php 
include("conn.php"); 
if($_POST){ 
    $ab = $_POST['a_body']; 
    $at = $_POST['a_type']; 
    $aby = $_SESSION['name']; 
    date_default_timezone_set("Etc/GMT+8"); 
$log = date('m-d-Y H:i:s'); 
    mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO tbl_announcements(a_by,a_body,a_type,a_date) VALUES('$aby','$ab','$at','$log')"); 
echo"<div class='alert alert-success'> 
        <button type='button' class='close' data-dismiss='alert'>Ã—</button> 
        <strong>Success!</strong> The announcement has been inserted. 
    </div>"; 
     
} 

  
?>