<div class="row-fluid" id="add_disease">
	<a href="index.php?page=e7067a8cdc396e4c168db56633c6ba01"><button class="btn btn-small"style="color:#2D89EF;background:transparent;border:1px solid #2D89EF;"><i class="icon-arrow-left"style="color:#2D89EF;"></i> Back to Disease information</button></a>	<form class="form-horizontal"  method="post">
						<?php include('disease_insert.php');?>
			<p class="center">
						<div class="control-group">
								<label class="control-label">Index Code: </label>
								<div class="controls">
								<input class="input-large span3" style="margin-left:2%;"id="d_name"name="d_code"required="" autofocus="" id="d_name" type="text" />
						</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Disease Category: </label>
								<div class="controls">
								<select name="d_categ">
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
								<option value="Other human herpesviruses">Other human herpesviruses</option>
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
								<label class="control-label">Disease Name: </label>
								<div class="controls">
								<input class="input-large span3" style="margin-left:2%;"id="d_name"name="d_name"required="" autofocus="" id="d_name" type="text" />
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Disease Description: </label>
								<div class="controls">
								<textarea class="input-large span3" id="d_description"name="d_description"required="" autofocus="" style="width: 450px;height: 100px;border: 1px solid #cccccc;padding: 5px; margin-left:2%;resize: none;" type="text"></textarea>
								</div>
							  </div>
							  <input type="submit" name="try" value='Save' class="btn btn-primary" style="margin-left:25%;" />
				</p>
			</form>
	</div>