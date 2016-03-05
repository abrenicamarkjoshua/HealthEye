<?php 
$semail = $_SESSION['email']; 

$query= mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_accounts where acc_email='$semail'"); 
while($row = mysqli_fetch_assoc($query)){ 
$fname= $row['acc_fname']; 
$lname= $row['acc_lname']; 
$mname= $row['acc_mname']; 
$mobiles= $row['acc_mobile']; 
$accemail= $row['acc_email']; 
$usern= $row['acc_username']; 
$upass= $row['acc_password']; 
$ac= $row['acc_created']; 
$hu= $row['acc_health_unit']; 
$al= $row['acc_login']; 
$alo= $row['acc_logout']; 
$amo= $row['acc_modified']; 
$acid= $row['acc_id'];

} 
$query= mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_health_units where h_name='$hu'"); 
while($row = mysqli_fetch_assoc($query)){ 
$hid= $row['h_id']; 
$hname= $row['h_name']; 
$hadd= $row['h_address']; 
$hrep= $row['h_representative']; 
$webs= $row['h_website']; 
$he= $row['h_email']; 
$hm= $row['h_mobile']; 



} 
?>                     
<script type="text/javascript" language="javascript"> 
        <!-- 
            function updateu() 
            { 
                var request; 
                 
                if(window.XMLHttpRequest) 
                { 
                    request = new XMLHttpRequest(); 
                } 
                else 
                { 
                    request = new ActiveXObject("Microsoft.XMLHTTP"); 
                } 
                  
                 
                request.onreadystatechange = function() 
                { 
                    if(request.readyState == 4) 
                    { 
                        var displayrecords = document.getElementById("edit_res1"); 
                        displayrecords.innerHTML = request.responseText; 
                    } 
                } 
                 
                 
                var aid = document.getElementById('aid').value; 
                var e = document.getElementById('email').value; 
                var m = document.getElementById('mobile').value; 
                var ln = document.getElementById('lname').value; 
                var fn = document.getElementById('fname').value; 
                var mn = document.getElementById('mname').value; 
                var un = document.getElementById('usern').value; 
                var pw = document.getElementById('passw').value; 
                 
                queryString = "?e="+e+"&m="+m+"&aid="+aid+"&fn="+fn+"&ln="+ln+"&mn="+mn+"&un="+un+"&pw="+pw+"&perm=1"; 
                request.open("GET", "pages/users_update.php"+queryString, true); 
                request.send(null); 
            } 
             
              function updatehu() 
            { 
                var request; 
                 
                if(window.XMLHttpRequest) 
                { 
                    request = new XMLHttpRequest(); 
                } 
                else 
                { 
                    request = new ActiveXObject("Microsoft.XMLHTTP"); 
                } 
                  
                 
                request.onreadystatechange = function() 
                { 
                    if(request.readyState == 4) 
                    { 
                        var displayrecords = document.getElementById("edit_res2"); 
                        displayrecords.innerHTML = request.responseText; 
                    } 
                } 
                 
                 
                var id = document.getElementById('id').value; 
                var name = document.getElementById('hu_name').value; 
                var add = document.getElementById('hu_address').value; 
                var mob = document.getElementById('hu_mobile').value; 
                var e = document.getElementById('hu_email').value; 
                var web = document.getElementById('hu_web').value; 
                 
                queryString = "?e="+e+"&m="+mob+"&id="+id+"&n="+name+"&a="+add+"&w="+web+"&perm=2"; 
                request.open("GET", "pages/users_update.php"+queryString, true); 
                request.send(null); 
            } 
             
             
             
             
             
             
     
        </script>
                    <div class="box-content"> 
                     
                          <div class="page-header"> 
                             <div class="box-header"> 
                        <h2><i class="halflings-icon user"></i><span class="break"></span>Personal Information</h2> 
                    </div> 
                          </div>  
<div id="edit_res1"></div> 						  
                          <div class="row-fluid">             
                                <form class="form-horizontal"  name="signup" method="post"> 
                         
                            <div class="control-group"> 
                                <label class="control-label" >Name : </label> 
                                <div class="controls"> 
								 <input class="input-large span3" name="aid" id="aid" style="display:none;" type="text"value="<?php echo $hid;?>" placeholder="Health Unit"/> 
                                <input class="input-large span3" name="fname" id="fname" type="text" placeholder="Firstname"value="<?php 
                                echo $fname; 
                                ?>"/> 
                                <input class="input-large span3" name="mname" id="mname" type="text" placeholder="Middlename"value="<?php 
                                echo $mname; 
                                ?>"/> 
                                <input class="input-large span3" name="lname" id="lname" type="text" placeholder="Lastname"value="<?php 
                                echo $lname; 
                                ?>"/> 
                                 
                            </div> 
                            </div> 
                                <div class="control-group"> 
                                <label class="control-label" >Mobile No. : </label> 
                                <div class="controls"> 
                                <input class="span5" name="mobile"  id="mobile" type="text" placeholder="Mobile No." value="<?php 
                                echo $mobiles; 
                                ?>"/> 
                                 
                            </div> 
                            </div> 
                            <div class="control-group"> 
                                <label class="control-label" >Email Address : </label> 
                                <div class="controls"> 
                                <input class="span5" name="email"  id="email" type="text" placeholder="Email Address"value="<?php 
                                echo $accemail; 
                                ?>"/> 
                                 
                            </div> 
                            </div> 
                         
                            <div class="control-group"> 
                                <label class="control-label" >Username : </label> 
                                <div class="controls"> 
                             
                                <input class="input-large span6" name="username" id="usern" type="text" placeholder="Username"value="<?php 
                                echo $usern; 
                                ?>"/> 
                                 
                            </div> 
                            </div> 
                            <div class="control-group"> 
                                <label class="control-label" >Password : </label> 
                                <div class="controls"><input class="input-large span7" name="password" id="passw" type="password" placeholder="Password"value="<?php 
                                echo $upass; 
                                ?>"/> 
                            </div> 
                            </div> 
                            <div class="control-group"> 
                                <label class="control-label" >Last Login : </label> 
                                <div class="controls"><input class="input-large span7" disabled=""name="password" id="password" type="text" placeholder="Last Login Time"value="<?php 
                                echo $al; 
                                ?>"/> 
                            </div> 
                            </div> 
                            <div class="control-group"> 
                                <label class="control-label" >last Logout : </label> 
                                <div class="controls"><input class="input-large span7" disabled=""name="password" id="password" type="text" placeholder="Last Logout Time"value="<?php 
                                echo $alo; 
                                ?>"/> 
                            </div> 
                            </div> 
                            <div class="control-group"> 
                                <label class="control-label" >Account Created : </label> 
                                <div class="controls"><input class="input-large span7" disabled=""name="password" id="password" type="text" placeholder="Date & Time Account Created"value="<?php 
                                echo $ac; 
                                ?>"/> 
                            </div> 
                            </div> 
                            <div class="control-group"> 
                                <label class="control-label" >Account Modified : </label> 
                                <div class="controls"><input class="input-large span7" disabled="" name="password" id="password" type="password" placeholder="Date & Time Account Modified"value="<?php 
                                echo $amo; 
                                ?>"/> 
                            </div> 
                            </div> 
                             
            <div style="text-align:center;"> 
                               <input type="button" name="try"onclick="updateu()" value='Save' class="btn btn-primary" style="margin-left:25%;" /> 
                        </div> 
                </form> 
                     
                              
                              
                          </div><!--/row -->
                      </div> 
    <div class="box-content"> 
                          <div class="page-header"> 
<div class="box-header"> 
                        <h2><i class="halflings-icon home"></i><span class="break"></span>Barangay Health Station Information</h2> 
                    </div> 
                                              
                          </div>  
<div id="edit_res2"></div> 							  
                          <div class="row-fluid">  
<form class="form-horizontal"  name="signups"method="post"> 
                                                   
                            <div class="control-group"> 
                                <label class="control-label" >Barangay Health Station: </label> 
                                <div class="controls">     <input class="input-large span3" name="id" id="id" style="display:none;" type="text"value="<?php echo $hid;?>" placeholder="Health Unit"/> 
                                <input class="span5" name="hu_name"  id="hu_name" type="text" placeholder="Assigned barangay health station" value="<?php 
                                echo $hu; 
                                ?>"/> 
                                 
                            </div> 
                            </div> 
                             
                            <div class="control-group"> 
                                <label class="control-label" >Address : </label> 
                                <div class="controls"> 
                                <textarea class="input-large span3" id="hu_address"name="hu_address" style="width: 450px; 
                            height: 100px; 
    border: 1px solid #cccccc; 
    padding: 5px; resize: none;" type="text"placeholder="Address"> <?php 
	if(isset($hadd)){
                                echo $hadd; }
                                ?></textarea> 
                                 
                            </div> 
                            </div> 
                            <div class="control-group"> 
                                <label class="control-label" >Contact No.: </label> 
                                <div class="controls"> 
                                <input class="span5" name="hu_mobile"  id="hu_mobile" type="text" placeholder="Contact No." value="<?php 
                               if(isset($hm)){  echo $hm; }
                                ?>"/> 
                                 
                            </div> 
                            </div> 
                            <div class="control-group"> 
                                <label class="control-label" >Email Address: </label> 
                                <div class="controls"> 
                                <input class="span5" name="hu_email"  id="hu_email" type="text" placeholder="Email Address" value="<?php 
                               if(isset($he)){  echo $he; }
                                ?>"/> 
                                 
                            </div> 
                            </div> <div class="control-group"> 
                                <label class="control-label" >Website : </label> 
                                <div class="controls"> 
                                <input class="span5" name="hu_web"  id="hu_web" type="text" placeholder="Website URL" value="<?php 
                              if(isset($webs)){  echo $webs; }
                                ?>"/> 
                                 
                            </div> 
                            </div>  
                              
                             <div style="text-align:center;"> 
                             
                             
                                 <input type="button" name="try"onclick="updatehu()" value='Save' class="btn btn-primary" style="margin-left:25%;" /> 
                        </div> 
                             </form> 
                          </div><!--/row -->                            
                              
                      </div> 