<?php 

include("../conn.php"); 
$id = $_GET["d_d_id"]; 
$dn = $_GET["d_d_n"]; 
mysqli_query($GLOBALS["___mysqli_ston"], "delete from tbl_diseases where disease_id='$id'"); 

echo "<script type='text/javascript'>  
window.location.href='../index.php?page=e7067a8cdc396e4c168db56633c6ba01'; 
 alert('$dn is successfully deleted from the database :D');</script>"; 
  
?>