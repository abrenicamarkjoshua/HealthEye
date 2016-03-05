
	<script type="text/javascript" language="javascript">
		<!--
			function save()
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
						var displayrecords = document.getElementById("res");
						displayrecords.innerHTML = request.responseText;
					}
				}
				
				
				
				var dn = document.getElementById('d_name').value;
				var dd = document.getElementById('d_description').value;
				var ds = document.getElementById('d_symptoms').value;
				var dc = document.getElementById('d_cure').value;
				
				queryString = "?dn="+dn+"&dd="+dd+"&ds="+ds+"&dc="+dc;
				request.open("GET", "pages/disease_insert.php"+queryString, true);
				request.send(null);
				
			}
			
			
			
			
			
			
			
			
	
		</script>
	<div class="row-fluid" id="add_disease">
	<button class="btn btn-small" onclick="toggle_visibility('close');"style="color:#2D89EF;background:transparent;border:1px solid #2D89EF;"><i class="icon-arrow-left"style="color:#2D89EF;"></i> Back to Disease information</button>
		<form class="form-horizontal"  >
						<div id='res'></div>
						<p class="center">
						
							<div class="control-group">

								<label class="control-label">Disease Name: </label>
								<div class="controls">
								<input class="input-large span3" style="margin-left:2%;"id="d_name"name="d_name"required="" autofocus="" id="d_name" type="text" />
								
								</div>
							  </div><div class="control-group">
								<label class="control-label">Disease Description: </label>
								<div class="controls">
							
								<textarea class="input-large span3" id="d_description"name="d_description"required="" autofocus="" style="width: 450px;
							height: 100px;
	border: 1px solid #cccccc;
	padding: 5px; margin-left:2%;resize: none;" type="text"></textarea>
								
								</div>
							  </div><div class="control-group">
							  <label class="control-label">Disease Symptoms: </label>
								<div class="controls">
								<textarea class="input-large span3" id="d_symptoms"name="d_symptoms" style="width: 450px;
							height: 100px;
	border: 1px solid #cccccc;
	padding: 5px; margin-left:2%;resize: none;" type="text"></textarea>
								</div>
							  </div><div class="control-group">
							  <label class="control-label">Disease Cure: </label>
								<div class="controls">
								<textarea class="input-large span3" id="d_cure"name="d_cure" style="width: 450px;
							height: 100px;
	border: 1px solid #cccccc;
	padding: 5px; margin-left:2%;resize: none;" type="text"></textarea>
								</div>
							  </div>
							  
							  <input type="button" name="try"onclick="save()" value='Save' class="btn btn-primary" style="margin-left:25%;" />
			
			</form>
	</div>