
	<div class="row-fluid" id="delete_disease" style="display:none;">
	</div>
	<div class="row-fluid" id="info" <?php 
	
	if(isset($_GET['page'])){if($_GET['page'] == "e7067a8cdc396e4c168db56633c6ba01"&&isset($_GET['d_a'])==""&&isset($_GET['d_e_id'])==""&&isset($_GET['d_d_id'])=="") {echo"style='display:block;'";}}else{echo"style='display:none;'";}
	if(isset($_GET['d_a'])){}else{echo"style='display:none;'";}
if(isset($_GET['d_e_id'])){echo"style='display:block;'";}else{echo"style='display:none;'";}
if(isset($_GET['d_d_id'])){echo"style='display:block;'";}else{echo"style='display:none;'";}
	
	?>>

	<?php include('disease_info.php');?>
</div>
