<!DOCTYPE html>
<html lang="en">
<?php

include('conn.php');
session_start();
if(isset($_SESSION['username'])){

if(isset($_GET)) {
if(isset($_GET['page'])) {
$_SESSION['page'] = $_GET['page'];
}}
}else{echo "<script type='text/javascript'> 
window.location.href='login.php';
 </script>";
 $_SESSION['error'] = 'no account';echo"????";}

 ?>
<head>
    
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>HealthEye - <?php 
    if(isset($_SESSION['page'])){
    
$ann = md5('Announcement');
if($_SESSION['page'] == $ann){echo "Announcements";$title="Announcements";}
$se = md5('Send Report');
if($_SESSION['page'] == $se){echo"Send Report";$title="Send Report";}
$d = md5('Disease');
if($_SESSION['page'] == $d){echo"Diseases";$title="Diseases";}
$u = md5('Users');
if($_SESSION['page'] == $u){echo"Users";$title="Users";}
$hf = md5('Health Facilities');
if($_SESSION['page'] == $hf){echo"Health Facilities";$title="Health Facilities";}
$hos = md5('Hospital'); 
if($_SESSION['page'] == $hos){echo"Hospitals";$title="Hospitals";}
$hel = md5('Health Center'); 
if($_SESSION['page'] == $hel){echo"Barangay Health Stations";$title="Barangay Health Stations";}
$r = md5('Reports');
if($_SESSION['page'] == $r){echo"Reports";$title="Reports";}
$t =  md5('Tabulated');
if($_SESSION['page'] == $t){echo"Tabulated";$title="Tabulated";}
$g =  md5('Graphical');
if($_SESSION['page'] == $g){echo"Graphical";$title="Graphical";}
$f =  md5('Feedback');
if($_SESSION['page'] == $f){echo"Feedback";$title="Feedback";}
$a =  md5('About');
if($_SESSION['page'] == $a){echo"About";$title="About";}
$map = md5('View Map');if($_SESSION['page'] == $map){echo"View Map";$title="View Map";}
$setup = md5('Setup');if($_SESSION['page'] == $setup){echo"Profile";$title="Profile";}



} else{$_SESSION['page'] = md5('Announcement'); $title="Announcements"; echo"Announcements";} ?></title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->
    
    <!-- start: CSS -->
    <link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
    <link href='css/googlefonts.css' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->
    

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <link id="ie-style" href="css/ie.css" rel="stylesheet">
    <![endif]-->
    
    <!--[if IE 9]>
        <link id="ie9style" href="css/ie9.css" rel="stylesheet">
    <![endif]-->
        
    <!-- start: Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- end: Favicon -->

</head>
<body onload="load()">
    
        <!-- start: Header -->
    <?php include('pages/navbar.php');?>
    <!-- start: Header -->
    
        <div class="container-fluid-full">
        <div class="row-fluid">
                

            <!-- start: Main Menu -->
            <?php include('pages/sidebar-left.php');?>
            <!-- end: Main Menu -->
            
            <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                </div>
            </noscript>
            
            <!-- start: Content -->
            <div id="content"     class="span10" >
            <div class="priority high" style='background: #EDF6FB;'><span style='background: #2D89EF;'><h1 style='font-size:16px;'><?php echo $title; ?></h1></span></div>
<div class="task high"style='border-left:2px solid #2D89EF; padding:1%;'>
                    
    <?php 
    if(isset($_SESSION['page'])){
$ann = md5('Announcement');
if(isset($_GET['a_a'])){include('pages/announcement_add.php');}
if(isset($_GET['a_e_id'])){include('pages/announcement_edit.php');}
if(isset($_GET['a_d_id'])){include('pages/announcement_delete.php');}
if(isset($_GET['d_a'])){include('pages/disease_add.php');}
if(isset($_GET['d_e_id'])){include('pages/disease_edit.php');}
if(isset($_GET['d_d_id'])){include('pages/disease_delete.php');}
if(isset($_GET['u_a'])){include('pages/user_add.php');}
if(isset($_GET['u_e_id'])){include('pages/users_edit.php');}
if(isset($_GET['u_d_id'])){include('pages/user_delete.php');}
if($_SESSION['page'] == $ann){include('pages/announcement.php');}
$setup = md5('Setup');
if($_SESSION['page'] == $setup){include('pages/setup.php');}
$se = md5('Send Report');
if($_SESSION['page'] == $se){include('pages/sendreport.php');}
$d = md5('Disease');
if($_SESSION['page'] == $d){include('pages/disease.php');}
$u = md5('Users');
if($_SESSION['page'] == $u){include('pages/users.php');}
$hos = md5('Hospital'); 
if($_SESSION['page'] == $hos){include('pages/hospital.php');}
$hel = md5('Health Center'); 
if($_SESSION['page'] == $hel){include('pages/healthcenter.php');}
$t =  md5('Tabulated');
if($_SESSION['page'] == $t){include('pages/tabulated.php');}
$g =  md5('Graphical');
if($_SESSION['page'] == $g){include('pages/graphical.php');}
$f =  md5('Feedback');
if($_SESSION['page'] == $f){include('pages/feedback.php');}
$a =  md5('About');
if($_SESSION['page'] == $a){include('pages/about.php');}
$a =  md5('View Map');
if($_SESSION['page'] == $a){include('pages/hu_map.php');}
} else{

include('pages/announcement.php');
}
    
    
    
    ?>
            

    </div></div><!--/.fluid-container-->
    
            <!-- end: Content -->
        </div><!--/#content.span10-->
        </div><!--/fluid-row-->
    
        <?php 
        include('pages/modals.php');
        
    include('pages/footer.php');

    ?>
    <div class="clearfix"></div>
    
    

    

<script type="text/javascript">
 function toggle_visibility(id) {
    
          if(id == "add_disease") {
    
          document.getElementById('delete_disease').style.display = 'none';
          document.getElementById('add_disease').style.display = 'block';
          document.getElementById('edit_disease').style.display = 'none';
        document.getElementById('info').style.display = 'none';
          }
          if(id == "delete_disease")
          {
           document.getElementById('add_disease').style.display = 'none';
           document.getElementById('edit_disease').style.display = 'none';
          document.getElementById('delete_disease').style.display = 'block';
       document.getElementById('info').style.display = 'none';
       
          }
          
          if(id == "edit_disease")
          {
           document.getElementById('add_disease').style.display = 'none';
           document.getElementById('edit_disease').style.display = 'block';
          document.getElementById('delete_disease').style.display = 'none';
       document.getElementById('info').style.display = 'none';
       
       
          }
    
       if(id == "close") {
    
          document.getElementById('delete_disease').style.display = 'none';
          document.getElementById('add_disease').style.display = 'none';
          document.getElementById('edit_disease').style.display = 'none';
         document.getElementById('info').style.display = 'block';
       
          }
          if(id == "logout"){
         document.getElementById('profile_h').style.display = 'none';
         document.getElementById('profile_b').style.display = 'none';
         document.getElementById('profile_btn').style.display = 'none';
         
          document.getElementById('delete_a_h').style.display = 'none';
          document.getElementById('delete_a_b').style.display = 'none';
          document.getElementById('delete_a_btn').style.display = 'none';
          
          document.getElementById('delete_d_h').style.display = 'none';
          document.getElementById('delete_d_b').style.display = 'none';
          document.getElementById('delete_d_btn').style.display = 'none';
          
          document.getElementById('delete_u_h').style.display = 'none';
          document.getElementById('delete_u_b').style.display = 'none';
          document.getElementById('delete_u_btn').style.display = 'none';
          
         document.getElementById('logout_h').style.display = 'block';
         document.getElementById('logout_b').style.display = 'block';
         document.getElementById('logout_btn').style.display = 'block';
          
          }if(id == "delete_d"){
         document.getElementById('profile_h').style.display = 'none';
         document.getElementById('profile_b').style.display = 'none';
         document.getElementById('profile_btn').style.display = 'none';
         
          document.getElementById('delete_d_h').style.display = 'block';
          document.getElementById('delete_d_b').style.display = 'block';
          document.getElementById('delete_d_btn').style.display = 'block';
          
          document.getElementById('delete_u_h').style.display = 'none';
          document.getElementById('delete_u_b').style.display = 'none';
          document.getElementById('delete_u_btn').style.display = 'none';
          
          document.getElementById('delete_a_h').style.display = 'none';
          document.getElementById('delete_a_b').style.display = 'none';
          document.getElementById('delete_a_btn').style.display = 'none';
          
         document.getElementById('logout_h').style.display = 'none';
         document.getElementById('logout_b').style.display = 'none';
         document.getElementById('logout_btn').style.display = 'none';
          
          }if(id == "delete_a"){
         document.getElementById('profile_h').style.display = 'none';
         document.getElementById('profile_b').style.display = 'none';
         document.getElementById('profile_btn').style.display = 'none';
         
         document.getElementById('delete_d_h').style.display = 'none';
          document.getElementById('delete_d_b').style.display = 'none';
          document.getElementById('delete_d_btn').style.display = 'none';
         
          document.getElementById('delete_a_h').style.display = 'block';
          document.getElementById('delete_a_b').style.display = 'block';
          document.getElementById('delete_a_btn').style.display = 'block';
          
          document.getElementById('delete_u_h').style.display = 'none';
          document.getElementById('delete_u_b').style.display = 'none';
          document.getElementById('delete_u_btn').style.display = 'none';
          
         document.getElementById('logout_h').style.display = 'none';
         document.getElementById('logout_b').style.display = 'none';
         document.getElementById('logout_btn').style.display = 'none';
          
          }if(id == "delete_u"){
         document.getElementById('profile_h').style.display = 'none';
         document.getElementById('profile_b').style.display = 'none';
         document.getElementById('profile_btn').style.display = 'none';
         
         document.getElementById('delete_d_h').style.display = 'none';
          document.getElementById('delete_d_b').style.display = 'none';
          document.getElementById('delete_d_btn').style.display = 'none';
         
          document.getElementById('delete_a_h').style.display = 'none';
          document.getElementById('delete_a_b').style.display = 'none';
          document.getElementById('delete_a_btn').style.display = 'none';
          
          document.getElementById('delete_u_h').style.display = 'block';
          document.getElementById('delete_u_b').style.display = 'block';
          document.getElementById('delete_u_btn').style.display = 'block';
          
         document.getElementById('logout_h').style.display = 'none';
         document.getElementById('logout_b').style.display = 'none';
         document.getElementById('logout_btn').style.display = 'none';
          
          }
          if(id == "accounts"){
         document.getElementById('profile_h').style.display = 'block';
         document.getElementById('profile_b').style.display = 'block';
         document.getElementById('profile_btn').style.display = 'block';
         
          document.getElementById('delete_d_h').style.display = 'none';
          document.getElementById('delete_d_b').style.display = 'none';
          document.getElementById('delete_d_btn').style.display = 'none';
          
         document.getElementById('logout_h').style.display = 'none';
         document.getElementById('logout_b').style.display = 'none';
         document.getElementById('logout_btn').style.display = 'none';
          
          }
    }
</script>
    
        <!-- start: JavaScript-->

        <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/jquery-migrate-1.0.0.min.js"></script>
    
        <script src="js/jquery-ui-1.10.0.custom.min.js"></script>
    
        <script src="js/jquery.ui.touch-punch.js"></script>
    
        <script src="js/modernizr.js"></script>
    
        <script src="js/bootstrap.min.js"></script>
    
        <script src="js/jquery.cookie.js"></script>
    
        <script src='js/fullcalendar.min.js'></script>
    
        <script src='js/jquery.dataTables.min.js'></script>

        <script src="js/excanvas.js"></script>
    <script src="js/jquery.flot.js"></script>
    <script src="js/jquery.flot.pie.js"></script>
    <script src="js/jquery.flot.stack.js"></script>
    <script src="js/jquery.flot.resize.min.js"></script>
    
        <script src="js/jquery.chosen.min.js"></script>
    
        <script src="js/jquery.uniform.min.js"></script>
        
        <script src="js/jquery.cleditor.min.js"></script>
    
        <script src="js/jquery.noty.js"></script>
    
        <script src="js/jquery.elfinder.min.js"></script>
    
        <script src="js/jquery.raty.min.js"></script>
    
        <script src="js/jquery.iphone.toggle.js"></script>
    
        <script src="js/jquery.uploadify-3.1.min.js"></script>
    
        <script src="js/jquery.gritter.min.js"></script>
    
        <script src="js/jquery.imagesloaded.js"></script>
    
        <script src="js/jquery.masonry.min.js"></script>
    
        <script src="js/jquery.knob.modified.js"></script>
    
        <script src="js/jquery.sparkline.min.js"></script>
    
        <script src="js/counter.js"></script>
    
        <script src="js/retina.js"></script>

        <script src="js/custom.js"></script>
        
        
        

    <!-- end: JavaScript-->

</body>
</html>