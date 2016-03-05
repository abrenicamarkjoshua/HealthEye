<?php 
include_once 'conn.php'; 
if($_POST){ 
$user=$_POST['username']; 
$pass=$_POST['password']; 

$err1 = "It's either your <b>username</b> or <b>password</b> that is incorrect"; 
$err2 = "Please input a text to your <b>username</b> field."; 
$err3 = "Please input a text to your <b>password</b> field."; 
$err4 = "Please input a text to your <b>username and password</b> field."; 

if($user && $pass) 
{ 
$_SESSION['name']= $user; 

$query= mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_accounts where acc_username='$user' OR acc_email='$user'"); 
$numrows = mysqli_num_rows($query); 
if($numrows !=0){ 
while($row = mysqli_fetch_assoc($query)){ 
$dbname= $row['acc_username'];$dbemail= $row['acc_email']; 
$fname= $row['acc_fname']; 
$lname= $row['acc_lname']; 
$mname= $row['acc_mname']; 
$acctype= $row['acc_type']; 
$accid= $row['acc_id']; 
$accmob = $row['acc_mobile'];
$accemail= $row['acc_email']; 
$accsetupval = $row['acc_setup'];
if($lname != "" ||$fname != "" ||$mname != "" ) {
$name = $lname . ", ". $fname . " ". $mname  ;  } else{$name= "";}
$dbpassword=$row['acc_password']; 
}

if($user==$dbname||$user == $dbemail||$user==$accemail){ 
if($pass==$dbpassword||$pass == $accmob){ 
if($accsetupval != 0 ||$accsetupval == "") { 
$_SESSION['name'] = $name; 
$_SESSION['email'] = $dbemail; 
$_SESSION['username']= $user; 
$_SESSION['acctype'] = $acctype; 
$_SESSION['accid'] = $accid; 
date_default_timezone_set("Etc/GMT+8"); 
$log = date('m-d-Y H:i:s'); 
$name = $lname . ", ". $fname . " ". $mname  ; 
mysqli_query($GLOBALS["___mysqli_ston"], "update tbl_accounts set acc_login='$log', acc_status='Online' where acc_username = '$user';"); 
echo"Logging in .."; 
header('Refresh: 1; index.php'); 
echo "<script type='text/javascript'>  
window.location.href='index.php'; 
 </script>"; 
}else{
$_SESSION['name'] = $name; 
$_SESSION['email'] = $accemail; 
$_SESSION['username']= $user; 
$_SESSION['acctype'] = $acctype; $_SESSION['accid'] = $accid;
date_default_timezone_set("Etc/GMT+8"); 
$log = date('m-d-Y H:i:s'); 
$name = $lname . ", ". $fname . " ". $mname  ; 
mysqli_query($GLOBALS["___mysqli_ston"], "update tbl_accounts set acc_login='$log', acc_status='Online' where acc_username = '$user' or acc_email='$user';"); 
echo"Logging in .."; 
$val= md5('Setup');
$stringx = "index.php?page=" . $val;
header('Refresh: 1;' . $stringx ); 
echo "<script type='text/javascript'>  
window.location.href='" . $stringx ."'; 
 </script>"; 

}

} 
 
//di equal pass 
else { 

echo"<div class='alert alert-error' style='margin:3%;' > 
                            <button type='button' class='close' data-dismiss='alert'>X</button> 
                            <strong>It's either your username or password is incorrect.</strong> 
                        </div>"; 
} 
} 
//di equal user 
else{ 

echo"<div class='alert alert-error' style='margin:3%;' > 
                            <button type='button' class='close' data-dismiss='alert'>X</button> 
                            <strong>It's either your username or password is incorrect.</strong> 
                        </div>"; 
} 
} 
//wala sa db 
else{ 

echo"<div class='alert alert-error' style='margin:3%;' > 
                            <button type='button' class='close' data-dismiss='alert'>X</button> 
                            <strong>It's either your username or password is incorrect.</strong> 
                        </div>"; 

} 
} else{ 
if(empty($_POST['username']) & empty($_POST['password'])){ 

echo"<div class='alert alert-error' style='margin:3%;' > 
                            <button type='button' class='close' data-dismiss='alert'>X</button> 
                            <strong>Username and Password field is empty.</strong> 
                        </div>"; 

} 

else     if(empty($_POST['username'])) { 


$_SESSION['err'] = $err2; 
echo"<div class='alert alert-error' style='margin:3%;' > 
                            <button type='button' class='close' data-dismiss='alert'>X</button> 
                            <strong>Username field is empty.</strong> 
                        </div>"; 

}else if(empty($_POST['password'])) { 

echo"<div class='alert alert-error' style='margin:3%;' > 
                            <button type='button' class='close' data-dismiss='alert'>X</button> 
                            <strong>Password field is empty.</strong> 
                        </div>"; 

} 
} 
} 

?>