<?php 
$ann = md5('Announcement');
$se = md5('Send Report');
$d = md5('Disease');
$u = md5('Users');
$map = md5('View Map');
$hf = md5('Health Facilities');
$hos = md5('Hospital'); 
$hel = md5('Health Center'); 
$r = md5('Reports');
$t =  md5('Tabulated');
$g =  md5('Graphical');
$f =  md5('Feedback');
$a =  md5('About');
$setup =  md5('Setup');


?>
<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
					
						<li ><a id="ann"<?php if(isset($_SESSION['page'])){if($_SESSION['page'] == $ann) { echo "style='color:#fff; background-color:#2D89EF;'"; }  else{echo ""; }}else{echo "style='color:#fff; background-color:#2D89EF;'";} ?> href="index.php?page=<?php echo md5('Announcement'); ?>"><i class="icon-tasks"></i><span class="hidden-tablet"> &nbsp	Announcements</span></a></li>	
						<!--<li ><a <?php //if($_SESSION['page'] == $setup ) { echo "style='color:#fff; background-color:#2D89EF;'"; }  else{} ?> href="index.php?page=<?php //echo md5('Setup');?>"><i class="icon-wrench"></i><span class="hidden-tablet"> &nbsp	Setup</span></a></li>	-->
						<li ><a <?php if($_SESSION['page'] == $se ) { echo "style='color:#fff; background-color:#2D89EF;'"; }  else{} ?> href="index.php?page=<?php echo md5('Send Report');?>"><i class="icon-book"></i><span class="hidden-tablet"> &nbsp	Send Report</span></a></li>	
						<li><a <?php if($_SESSION['page'] == $d ) { echo "style='color:#fff; background-color:#2D89EF;'"; }  else{} ?> href="index.php?page=<?php echo md5('Disease'); ?>"><i class="icon-asterisk"></i><span class="hidden-tablet"> &nbsp	Diseases</span></a></li>
						<?php 
						if($_SESSION['acctype'] =="Admin" ) {
						?>
						<li><a <?php if($_SESSION['page'] == $u ) { echo "style='color:#fff; background-color:#2D89EF;'"; }  else{} ?> href="index.php?page=<?php echo md5('Users');?>"><i class="icon-user"></i><span class="hidden-tablet"> &nbsp	Users</span></a></li>
						
						<li><a <?php if($_SESSION['page'] == $map ) { echo "style='color:#fff; background-color:#2D89EF;'"; }  else{} ?> href="index.php?page=<?php echo md5('View Map');?>"><i class="icon-globe"></i><span class="hidden-tablet"> &nbsp	View Map</span></a></li><?php }?>
						<li><a  <?php if($_SESSION['page'] == $hel ) {echo "style='color:#fff; background-color:#2D89EF;'"; }  else{} ?> href="index.php?page=<?php echo md5('Health Center');?>"><i class="icon-home"></i> 	Barangay Health Stations</a></li><li>
						<?php 
						if($_SESSION['acctype'] =="Admin" ) {
						?>
							<a class="dropmenu" href="#"><i class="icon-folder-open"></i><span class="hidden-tablet"> &nbsp	Reports</span></a>
							<ul>
								<li><a class="submenu" <?php if($_SESSION['page'] == $t ) {echo "style='color:#fff; background-color:#2D89EF;'"; }  else{} ?> href="index.php?page=<?php echo md5('Tabulated');?>"><i class="icon-list-alt"></i><span class="hidden-tablet"> &nbsp	Tabulated</span></a></li>
								<li><a class="submenu" <?php if($_SESSION['page'] == $g ) { echo "style='color:#fff; background-color:#2D89EF;'"; }  else{} ?> href="index.php?page=<?php echo md5('Graphical');?>"><i class="icon-bar-chart"></i><span class="hidden-tablet"> &nbsp	Graphical</span></a></li>
							</ul>	
						</li><?php }?>
						<li><a <?php if($_SESSION['page'] == $f ) { echo "style='color:#fff; background-color:#2D89EF;'"; }  else{} ?>href="index.php?page=<?php echo md5('Feedback');?>"><i class="icon-star"></i><span class="hidden-tablet"> &nbsp	Feedback</span></a></li>
						<li><a <?php if($_SESSION['page'] == $a ) { echo "style='color:#fff; background-color:#2D89EF;'"; }  else{} ?>href="index.php?page=<?php echo md5('About');?>"><i class="icon-lock"></i><span class="hidden-tablet"> &nbsp	About</span></a></li>
					</ul>
				</div>
			</div>