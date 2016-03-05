<?php
include("../conn.php");
if(isset($_GET))
	{
	
	$dn = $_GET['dn'];
	$dd = $_GET['dd'];
	$ds = $_GET['ds'];
	$dc = $_GET['dc'];
 $equerycheck= mysql_query("select * from tbl_diseases where disease_name='$dn'");
 $erow1 = mysql_num_rows($equerycheck);
 if($erow1 != 1) {

	$queryness = "INSERT INTO tbl_diseases(disease_name,disease_description,disease_symptoms,disease_cure) VALUES('$dn','$dd','$ds','$dc')";
	mysql_query($queryness);
	echo"<div class='alert alert-success'>
							<button type='button' class='close' data-dismiss='alert'>×</button>
							<strong>Well done!</strong> You successfully read this important alert message.
						</div>";
 }else{//meron na
echo"<div class='alert alert-danger'>
							<button type='button' class='close' data-dismiss='alert'>×</button>
							<strong>Something's wrong!</strong> The disease record you want to insert is already added :(
						</div>";
 
 }}


 
?>
<script>
var auto_refresh = setInterval(
(function () {
    $("#info").load("disease_info.php"); //Load the content into the div
}), 1000);
</script>