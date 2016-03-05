<?php 
session_start(); 
include_once("conn.php"); 
echo '<script type="text/javascript">';  

echo 'window.location.href ="login.php"'; 
echo '</script>'; 
session_destroy(); 

$user=$_SESSION['username']; 
$email=$_SESSION['email']; 
date_default_timezone_set("Etc/GMT+8"); 
$log = date('m-d-Y H:i:s'); 
mysqli_query($GLOBALS["___mysqli_ston"], "update tbl_accounts set acc_logout='$log' , acc_status='Offline' where acc_username = '$user' or acc_email='$email';"); 

?> 