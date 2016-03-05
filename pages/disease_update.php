<?php 
include("../conn.php"); 
if($_GET) 
    { 
    $id = $_GET['eid']; 
    $dn = $_GET['edn']; 
    $dd = $_GET['edd']; 
    $dc = $_GET['edc']; 
     $equerycheck= mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_diseases where disease_id='$id'"); 
 $erow1 = mysqli_num_rows($equerycheck); 
 $er = mysqli_fetch_assoc($equerycheck); 
if($er['disease_name'] == $dn){
    $query = "update tbl_diseases set disease_name='$dn',disease_description='$dd',disease_category='$dc' where disease_id='$id'";    mysqli_query($GLOBALS["___mysqli_ston"], $query);
    echo"<div class='alert alert-success'> 
                            <button type='button' class='close' data-dismiss='alert'>X</button> 
                            <strong>Success!</strong> You successfully edited disease record [<strong>$dn</strong>]. 
                        </div>"; 
}else{ 
 if($erow1 <1 && $er['disease_name'] != $dn) { 
    $query = "update tbl_diseases set disease_name='$dn',disease_description='$dd',disease_category='$edc' where disease_id='$id'";    mysqli_query($GLOBALS["___mysqli_ston"], $query);
    echo"<div class='alert alert-success'> 
                            <button type='button' class='close' data-dismiss='alert'>X</button> 
                            <strong>Success!</strong> You successfully edited disease record [<strong>$dn</strong>]. 
                        </div>"; 
 }else{ 
 echo"<div class='alert alert-error'> 
        <button type='button' class='close' data-dismiss='alert'>X</button> 
        <strong>Something's wrong!</strong> </br>The disease record [<strong>$dn</strong>] is already added in the database :( 
    </div>";} 
}} 

  
?>