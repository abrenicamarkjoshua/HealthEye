
<?php 
include("../conn.php"); 
session_start();
if($_GET) 
    { 
     if(!isset($_GET['perm'])){
    $id = $_GET['id']; 
    $hu = $_GET['hu']; 
    $e = $_GET['e']; 
    $m = $_GET['m']; 
	
	
     $equerycheck= mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_accounts where acc_id='$id'"); 

 $er = mysqli_fetch_assoc($equerycheck); 
 $erow1 = mysqli_num_rows($equerycheck); 


    $query = "update tbl_accounts set acc_health_unit='$hu',acc_email='$e',acc_mobile='$m' where acc_id='$id'";     
    mysqli_query($GLOBALS["___mysqli_ston"], $query); 
    echo"<div class='alert alert-success'> 
                            <button type='button' class='close' data-dismiss='alert'>X</button> 
                            <strong>Success!</strong> You successfully edited account record [<strong>$e</strong>]. 
                        </div>"; 
}else{
if($_GET['perm'] == 1){
    $aid = $_GET['aid']; 
    $e = $_GET['e']; 
    $m = $_GET['m'];
  $fname = $_GET['fn'];
  $lname = $_GET['ln'];
  $mname = $_GET['mn'];
  $us = $_GET['un'];
  $ps = $_GET['pw'];


$accid = $_SESSION['accid'];
    $query = "update tbl_accounts set acc_fname='$fname',acc_lname='$lname',acc_mname='$mname',acc_username='$us',acc_password='$ps',acc_email='$e',acc_mobile='$m' where acc_id='$accid'";     
    mysqli_query($GLOBALS["___mysqli_ston"], $query); 
    echo"<div class='alert alert-success'> 
                            <button type='button' class='close' data-dismiss='alert'>X</button> 
                            <strong>Success!</strong> You successfully edited account record [<strong>$e</strong>]. 
                        </div>"; 


}else{
$id = $_GET['id']; 
    $e = $_GET['e']; 
    $m = $_GET['m'];
  $name = $_GET['n'];
  $a = $_GET['a'];
  $w = $_GET['w'];

  $accid = $_SESSION['accid'];
    $query = "update tbl_health_units set h_name='$name',h_address='$a',h_email='$e',h_mobile='$m',h_website='$w' where h_id='$id'";     
    mysqli_query($GLOBALS["___mysqli_ston"], $query); 
	$query1 = "update tbl_accounts set acc_health_unit='$name' where acc_id='$accid'";     
    mysqli_query($GLOBALS["___mysqli_ston"], $query1); 
    echo"<div class='alert alert-success'> 
                            <button type='button' class='close' data-dismiss='alert'>X</button> 
                            <strong>Success!</strong> You successfully edited Health Unit record [<strong>$name</strong>]. 
                        </div>"; 
}}
} 

  
?>