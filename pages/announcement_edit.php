<script type="text/javascript" language="javascript"> 
        <!-- 
            function updateA() 
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
                 
                 
                var ai = document.getElementById('a_id').value; 
                var ab = document.getElementById('a_b').value; 
                var at = document.getElementById('a_t').value; 
                queryStrings = "?ai="+ai+"&ab="+ab+"&at="+at; 
                request.open("GET", "pages/announcement_update.php"+queryStrings, true); 
                request.send(null); 
            } 
             
             
             
             
             
             
             
             
     
        </script> 
<div class="row-fluid" id="edit_disease"> 
    <a href="index.php?page=feb4d2dfe1b2a637fdfd9e397cc4735f"><button class="btn btn-small"style="color:#2D89EF;background:transparent;border:1px solid #2D89EF;"><i class="icon-arrow-left"style="color:#2D89EF;"></i> Back to Announcements</button></a>    <form class="form-horizontal"  method="post"> 
        <form class="form-horizontal" > 
                        <p class="center"> 
                        <div id="edit_res"></div> 
                        <?php 
                         
                        $id = $_GET['a_e_id']; 
                         $querycheck= mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_announcements where a_id='$id'"); 
 while($row = mysqli_fetch_assoc($querycheck)){ 
  
 $aby = $row['a_by'];  
 $ai = $row['a_id'];  
 $ad = $row['a_date'];  
 $abody = $row['a_body'];  
 $at = $row['a_type'];  
 } 
  
                        ?> 
                            <div class="control-group"> 
                                <label class="control-label">By: </label> 
                                <div class="controls"> 
                                <label><?php echo $aby;?> <label/> 
                                <input type="text" style="display:none;" class="input-large span3" id="a_id"name="a_id"required="" autofocus="" s type="text" value="<?php echo $ai;?>"> 
                                </div> 
                              </div><div class="control-group"> 
                                <label class="control-label">Date: </label> 
                                <div class="controls"> 
                                <label><?php echo $ad;?> <label/> 
                                 
                                </div> 
                              </div> 
                            <div class="control-group"> 
                                <label class="control-label">Type:</label> 
                                <div class="controls"> 
                                  <select name="a_t"id="a_t"required="" autofocus=""> 
                                  <?php  
                                  if($at == "Information"){ 
                                  echo '<option value="Information">Information</option> 
                                    <option value="Alert">Alert</option> 
                                    <option value="Danger">Danger</option>'; 
                                  } 
                                    if($at == "Alert"){ 
                                  echo '<option value="Alert">Alert</option> 
                                    <option value="Information">Information</option>                                     
                                    <option value="Danger">Danger</option>'; 
                                  }if($at == "Danger"){ 
                                  echo '<option value="Danger">Danger</option><option value="Alert">Alert</option> 
                                    <option value="Information">Information</option>                                     
                                    '; 
                                  } 
                                   
                                  ?> 
                                     
                                  </select> 
                                </div> 
                              </div> 
                              
                               
                               
                              <div class="control-group"> 
                                <label class="control-label">Body:</label> 
                                <div class="controls"> 
                             
                                <textarea class="input-large span3" id="a_b"name="a_b"required="" autofocus="" style="width: 450px; 
                            height: 100px; 
    border: 1px solid #cccccc; 
    padding: 5px; margin-left:2%;resize: none;" type="text"><?php echo $abody;?></textarea> 
                                 
                                </div> 
                              </div> 
                               
                            <input type="button" name="try"onclick="updateA()" value='Save' class="btn btn-primary" style="margin-left:25%;" /> 
             
            </form> 
    </div> 