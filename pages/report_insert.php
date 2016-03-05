<?php
include("conn.php");

 $accid = $_SESSION['accid']; 
$query= mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_accounts where acc_id='$accid'"); 
while($row = mysqli_fetch_assoc($query)){
$acchu= $row['acc_health_unit'];
$fname= $row['acc_fname']; 
$lname= $row['acc_lname']; 
$mname= $row['acc_mname'];
$name = $lname . ", ". $fname . " ". $mname  ; 
}


if (isset($_POST['submit'])) {

date_default_timezone_set("Etc/GMT+8"); 
$dt = date('m-d-Y'); 
$tm = date('H:i:s'); 
$dn = $_POST['d_name'];
$da = $_POST['d_age'];
$mdc = $_POST['mdc'];
$fdc = $_POST['fdc'];
$cnt = $_POST['cnt'];




$catLen = count($cnt);
for($i = 0; $i < $catLen; $i++){
mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO tbl_reports(r_by,r_health_unit,r_disease,r_age_range,r_date,r_time,r_female,r_male) VALUES('$accid','$acchu','$dn[$i]','$da[$i]','$dt','$tm','$fdc[$i]','$mdc[$i]')"); 

}

      
echo"<div class='alert alert-success'> 
        <button type='button' class='close' data-dismiss='alert'>X</button> 
        <strong>Success!</strong> Report has been submitted. :D 
    </div>"; 
	
 
 }
        
    


 
?>