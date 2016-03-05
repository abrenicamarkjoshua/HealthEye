<?Php
//***************************************
// This is downloaded from www.plus2net.com //
/// You can distribute this code with the link to www.plus2net.com ///
//  Please don't  remove the link to www.plus2net.com ///
// This is for your learning only not for commercial use. ///////
//The author is not responsible for any type of loss or problem or damage on using this script.//
/// You can use it at your own risk. /////
//*****************************************
//error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR);
require "config.php";  // database connection
//////////
//////////////////////////////// Main Code sarts /////////////////////////////////////////////

session_start();
$in=$_GET['txt'];
if(!ctype_alnum($in)){
include_once '../conn.php'; 
$query= mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_accounts where acc_fname like '%$in%' OR acc_mname like '%$in%' OR acc_lname like '%$in%' OR acc_email like '%$in%' OR acc_health_unit like '%$in%' "); 
$numrows = mysqli_num_rows($query); 

echo"<div class='row-fluid sortable ui-sortable'>"; 
$a = 0;
while($r = mysqli_fetch_assoc($query)){ 

if($r['acc_email'] != "jayjosephchua@gmail.com") {
$a = $a + 1 ; 
$fname=$r['acc_fname']; 
$lname=$r['acc_lname']; 
$mame=$r['acc_mname']; 

echo"<div class='box span4'> 
                    <div class='box-header' data-original-title=''> 
                        <h2>$r[acc_lname], $r[acc_fname] $r[acc_mname] </h2> 
                    </div> 
                    <div class='box-content'> 
                        <dl> 
                          <dt>Health Unit: </dt> 
                          <dd style='text-align: justify; 
    text-justify: inter-word;'>&nbsp&nbsp$r[acc_health_unit]</dd> 
                          <dt>Email :</dt> 
                          <dd>&nbsp&nbsp$r[acc_email]</dd> 
                          <dt>Contact No. :</dt> 
                          <dd>&nbsp&nbsp$r[acc_mobile]</dd> 
                          <dt>Status :</dt> 
                          <dd>&nbsp&nbsp$r[acc_status]</dd> 
                          <dt>Setup :</dt> 
                          <dd>&nbsp&nbsp$r[acc_setup]</dd> 
                          <dt>Date Created :</dt> 
                          <dd>&nbsp&nbsp$r[acc_created]</dd> 
                        </dl>      
                         
                    </div>"; 
                    if($_SESSION['acctype'] == "Admin"){ 
                                        echo" 
                    <div ><p style='text-align:center;'> 
<a href='index.php?page=f9aae5fda8d810a29f12d1e61b4ab25f&u_e_id=$r[acc_id]' id='add_disease1'><button class='btn btn-primary'><i class='icon-pencil'></i>&nbsp&nbsp&nbspEdit User</button></a>     
<a href='#'class='btn-setting'onClick=". '"' . "toggle_visibility('delete_u')" . '"' . " id='delete_disease1' ><button class='btn btn-danger'><i class='icon-remove'></i>&nbsp&nbsp&nbspDelete User</button></a>     
    </p> 
                </div>"; } 

                echo"    </div>            "; 
                include("modals.php"); 
                 
if($a == 3) { 
$a = 0; 
echo"</div>"; 
echo"<div class='row-fluid sortable ui-sortable'>"; 

} 
   

}   
}echo"</div>"; 
exit;
}
else{


include_once '../conn.php'; 
$query= mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_accounts where acc_fname like '%$in%' OR acc_mname like '%$in%' OR acc_lname like '%$in%' OR acc_email like '%$in%' OR acc_health_unit like '%$in%' "); 
$numrows = mysqli_num_rows($query); 

echo"<div class='row-fluid sortable ui-sortable'>"; 
$a = 0;
while($r = mysqli_fetch_assoc($query)){ 

if($r['acc_email'] != "jayjosephchua@gmail.com") {
$a = $a + 1 ; 
$fname=$r['acc_fname']; 
$lname=$r['acc_lname']; 
$mame=$r['acc_mname']; 

echo"<div class='box span4'> 
                    <div class='box-header' data-original-title=''> 
                        <h2>$r[acc_lname], $r[acc_fname] $r[acc_mname] </h2> 
                    </div> 
                    <div class='box-content'> 
                        <dl> 
                          <dt>Health Unit: </dt> 
                          <dd style='text-align: justify; 
    text-justify: inter-word;'>&nbsp&nbsp$r[acc_health_unit]</dd> 
                          <dt>Email :</dt> 
                          <dd>&nbsp&nbsp$r[acc_email]</dd> 
                          <dt>Contact No. :</dt> 
                          <dd>&nbsp&nbsp$r[acc_mobile]</dd> 
                          <dt>Status :</dt> 
                          <dd>&nbsp&nbsp$r[acc_status]</dd> 
                          <dt>Setup :</dt> 
                          <dd>&nbsp&nbsp$r[acc_setup]</dd> 
                          <dt>Date Created :</dt> 
                          <dd>&nbsp&nbsp$r[acc_created]</dd> 
                        </dl>      
                         
                    </div>"; 
                    if($_SESSION['acctype'] == "Admin"){ 
                                        echo" 
                    <div ><p style='text-align:center;'> 
<a href='index.php?page=f9aae5fda8d810a29f12d1e61b4ab25f&u_e_id=$r[acc_id]' id='add_disease1'><button class='btn btn-primary'><i class='icon-pencil'></i>&nbsp&nbsp&nbspEdit User</button></a>     
<a href='#'class='btn-setting'onClick=". '"' . "toggle_visibility('delete_u')" . '"' . " id='delete_disease1' ><button class='btn btn-danger'><i class='icon-remove'></i>&nbsp&nbsp&nbspDelete User</button></a>     
    </p> 
                </div>"; } 

                echo"    </div>            "; 
                include("modals.php"); 
                 
if($a == 3) { 
$a = 0; 
echo"</div>"; 
echo"<div class='row-fluid sortable ui-sortable'>"; 

} 
   

}   
}
}
?>