 
<script type="text/javascript">
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
	var url="pages/search_d.php";
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
<?php  

if($_SESSION['acctype'] == "Admin"){ 
                                         

?>
<p>     
    <a href="index.php?page=e7067a8cdc396e4c168db56633c6ba01&d_a=1" id="add_disease1" ><button class="btn btn-success"><i class="icon-plus"></i>&nbsp&nbsp&nbspAdd Disease</button></a> 
	
</p> 
<?php 
}?>
       <p id=msg style=" text-align:center;
"></p>

<form name="myForm" class="form-horizontal" style="margin-right:1%;">
<div class="control-group">

								<label class="control-label">Search : </label>
								<div class="controls">
<input type="text"
onkeyup="ajaxFunction(this.value);"class="input-large span3" style="width:700px; float:left;"placeholder="Disease Index Number / Disease Name"name="username" /> 
 

</div>     
</div> 
</form>
</div>     
    <hr>
<div id="displayDiv">	
<?php 
 
include_once 'conn.php'; 
$query= mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_diseases"); 
$numrows = mysqli_num_rows($query); 
if($numrows !=0){ 
$a = 0; 

echo"<div class='row-fluid sortable ui-sortable'>"; 

while($r = mysqli_fetch_assoc($query)){ 

$a = $a + 1 ; 

$categ = $r['disease_category'];
$dindex = $r['disease_id'];
$fdd = nl2br($r['disease_description']);
echo"<div class='box span4'> 
                    <div class='box-header' data-original-title=''> 
                        <h2>[<strong> $dindex </strong>]</h2> 
                    </div> 
                    <div class='box-content'> 
                        <dl>
						<dt>Name: </dt> 
                          <dd style='text-align: justify; 
    text-justify: inter-word;'>&nbsp&nbsp $r[disease_name]</dd> 
	<dt>Category: </dt> 
                          <dd style='text-align: justify; 
    text-justify: inter-word;'>&nbsp&nbsp$categ</dd> 						
                          <dt>Description: </dt> 
                          <dd style='text-align: justify; 
    text-justify: inter-word;'>&nbsp&nbsp$fdd</dd> 
                          
                        </dl>      
                         
                    </div>"; 
                    if($_SESSION['acctype'] == "Admin"){ 
                                        echo" 
                    <div ><p style='text-align:center;'> 
<a href='index.php?page=e7067a8cdc396e4c168db56633c6ba01&d_e_id=$r[disease_id]' id='add_disease1'><button class='btn btn-primary'><i class='icon-pencil'></i>&nbsp&nbsp&nbspEdit Disease</button></a>     
<a href='#'class='btn-setting'onClick=". '"' . "toggle_visibility('delete_d')" . '"' . " id='delete_disease1' ><button class='btn btn-danger'><i class='icon-remove'></i>&nbsp&nbsp&nbspDelete Disease</button></a>     
    </p> 
                </div>"; } echo"    </div>            "; 
                include("modals.php"); 
                 
if($a == 3) { 
$a = 0; 
echo"</div>"; 
echo"<div class='row-fluid sortable ui-sortable'>"; 

} 
                 
} 
echo"</div>"; 
}else{ 
echo" 
<div class='row-fluid sortable ui-sortable'> 
             
                <div class='box span4'> 
                    <div class='box-header' data-original-title=''> 
                        <h2>[<strong> Disease Index </strong>]</h2> 
                    </div> 
                    <div class='box-content'> 
                        <dl> 
                          <dt>Disease Name: </dt> 
                          <dd>What's the name of the disease base from the index code.</dd> 
						  <dt>Category: </dt> 
                          <dd>What category do the disease belongs to.</dd> 
                          <dt>Description: </dt> 
                          <dd>Display the information regarding the disease according to the updated ICD10 Order.</dd> 
                         
                        </dl>      
                         
                    </div>"; 
          echo" 
                </div>                 
            </div>"; 
} 
?>
</div>