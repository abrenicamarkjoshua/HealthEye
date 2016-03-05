<?php 
include("conn.php"); 
/** 
if($_POST){ 
$checkbox1=$_POST['subjs'];   
$chk="";   
foreach($checkbox1 as $chk1)   
   {   
      $chk .= $chk1.",";   
     
   } 

echo"$chk";  
$haha = $chk; 
$a = array(); 
$a = explode(',', $chk); 
print_r($a); 

echo $a[1]; 
} 
**/ 
if($_POST){ 
$err1 = "<b>Passwords</b> Mismatch."; 
$err2 = "<b>Emails</b> Mismatch."; 
$err3 = "<b>Username</b> is already existing."; 
$err4 = "<b>Email</b> is already existing."; 
$err5 = "1 <b>Chairperson</b> is already existing from DCS, futhermore any records with a chairperson Usertype will be void."; 

$lname=$_POST['lname']; 
$fname=$_POST['fname']; 
$mname=$_POST['mname']; 
$email=$_POST['email']; 
$username=$_POST['username']; 
$reemail=$_POST['reemail']; 
$pass=$_POST['password']; 
$repass=$_POST['repassword']; 
$utype=$_POST['utype']; 
$checkbox1=$_POST['subjs'];   
$chk="";   
foreach($checkbox1 as $chk1)   
   {   
      $chk .= $chk1.",";   
     
   } 
if($lname == ""||$mname == ""||$fname == ""||$email == ""||$username == ""||$reemail == ""||$pass == ""||$repass == ""||$utype == ""||$reemail != $email || $pass != $repass){ 
echo"<div class='alert alert-error' id='wrong' style='margin:1%;'> 
                            <button type='button' class='close' data-dismiss='alert'>Ã—</button> 
                            <strong>Some field(s) requires attention! &nbsp Please Check the following fields: </strong>"; 
if($lname == ""){ 
echo "<li>Lastname is empty.</li>"; 
}else{echo"";} 
if($mname == ""){ 
echo "<li>Middlename is empty.</li>"; 
}else{echo"";} 
if($fname == ""){ 
echo "<li>Firstname is empty.</li>"; 
}else{echo"";} 
if($email == ""){ 
echo"<li>Email is empty.</li>"; 
}else{echo"";} 
if($username == ""){ 
echo "<li>Username is empty.</li>"; 
}else{echo"";} 
if($reemail == ""){ 
echo"<li>Re-Type Email is empty.</li>"; 
}else{echo"";} 
if($pass == ""){ 
echo"<li>Password is empty.</li>"; 
}else{echo"";} 
if($repass == ""){ 
echo"<li>Re-Type Password is empty.</li>"; 
}else{echo"";} 
if($utype == ""){ 
echo"<li>User Type is empty.</li>"; 
}else{echo"";} 
} 


 $querycheck= mysqli_query($GLOBALS["___mysqli_ston"], "select * from account where acc_type='Chairperson'"); 
 $row1 = mysqli_fetch_assoc($querycheck); 
 if($row1 != 1) { 
 $query= mysqli_query($GLOBALS["___mysqli_ston"], "select * from account where acc_email='$email'"); 

$row = mysqli_fetch_assoc($query); 
if($row != 1){ 
$dbemail=$row['email']; 
$dbnick=$row['acc_username']; 

 if($username!=$dbnick){ 
 if($email!=$dbemail){ 
 if($email==$reemail){ 
 if($pass==$repass){ 
  
date_default_timezone_set("Etc/GMT+8"); 
$date  = date('m-d-Y H:i:s'); 
mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO account(acc_firstname, acc_middlename, acc_lastname, acc_username,acc_email, acc_password, acc_type 
,acc_created, last_login,acc_validated,acc_status,acc_handle)VALUES('$fname','$mname','$lname','$username','$email','$pass','$utype','$date','$date','Pending','Registered','$chk') ");
echo"Account Created .."; 
header('Refresh: 1; login.php'); 
 }else { 
 //di parehas pass 
 echo"<li><b>Passwords</b> Mismatch.</li>"; 
 } 
 }else { 
 //di parehas email 
 echo"<li><b>Email</b> Mismatch.</li>"; 
 } 
 }else { 
 // merong existing email 
 echo"<li><b>Email</b> is already existing.</li>"; 
 } 
 }else { 
//existing username 
echo"<li><b>Username</b> is already existing.</li>"; 
 } 
 } 
}else { 
//meron ng chairperson 
echo"<li>1 <b>Chairperson</b> is already existing from DCS, futhermore any records with a chairperson Usertype will be void..</li>"; 
 } 
 echo"</div>"; 

} 
  
?>
