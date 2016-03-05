<?php 

include("../conn.php"); 
$id = $_GET["d_u_id"]; 
$dn = $_GET["d_u_n"]; 
mysqli_query($GLOBALS["___mysqli_ston"], "delete from tbl_accounts where acc_id='$id'"); 

echo "<script type='text/javascript'>  
window.location.href='../index.php?page=f9aae5fda8d810a29f12d1e61b4ab25f'; 
 alert('The account record has been  successfully deleted from the database :D');</script>"; 
  
?>