<?php 
include("conn.php"); 

if($_POST){ 
$err1 = "<b>Passwords</b> Mismatch."; 
$err2 = "<b>Emails</b> Mismatch."; 
$err3 = "<b>Username</b> is already existing."; 
$err4 = "<b>Email</b> is already existing."; 
$err5 = "1 <b>Chairperson</b> is already existing from DCS, futhermore any records with a chairperson Usertype will be void."; 

$hu=$_POST['hu']; 
$mob=$_POST['mobile']; 
$email=$_POST['email']; 
if($hu == ""||$email == ""||$mob == ""){ 
echo"<div class='alert alert-error' id='wrong' style='margin:1%;'> 
                            <button type='button' class='close' data-dismiss='alert'>X</button> 
                            <strong>Some field(s) requires attention! &nbsp Please Check the following fields: </strong>"; 

if($hu == ""){ 
echo "<li>Health Unit is empty.</li>"; 
}else{echo"";} 
if($email == ""){ 
echo"<li>Email is empty.</li>"; 
}else{echo"";} 
if($mob == ""){ 
echo"<li>Mobile is empty.</li>"; 
}else{echo"";} 
} 

date_default_timezone_set("Etc/GMT+8"); 
$date  = date('m-d-Y H:i:s'); 
mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO tbl_accounts(acc_mobile,acc_health_unit,acc_email,acc_created,acc_status,acc_setup)VALUES('$mob','$hu','$email','$date','Registered','0') ");
mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO tbl_health_units(h_name,h_representative)VALUES('$hu','$email') "); 
 echo"<div class='alert alert-success'> 
                            <button type='button' class='close' data-dismiss='alert'>X</button> 
                            <strong>Success!</strong> User added from the database. 
                        </div>"; 

  
}?>