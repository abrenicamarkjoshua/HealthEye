<?php 

include("../conn.php"); 
$id = $_GET["d_a_id"]; 
mysqli_query($GLOBALS["___mysqli_ston"], "delete from tbl_announcements where a_id='$id'"); 

echo "<script type='text/javascript'>  
window.location.href='../index.php?page=feb4d2dfe1b2a637fdfd9e397cc4735f'; 
 alert('The selected announcement has been removed.');</script>"; 
  
?>