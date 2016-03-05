<script type="text/javascript" language="javascript"> 
        <!-- 
            function update() 
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
                        var displayrecords = document.getElementById("edit_res"); 
                        displayrecords.innerHTML = request.responseText; 
                    } 
                } 
                 
                 
                var id = document.getElementById('id').value; 
                var hu = document.getElementById('hu').value; 
                var e = document.getElementById('email').value; 
                var m = document.getElementById('mobile').value; 
                 
                queryString = "?hu="+hu+"&e="+e+"&m="+m+"&id="+id; 
                request.open("GET", "pages/users_update.php"+queryString, true); 
                request.send(null); 
            } 
             
             
             
             
             
             
             
             
     
        </script> 
    <a href="index.php?page=f9aae5fda8d810a29f12d1e61b4ab25f"><button class="btn btn-small"style="color:#2D89EF;background:transparent;border:1px solid #2D89EF;"><i class="icon-arrow-left"style="color:#2D89EF;"></i> Back to Users</button></a> 
        <form class="form-horizontal" > 
                        <p class="center"> 
                        <div id="edit_res"></div> 
                        <?php 
                         
                        $id = $_GET['u_e_id']; 
                         $querycheck= mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_accounts where acc_id='$id'"); 
 while($row = mysqli_fetch_assoc($querycheck)){ 
 $dn = $row['acc_health_unit'];  
 $dd = $row['acc_email'];  
 $id = $row['acc_id'];  
 $ds = $row['acc_mobile'];}?> 
                            <div class="control-group"> 
                                <label class="control-label" >Barangay Health Station: </label> 
                                <div class="controls"> 
                                <input class="input-large span6" name="hu" id="hu" type="text"value="<?php echo $dn;?>" placeholder="Health Unit"/> 
                                <input class="input-large span6" name="id" id="id" style="display:none;" type="text"value="<?php echo $id;?>" placeholder="Health Unit"/> 
                            </div> 
                            </div> 
                                <div class="control-group"> 
                                <label class="control-label" >Email Address : </label> 
                                <div class="controls"> 
                                <input class="input-large span5" name="email"  id="email" type="text" value="<?php echo $dd;?>"placeholder="Email Address"/> 
                            </div> 
                            </div> 
                            <div class="control-group"> 
                                <label class="control-label" >Mobile No. : </label> 
                                <div class="controls"> 
                                <input class="input-large span3" name="mobile" id="mobile" type="text" value="<?php echo $ds;?>"placeholder="Mobile No."/> 
                            </div> 
                            </div> 
                            <!--<div class="control-group"> 
                                <label class="control-label" >Account Type : </label> 
                                <div class="controls"><select name="utype"id="utype"> 
                                    <option>--Select Account Type--</option> 
                                    <option value="Chairperson">Admin</option> 
                                    <option value="Dean">User</option> 
                                  </select> 
                            </div> 
                            </div> 
              --> 
                            <input type="button" name="try"onclick="update()" value='Save' class="btn btn-primary" style="margin-left:25%;" /> 
             </p>
            </form> 
   