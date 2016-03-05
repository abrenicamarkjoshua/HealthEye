<?php 
include("conn.php"); 
if(isset($_POST['try'])){ 


date_default_timezone_set("Etc/GMT+8"); 
$date  = date('m-d-Y H:i:s'); 

mysqli_query($GLOBALS["___mysqli_ston"], "update account set acc_lastname='$_POST[lname2]',acc_firstname='$_POST[fname2]',acc_middlename='$_POST[mname2]',acc_email='$_POST[e2]',acc_username='$_POST[un2]',acc_password='$_POST[pw2]',acc_modified='$date' where acc_id = '$_POST[tag1]'; ");
$secondsWait = 0; 
echo '<meta http-equiv="refresh" content="'.$secondsWait.'">'; 

}  
?>