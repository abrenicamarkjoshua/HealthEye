<?php

include("conn.php"); 
$id = $_GET["id"]; 
mysqli_query($GLOBALS["___mysqli_ston"], "delete from account where acc_id='$id'"); 
echo "<script type='text/javascript'>  
window.location.href='acc.php'; 
 </script>"; 
 
?>