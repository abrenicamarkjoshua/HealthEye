<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" style=" background-color:#ededed;*background-color:#fff;
 background-image:-moz-linear-gradient(top,#fff,#fff);
 background-image:-webkit-gradient(linear,0 0,0 100%,from(#fff),to(#fff))
 ;background-image:-webkit-linear-gradient(top,#fff,#fff);
 background-image:-o-linear-gradient(top,#fff,#fff);
 background-image:linear-gradient(to bottom,#fff,#fff);background-repeat:repeat-x;border-color:#fff #fff #fff;"data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				<a class="brand" href="index.php?page=<?php echo md5('Announcement'); ?>"><span><img src="img/index-icon.png" style="height:35px; padding:15px; float:left; margin-left:-40px; margin-bottom:-20px;margin-top:-20px;"/></span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						
						<!-- start: Message Dropdown -->
			
						<!-- end: Message Dropdown -->
						
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i><?php
								if(isset($_SESSION['accid'])){
								$accid = $_SESSION['accid'];
								$qq= mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_accounts where acc_id='$accid'"); 

 while($r = mysqli_fetch_assoc($qq)){
 if($r['acc_lname'] == "" ||$r['acc_fname'] == "" ||$r['acc_mname'] == "" ){
 echo $r['acc_email'];
 
 }else{
  echo $r['acc_lname'] . ", " . $r['acc_fname'] ." " .$r['acc_mname'] ;
 }}}
?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="index.php?page=<?php echo md5('Setup');?>"><i class="icon-user"></i> Profile</a></li>
								<li><a href="#"onClick="toggle_visibility('logout')"class="btn-setting"><i class="icon-off" ></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	