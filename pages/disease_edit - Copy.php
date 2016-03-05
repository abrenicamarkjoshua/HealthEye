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
                 
                 
                var eid = document.getElementById('eid').value; 
                var edn = document.getElementById('ed_name').value; 
                var edd = document.getElementById('ed_description').value; 
                var eds = document.getElementById('ed_symptoms').value; 
                var edc = document.getElementById('ed_cure').value; 
                 
                queryString = "?edn="+edn+"&edd="+edd+"&eds="+eds+"&edc="+edc+"&eid="+eid; 
                request.open("GET", "pages/disease_update.php"+queryString, true); 
                request.send(null); 
            } 
             
             
             
             
             
             
             
             
     
        </script> 
<div class="row-fluid" id="edit_disease"> 
    <button class="btn btn-small" onclick="toggle_visibility('close');"style="color:#2D89EF;background:transparent;border:1px solid #2D89EF;"><i class="icon-arrow-left"style="color:#2D89EF;"></i> Back to Disease information</button> 
        <form class="form-horizontal" > 
                        <p class="center"> 
                        <div id="edit_res"></div> 
                        <?php 
                         
                        $id = $_GET['d_e_id']; 
                         $querycheck= mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_diseases where disease_id='$id'"); 
 while($row = mysqli_fetch_assoc($querycheck)){ 
  
 $dn = $row['disease_name'];  
 $dd = $row['disease_description'];  
 $ds = $row['disease_symptoms'];  
 $dc = $row['disease_cure'];  
 } 
  
                        ?> 
                            <div class="control-group"> 

                                <input type="text" class="input-large span3" id="eid" value="<?php echo $id;?>"style="display:none;"/> 
                                <label class="control-label">Disease Name: </label> 
                                <div class="controls"> 
                                <input type="text" class="input-large span3" id="ed_name"name="d_name"required="" autofocus="" value="<?php echo $dn;?>" /> 
                                 
                                </div> 
                              </div><div class="control-group"> 
                                <label class="control-label">Disease Description: </label> 
                                <div class="controls"> 
                             
                                <textarea class="input-large span3" id="ed_description"name="d_description"required="" autofocus="" style="width: 450px; 
                            height: 100px; 
    border: 1px solid #cccccc; 
    padding: 5px; margin-left:2%;resize: none;" type="text"><?php echo $dd;?></textarea> 
                                 
                                </div> 
                              </div><div class="control-group"> 
                              <label class="control-label">Disease Symptoms: </label> 
                                <div class="controls"> 
                                <textarea class="input-large span3" id="ed_symptoms" name="d_symptoms" style="width: 450px; 
                            height: 100px; 
    border: 1px solid #cccccc; 
    padding: 5px; margin-left:2%;resize: none;" type="text"><?php echo $ds;?></textarea> 
                                </div> 
                              </div><div class="control-group"> 
                              <label class="control-label">Disease Cure: </label> 
                                <div class="controls"> 
                                <textarea class="input-large span3" name="d_cure"id="ed_cure" style="width: 450px; 
                            height: 100px; 
    border: 1px solid #cccccc; 
    padding: 5px; margin-left:2%;resize: none;" type="text"><?php echo $dc;?></textarea> 
                                </div> 
                              </div> 
                               
                            <input type="button" name="try"onclick="update()" value='Save' class="btn btn-primary" style="margin-left:25%;" /> 
             
            </form> 
    </div>