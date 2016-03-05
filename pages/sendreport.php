<script type="text/javascript">
var intTextBox=1;
var intCnt=0;
function addElement()
{
intTextBox = intTextBox +1;
intCnt = intCnt +1 ;
var contentID = document.getElementById("rep");
var newTBDiv = document.createElement("div");
newTBDiv.setAttribute("id","strText"+intTextBox);

newTBDiv.innerHTML = "<form class='form-horizontal'><p>Row ["+intCnt+"]</p><input class='input-large span5' name='cnt[]' style='display:none;'type='text' /><div class='control-group'><label class='control-label'>Disease Name: </label><div class='controls'><select name='d_name[]' id='name'>"
+"<?php $querycheck= mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_diseases"); 
 while($row = mysqli_fetch_assoc($querycheck)){ 
 $dn = $row['disease_name'];  
 $dd = $row['disease_description'];  
 $dco = $row['disease_id'];  
 $dca = $row['disease_category'];
echo "<option value='$dco'>[$dco] $dn</option>";}?></select></div> </div>"+
"<div class='control-group'><label class='control-label'>Age Range: </label><div class='controls'><select class='input-large span6'name='d_age' id='age'><option value='Under 1'>Under 1</option><option value='1-4'>1-4</option><option value='5-9'>5-9</option><option value='10-14'>10-14</option><option value='15-19'>15-19</option><option value='20-24'>20-24</option><option value='25-29'>25-29</option><option value='30-34'>30-34</option><option value='35-39'>35-39</option><option value='40-44'>40-44</option><option value='45-49'>45-49</option><option value='50-54'>50-54</option><option value='55-59'>55-59</option><option value='60-64'>60-64</option><option value='65-69'>65-69</option><option value='70 and above'>70 and above</option></select></div></div><div class='control-group'><label class='control-label' >No. of Cases for Female: </label><div class='controls'><input class='input-large span5' name='fdc[]'  id='email' type='text'/></div></div><div class='control-group'><label class='control-label' >No. of Cases for Male: </label><div class='controls'><input class='input-large span5' name='mdc[]'  id='email' type='text' /></div></div></form><hr style='background-color:#2D89EF;width:auto;'>";
contentID.appendChild(newTBDiv);}
//FUNCTION TO REMOVE TEXT BOX ELEMENT
function removeElement()
{
if(intTextBox != 0)
{
var contentID = document.getElementById("rep");
contentID.removeChild(document.getElementById("strText"+intTextBox));
intTextBox = intTextBox-1;
}
}
</script>  
<div id="rep">
<hr style="background-color:#2D89EF;">

<form class="form-horizontal" method="post"> <p>Row [0]</p>
<?php include("report_insert.php");?><input class='input-large span5' name='cnt[]' style='display:none;'type='text' />
 <div class="control-group"> 
<label class="control-label">Disease Name: </label> 
<div class="controls">
<select class="input-large span6"name='d_name[]' id='name'>
<?php $querycheck= mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_diseases"); 
 while($row = mysqli_fetch_assoc($querycheck)){ 
 $dn = $row['disease_name'];  
 $dd = $row['disease_description'];  
 $dco = $row['disease_id'];  
 $dca = $row['disease_category'];
echo "<option value='$dco'>[$dco] $dn</option>";}?></select>
                                </div> 
                              </div>
							  <div class="control-group"> 
<label class="control-label">Age Range: </label> 
<div class="controls">
<select class="input-large span6"name='d_age[]' id='age'>
<option value='Under 1'>Under 1</option>
<option value='1-4'>1-4</option>
<option value='5-9'>5-9</option>
<option value='10-14'>10-14</option>
<option value='15-19'>15-19</option>
<option value='20-24'>20-24</option>
<option value='25-29'>25-29</option>
<option value='30-34'>30-34</option>
<option value='35-39'>35-39</option>
<option value='40-44'>40-44</option>
<option value='45-49'>45-49</option>
<option value='50-54'>50-54</option>
<option value='55-59'>55-59</option>
<option value='60-64'>60-64</option>
<option value='65-69'>65-69</option>
<option value='70 and above'>70 and above</option>
</select>
                                </div> 
                              </div>
							<div class="control-group"> 
                                <label class="control-label" >No. of Cases for Female: </label> 
                                <div class="controls"> 
                                <input class="input-large span5" name="fdc[]"  id="email" type="text"/> 
                            </div> 
                            </div> 
							<div class="control-group"> 
                                <label class="control-label" >No. of Cases for Male: </label> 
                                <div class="controls"> 
                                <input class="input-large span5" name="mdc[]"  id="email" type="text" v/> 
                            </div> 
                            </div> 
							<hr style="background-color:#2D89EF;">
							  </div> <p style="text-align:center;"><button type="button" class="btn btn-primary"onclick="addElement()"value="+  Add New Row"><i class="icon-plus"style="color:#fff;"></i>&nbsp&nbsp Add New Row</button>&nbsp&nbsp&nbsp&nbsp<button type="button" onclick="removeElement()"class="btn btn-danger" value="x  Remove Row"><i class="icon-remove"style="color:#fff;"></i>&nbsp&nbsp Remove Row</button></br></br><button type="submit" class="btn btn-success"name="submit"value="Save Records"><i class="icon-check"style="color:#fff;"></i>&nbsp&nbsp Submit</button></p></form>