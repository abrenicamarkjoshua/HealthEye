<?php  

if($_SESSION['acctype'] == "Admin"){ 
                                         

?> <script type="text/javascript">
function ajaxFunction(str)
{
var httpxml;
try
  {
  // Firefox, Opera 8.0+, Safari
  httpxml=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    httpxml=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    try
      {
      httpxml=new ActiveXObject("Microsoft.XMLHTTP");
      }
    catch (e)
      {
      alert("Your browser does not support AJAX!");
      return false;
      }
    }
  }
function stateChanged() 
    {
    if(httpxml.readyState==4)
      {
document.getElementById("displayDiv").innerHTML=httpxml.responseText;
document.getElementById("msg").style.display='none';

      }
    }
	var url="pages/search_u.php";
url=url+"?txt="+str;
url=url+"&sid="+Math.random();
httpxml.onreadystatechange=stateChanged;
httpxml.open("GET",url,true);
httpxml.send(null);
document.getElementById("displayDiv").innerHTML="Please Wait ...";
document.getElementById("msg").style.display='inline';

  }
</script>
<div style="text-align:center;" > 
<p>     
    <a href="index.php?page=f9aae5fda8d810a29f12d1e61b4ab25f&u_a=1" id="add_disease1" ><button class="btn btn-success"><i class="icon-plus"></i>&nbsp&nbsp&nbspAdd User</button></a> 
</p> 
</br>
       <p id=msg style=" text-align:center;
"></p>

<form name="myForm" class="form-horizontal" style="margin-right:1%;">
<div class="control-group">

								<label class="control-label">Search : </label>
								<div class="controls">
<input type="text"
onkeyup="ajaxFunction(this.value);"class="input-large span3" style="width:700px; float:left;"placeholder="First Name, Middle Name, Last Name, Email , Health Unit"name="username" /> 
 

</div>     
</div> 
</form>
    
</div>     
    <hr> 
	<div id="displayDiv">
<?php 
} 

if(isset($_GET["u_a"])){ 

}else{ 
include_once 'conn.php'; 
$query= mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_accounts"); 
$numrows = mysqli_num_rows($query); 
if($numrows !=0){ 
$a = 0; 

echo"<div class='row-fluid sortable ui-sortable'>"; 

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
                          <dt>Barangay Health Station: </dt> 
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
echo"</div>"; 
}else{ 
echo" 
<div class='row-fluid sortable ui-sortable'> 
             
                <div class='box span4'> 
                    <div class='box-header' data-original-title=''> 
                        <h2>Disease Name</h2> 
                    </div> 
                    <div class='box-content'> 
                        <dl> 
                          <dt>Description: </dt> 
                          <dd>A description of the disease.</dd> 
                          <dt>Symptoms</dt> 
                          <dd>The symptoms of the disease.</dd> 
                          <dt>Cure</dt> 
                          <dd>The cure for the disease.</dd> 
                        </dl>      
                         
                    </div>"; 
                    if($_SESSION['acctype'] == "Admin"){ 
                                        echo" 
                    <a href='index.php?page=e7067a8cdc396e4c168db56633c6ba01&d_a=1' style='float:right;'id='add_disease1' ><button class='btn btn-success'><i class='icon-plus'></i>&nbsp&nbsp&nbspAdd Disease</button></a>    ";} echo" 
                </div>                 
            </div>"; 
} 
} 
?>

</div>	