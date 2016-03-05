	<div class="modal hide fade" id="myModal" aria-hidden="true" style="display: none;">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
		   <div id='delete_a_h' style="display:none;"><h3>Confirmation</h3></div>
		   <div id='logout_h' style="display:none;"><h3>Confirmation</h3></div>
		   <div id='profile_h'style="display:none;"><h3>Account Information</h3></div>
		   <div id='delete_d_h'style="display:none;"><h3>Confirmation</h3></div>
		   <div id='delete_u_h'style="display:none;"><h3>Confirmation</h3></div>
		</div>
		<div class="modal-body">
			<div id='delete_a_b'style="display:none;"><p>Do you really want to delete this announcement?</p></div>
			<div id='logout_b'style="display:none;"><p>Do you really want to logout?</p></div>
			<div id='profile_b'style="display:none;"><p>Profile</p></div>
			<div id='delete_d_b'style="display:none;"><p>Do you really want to delete this disease record?</p></div>
			<div id='delete_u_b'style="display:none;"><p>Do you really want to delete this account record?</p></div>
		</div>
		<div class="modal-footer">
		<div id='logout_btn'>
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="acc_logout.php" class="btn btn-primary">Yes</a>
		</div>
		<div id='profile_btn'>
			<a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		<div id='delete_u_btn'>
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="pages/users_delete.php?<?php echo"d_u_id=$r[acc_id]". "&d_u_n=$r[acc_email]";?>" class="btn btn-primary">Yes</a>
		</div>
		<div id='delete_d_btn'>
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="pages/disease_delete.php?<?php echo"d_d_id=$r[disease_id]". "&d_d_n=$r[disease_name]";?>" class="btn btn-primary">Yes</a>
		</div>
		<div id='delete_a_btn'>
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="pages/announcement_delete.php?<?php echo"d_a_id=$r1[a_id]";?>" class="btn btn-primary">Yes</a>
		</div>
		</div>
	</div>	