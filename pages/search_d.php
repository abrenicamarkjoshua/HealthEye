

<?Php

session_start();
$in=$_GET['txt'];
if(!ctype_alnum($in)){
include_once '../conn.php'; 
$query= mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_diseases where disease_name like '%$in%' or disease_id like '%$in%'"); 
$numrows = mysqli_num_rows($query); 

echo"<div class='row-fluid sortable ui-sortable'>"; 
$a = 0;

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
                 
}echo"</div>"; 
exit;
}
else{


include_once '../conn.php'; 
$query= mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_diseases where disease_name like '%$in%' or disease_id like '%$in%'"); 
$numrows = mysqli_num_rows($query); 

echo"<div class='row-fluid sortable ui-sortable'>"; 
$a = 0;
$searchuno = mysqli_num_rows($query);
if($searchuno != 0 && $in != ""){

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
                 
}echo"</div>"; 
}else{
echo"No Records Found"; 
}
}
?>