<?php 
/**
$conn = ($GLOBALS["___mysqli_ston"] = mysqli_connect("mysql.hostinger.ph",  "u200602843_dcss", "jaychua123")) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
((bool)mysqli_query( $conn, "USE " . u200602843_dcss)); 

if(!$conn) 
    die("Error in connection:".  ((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); 
$db = ((bool)mysqli_query( $conn, "USE " . u200602843_dcss)); 
if(!$db) 
    die("error");   

?> **/

$connect = ($GLOBALS["___mysqli_ston"] = mysqli_connect('localhost', 'root', '')); 
if(!$connect) 
    die("Error in connection:".  ((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); 


$db = ((bool)mysqli_query( $connect, "USE " . 'cdoms_db')); 
if(!$db) 
    die("error");  

?>
