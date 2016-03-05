<?php 
include("../conn.php"); 
if($_GET) 
    { 
     
    $ai = $_GET['ai']; 
    $ab = $_GET['ab']; 
    $at = $_GET['at']; 
        date_default_timezone_set("Etc/GMT+8"); 
$log = date('m-d-Y H:i:s'); 

    $query = "update tbl_announcements set a_body='$ab',a_type='$at',a_date='$log' where a_id='$ai'";    mysqli_query($GLOBALS["___mysqli_ston"], $query); 
    echo"<div class='alert alert-success'> 
                            <button type='button' class='close' data-dismiss='alert'>Ã—</button> 
                            <strong>Success!</strong> You successfully edited an announcement. 
                        </div>"; 
} 

  
?>