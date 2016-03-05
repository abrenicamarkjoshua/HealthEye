<?php 
include("conn.php"); 
if($_POST){ 
    $dn = $_POST['d_name']; 
    $dd = $_POST['d_description']; 
    $dco = $_POST['d_code']; 
    $dca = $_POST['d_categ']; 
 $equerycheck= mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_diseases where disease_name='$dn'"); 
 $erow1 = mysqli_num_rows($equerycheck); 
 if($erow1 <1) { 
    mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO tbl_diseases(disease_name,disease_description,disease_id,disease_category) VALUES('$dn','$dd','$dco','$dca')"); 
echo"<div class='alert alert-success'> 
        <button type='button' class='close' data-dismiss='alert'>X</button> 
        <strong>Success!</strong> The disease record [<strong>$dn</strong>] is added into the database. :D 
    </div>"; 
}else{ 
echo"<div class='alert alert-error'> 
        <button type='button' class='close' data-dismiss='alert'>X</button> 
        <strong>Something's wrong!</strong> </br>The disease record [<strong>$dn</strong>] is already added in the database :( 
    </div>";}} 
?>