<script type="text/javascript" language="javascript">  
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
                var edc = document.getElementById('ed_categ').value; 
                queryString = "?edn="+edn+"&edd="+edd+"&edc="+edc+"&eid="+eid; 
                request.open("GET", "pages/disease_update.php"+queryString, true); 
                request.send(null); 
            } 
        </script> 
<div class="row-fluid" id="edit_disease"> 
    <a href="index.php?page=e7067a8cdc396e4c168db56633c6ba01"><button class="btn btn-small" style="color:#2D89EF;background:transparent;border:1px solid #2D89EF;"><i class="icon-arrow-left"style="color:#2D89EF;"></i> Back to Disease information</button></a> 
        <form class="form-horizontal"> 
                        <p class="center"> 
                        <div id="edit_res"></div> 
                        <?php
                        $id = $_GET['d_e_id']; 
                         $querycheck= mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_diseases where disease_id='$id'"); 
 while($row = mysqli_fetch_assoc($querycheck)){ 
 $dn = $row['disease_name'];  
 $dd = $row['disease_description'];  
 $dco = $row['disease_id'];  
 $dca = $row['disease_categoryory'];} ?> 
						<div class="control-group">
								<label class="control-label">Index Code: </label>
								<div class="controls">
								<input class="input-large span3" style="margin-left:2%;"id="d_name"name="d_code"required="" autofocus="" id="d_name" type="text" value="<?php echo $dco;?>" /></div>
							  </div><div class="control-group">
								<label class="control-label">Disease Category: </label>
								<div class="controls">
								<select name="d_categ">
								<option value="<?php echo $dca;?>" selected=""> <?php echo $dca;?> </option>
								<option value="Intestinal infectious diseases"> Intestinal infectious diseases </option>
								<option value="Tuberculosis"> Tuberculosis </option>
								<option value="Certain zoonotic bacterial diseases"> Certain zoonotic bacterial diseases </option>
								<option value="Other bacterial diseases"> Other bacterial diseases </option>
								<option value="Infections with a predominantly sexual mode of transmission"> Infections with a predominantly sexual mode of transmission </option>
								<option value="Other diseases caused by chlamydiae"> Other diseases caused by chlamydiae </option>
								<option value="Rickettsioses"> Rickettsioses </option>
								<option value="Viral and prion infections of the central nervous system"> Viral and prion infections of the central nervous system </option>
								<option value="Arthropod-borne viral fevers and viral hemorrhagic fevers"> Arthropod-borne viral fevers and viral hemorrhagic fevers </option>
								<option value="Viral infections characterized by skin and mucous membrane lesions"> Viral infections characterized by skin and mucous membrane lesions </option>
								<option value="Other human herpesviruses"> Other human herpesviruses </option>
								<option value="Viral hepatitis"> Viral hepatitis </option>
								<option value="Human immunodeficiency virus [HIV] disease
								"> Human immunodeficiency virus [HIV] disease
								 </option>
								<option value="Other viral diseases"> Other viral diseases </option>
								<option value="Mycoses"> Mycoses </option>
								<option value="Protozoal diseases"> Protozoal diseases </option>
								<option value="Helminthiases"> Helminthiases </option>
								<option value="Pediculosis, acariasis and other infestations"> Pediculosis, acariasis and other infestations </option>
								<option value="Sequelae of infectious and parasitic diseases"> Sequelae of infectious and parasitic diseases </option>
								<option value="Bacterial and viral infectious agents
								"> Bacterial and viral infectious agents
								 </option>
<option value="Other infectious diseases"> Other infectious diseases </option>
								</select>
								</div>
							  </div>
                            <div class="control-group"> 
                                <input type="text" class="input-large span3" id="eid" value="<?php echo $id;?>"style="display:none;"/> 
                                <label class="control-label">Disease Name: </label> 
                                <div class="controls"> 
                                <input type="text" style="margin-left:2%;"    class="input-large span3" id="ed_name"name="d_name"required="" autofocus="" value="<?php echo $dn;?>" /> 
                                </div> 
                              </div>
							  <div class="control-group"> 
                                <label class="control-label">Disease Description: </label> 
                                <div class="controls"> 
                                <textarea class="input-large span3" id="ed_description"name="d_description"required="" autofocus="" style="width: 450px; 
                            height: 100px; 
    border: 1px solid #cccccc; 
    padding: 5px; margin-left:2%;resize: none;" type="text"><?php echo $dd;?></textarea> 
                                </div> 
                              </div>
                            <input type="button" name="try"onclick="update()" value='Save' class="btn btn-primary" style="margin-left:25%;" />
            </form> 
    </div> 