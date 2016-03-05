<?php
include("../conn.php");
if($_GET)
	{
	
	$id = $_GET['eid'];
	$dn = $_GET['edn'];
	$dd = $_GET['edd'];
	$ds = $_GET['eds'];
	$dc = $_GET['edc'];

	
	$query = "update tbl_diseases set disease_name='$dn',disease_description='$dd',disease_symptoms='$ds',disease_cure='$dc' where disease_id='$id'";	mysql_query($query);
	echo"<div class='alert alert-success'>
							<button type='button' class='close' data-dismiss='alert'>×</button>
							<strong>Well done!</strong> You successfully edited disease record <strong>$dn</strong>.
						</div>";
 
 }


 
?>