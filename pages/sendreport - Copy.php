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

newTBDiv.innerHTML = "<form class='form-horizontal'><p>Row ["+intCnt+"]</p><div class='control-group'><label class='control-label'>Disease Name: </label><div class='controls'><select name='d_name[]' id='name'>"
+"<?php $querycheck= mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_diseases"); 
 while($row = mysqli_fetch_assoc($querycheck)){ 
 $dn = $row['disease_name'];  
 $dd = $row['disease_description'];  
 $dco = $row['disease_id'];  
 $dca = $row['disease_category'];
echo "<option value='$dn'>[$dco] $dn</option>";}?></select></div> </div>"
+"<div class='control-group'><label class='control-label'>Gender: </label><div class='controls'><select class='input-large span6'name='d_gender' id='gender'><option value='Male'>Male</option><option value='Female'>Female</option></select></div> </div>" +
"<div class='control-group'><label class='control-label'>Age Range: </label><div class='controls'><select class='input-large span6'name='d_age' id='age'><option value='Under 1'>Under 1</option><option value='1-4'>1-4</option><option value='5-9'>5-9</option><option value='10-14'>10-14</option><option value='15-19'>15-19</option><option value='20-24'>20-24</option><option value='25-29'>25-29</option><option value='30-34'>30-34</option><option value='35-39'>35-39</option><option value='40-44'>40-44</option><option value='45-49'>45-49</option><option value='50-54'>50-54</option><option value='55-59'>55-59</option><option value='60-64'>60-64</option><option value='65-69'>65-69</option><option value='70 and above'>70 and above</option></select><div class='control-group'><label class='control-label'>Male: </label><div class='controls'><input class='input-large span3'id='male'name='d_male[]' type='text' /></div></div><div class='control-group'><label class='control-label'>Female: </label><div class='controls'><input class='input-large span3' id='female'name='d_female[]' type='text' /></div></div></form><hr>";
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
<hr>

<form class="form-horizontal" method="post"> <p>Row [0]</p>
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
echo "<option value='$dn'>[$dco] $dn</option>";}?></select>
                                </div> 
                              </div>
							 
							  <table style="width:auto;">
<tr style="font-style:bold;color:blue;text-align:center;">
<td>Under 1</td>
<td>1-4</td>
<td>5-9</td>
<td>10-14</td>
<td>15-19</td>
<td>20-24</td>
<td>25-29</td>
<td>30-34</td>
<td>35-39</td>
<td>40-44</td>
<td>45-49</td>
<td>50-54</td>
<td>55-59</td>
<td>60-64</td>
<td>65-69</td>
<td>70-74</td>
<td>75 and Above</td>
</tr>
<tr>
<td><input  style="width:40px;"id="md1"name="md_1[]" type="text" /></td>
<td><input style="width:40px;"  id="md2"name="md_2[]" type="text" /></td>
<td><input style="width:40px;"  id="md3"name="md_3[]" type="text" /></td>
<td><input style="width:40px;"  id="md4"name="md_4[]" type="text" /></td>
<td><input  style="width:40px;" id="md5"name="md_5[]" type="text" /></td>
<td><input style="width:40px;"  id="md6"name="md_6[]" type="text" /></td>
<td><input style="width:40px;"  id="md7"name="md_7[]" type="text" /></td>
<td><input  style="width:40px;"id="md8"name="md_8[]" type="text" /></td>
<td><input style="width:40px;"  id="md9"name="md_9[]" type="text" /></td>
<td><input style="width:40px;"  id="md10"name="md_10[]" type="text" /></td>
<td><input  style="width:40px;" id="md11"name="md_11[]" type="text" /></td>
<td><input style="width:40px;"  id="md12"name="md_12[]" type="text" /></td>
<td><input style="width:40px;"  id="md13"name="md_13[]" type="text" /></td>
<td><input style="width:40px;"  id="md14"name="md_14[]" type="text" /></td>
<td><input style="width:40px;" id="md15"name="md_15[]" type="text" /></td>
<td><input  style="width:40px;" id="md16"name="md_16[]" type="text" /></td>
<td><input style="width:40px;"  id="md17"name="md_17[]" type="text" /></td>
</tr>
<tr style="font-style:bold;color:red;text-align:center;">
<td>Under 1</td>
<td>1-4</td>
<td>5-9</td>
<td>10-14</td>
<td>15-19</td>
<td>20-24</td>
<td>25-29</td>
<td>30-34</td>
<td>35-39</td>
<td>40-44</td>
<td>45-49</td>
<td>50-54</td>
<td>55-59</td>
<td>60-64</td>
<td>65-69</td>
<td>70-74</td>
<td>75 and Above</td>

</tr>
<tr>
<td><input  style="width:40px;"id="fd1"name="fd_1[]" type="text" /></td>
<td><input style="width:40px;"  id="fd2"name="fd_2[]" type="text" /></td>
<td><input style="width:40px;"  id="fd3"name="fd_3[]" type="text" /></td>
<td><input style="width:40px;"  id="fd4"name="fd_4[]" type="text" /></td>
<td><input  style="width:40px;" id="fd5"name="fd_5[]" type="text" /></td>
<td><input style="width:40px;"  id="fd6"name="fd_6[]" type="text" /></td>
<td><input style="width:40px;"  id="fd7"name="fd_7[]" type="text" /></td>
<td><input  style="width:40px;"id="fd8"name="fd_8[]" type="text" /></td>
<td><input style="width:40px;"  id="fd9"name="fd_9[]" type="text" /></td>
<td><input style="width:40px;"  id="fd10"name="fd_10[]" type="text" /></td>
<td><input  style="width:40px;" id="fd11"name="fd_11[]" type="text" /></td>
<td><input style="width:40px;"  id="fd12"name="fd_12[]" type="text" /></td>
<td><input style="width:40px;"  id="fd13"name="fd_13[]" type="text" /></td>
<td><input style="width:40px;"  id="fd14"name="fd_14[]" type="text" /></td>
<td><input style="width:40px;" id="fd15"name="fd_15[]" type="text" /></td>
<td><input  style="width:40px;" id="fd16"name="fd_16[]" type="text" /></td>
<td><input style="width:40px;"  id="fd17"name="fd_17[]" type="text" /></td>
</tr>
</table>
							  <hr>
							  </div> <p style="text-align:center;"><button type="button" class="btn btn-primary"onclick="addElement()"value="+  Add New Row"><i class="icon-plus"style="color:#fff;"></i>&nbsp&nbsp Add New Row</button>&nbsp&nbsp&nbsp&nbsp<button type="button" onclick="removeElement()"class="btn btn-danger" value="x  Remove Row"><i class="icon-remove"style="color:#fff;"></i>&nbsp&nbsp Remove Row</button></br></br><button type="submit" class="btn btn-success"value="Save Records"><i class="icon-check"style="color:#fff;"></i>&nbsp&nbsp Submit</button></p></form>