<?php  

if(isset($_GET['a_a']) ||isset($_GET['a_e_id']) ){}else{
if($_SESSION['acctype'] =="Admin" ) {
?> 


<div style="text-align:center;" > 
<p>     
    <a href="index.php?page=feb4d2dfe1b2a637fdfd9e397cc4735f&a_a=1" id="add_announcement" ><button class="btn btn-success"><i class="icon-plus"></i>&nbsp&nbsp&nbspAdd Announcement</button></a> 
</p> 
</div>    <?php  
}
$query1= mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_announcements  ORDER BY a_date DESC"); 
$numrows1 = mysqli_num_rows($query1); 

//if($numrows1 == 0) { 
while($r1 = mysqli_fetch_assoc($query1)){ 
include("modals.php"); 
if($r1['a_type'] == "Information"){ 
echo " 
                    <div class='timeline'> 
                     
                        <div class='timeslot alt' style='height:auto;'> 
                             
                            <div class='task'> 
                                <span style='color:#67C2EF;'> "; 
                                 
                                if($_SESSION['acctype'] == "Admin"){ 
                                        echo"<a href='#' style='float:right;'class='btn-setting'onClick=". '"' . "toggle_visibility('delete_a')" . '"' . " id='delete_disease1' ><button class='btn btn-danger'><i class='icon-remove'></i></button></a>     
                                        <a href='index.php?page=feb4d2dfe1b2a637fdfd9e397cc4735f&a_e_id=$r1[a_id]'style='float:right;' id='add_disease1'><button class='btn btn-primary'><i class='icon-pencil'></i></button></a> "; 
                                        } 
                                    echo"<span class='type'><b>$r1[a_by]</b> </br>$r1[a_date]</span> 
                                    <p style='border-bottom:1px solid #67C2EF; width:auto;'></p> 
                                    <span class='details' style=' word-wrap: break-word;overflow:hidden;'> 
                                         <p style='text-indent:20px;'> $r1[a_body]</p> 
                                    </span> 
                                    </span> 
                                </span> 
                            </div> 
                            <div class='icon'> 
                                <i class='icon-info-sign' style='color:#67C2EF;'></i> 
                            </div> 
                                 
                        </div> 
                     
                    </br>    </br> 
                         
                        </div> 
                    "; 

}if($r1['a_type'] == "Danger"){ 
echo " 
                    <div class='timeline'> 
                     
                        <div class='timeslot alt' style='height:auto;'> 
                             
                            <div class='task' > 
                                <span style='border: 2px solid #FA603D;color:#FA603D; background: #FFEFEC;'> 
                                "; 
                                 
                                if($_SESSION['acctype'] == "Admin"){ 
                                        echo" 
                                <a href='#' style='float:right;'class='btn-setting'onClick=". '"' . "toggle_visibility('delete_a')" . '"' . " id='delete_disease1' ><button class='btn btn-danger'><i class='icon-remove'></i></button></a>     
                                <a href='index.php?page=feb4d2dfe1b2a637fdfd9e397cc4735f&a_e_id=$r1[a_id]'style='float:right;' id='add_disease1'><button class='btn btn-primary'><i class='icon-pencil'></i></button></a>    ";} 
                                    echo"<span class='type'><b>$r1[a_by]</b> </br>$r1[a_date]</span> 
                                    <p style='border-bottom:1px solid #FA603D; width:auto;'></p> 
                                    <span class='details' style=' word-wrap: break-word;overflow:hidden;'> 
                                         <p style='text-indent:20px;'> $r1[a_body]</p> 
                                    </span>     
                                     
                                    </span> 
                                </span> 
                            </div> 
                            <div class='icon'style='border: 2px solid #FA603D;color:#FA603D; background: #FFEFEC;'> 
                                <i class='icon-warning-sign' style='color:#FA603D; '></i> 
                            </div> 
                                 
                                 
                        </div> 
                     
                    </br>    </br> 
                         
                        </div> 
                    "; 

}if($r1['a_type'] == "Alert"){ 
echo " 
                    <div class='timeline'> 
                     
                        <div class='timeslot alt' style='height:auto;'> 
                             
                        <div class='task' > 
                                <span style='border: 2px solid #FABB3D;color:#FABB3D; background: #FFF7EB;'> 
                                "; 
                                 
                                if($_SESSION['acctype'] == "Admin"){ 
                                        echo" 
                                <a href='#' style='float:right;'class='btn-setting'onClick=". '"' . "toggle_visibility('delete_a')" . '"' . " id='delete_disease1' ><button class='btn btn-danger'><i class='icon-remove'></i></button></a> 
                                <a href='index.php?page=feb4d2dfe1b2a637fdfd9e397cc4735f&a_e_id=$r1[a_id]'style='float:right;' id='add_disease1'><button class='btn btn-primary'><i class='icon-pencil'></i></button></a>     
                                    ";} 
                                    echo"<span class='type'><b>$r1[a_by]</b> </br>$r1[a_date]</span> 
                                    <p style='border-bottom:1px solid #FABB3D; width:auto;'></p> 
                                    <span class='details' style=' word-wrap: break-word;overflow:hidden;'> 
                                         <p style='text-indent:20px;'> $r1[a_body]</p> 
                                    </span>     
                                    </span> 
                                </span> 
                                 
                            </div> 
                            <div class='icon'style='border: 2px solid #FABB3D;color:#FABB3D; background: #FFF7EB;'> 
                                <i class='icon-exclamation-sign' style='color:#FABB3D; '></i> 
                            </div> 
                                 
                                 
                        </div> 
                     
                    </br>    </br> 
                         
                        </div> 
                    "; 

} 


} 
/**}else{ 
date_default_timezone_set("Etc/GMT+8"); 
$log = date('m-d-Y H:i:s'); 
echo "<div class='timeline'> 
                     
                        <div class='timeslot alt' style='height:auto;'> 
                             
                            <div class='task'> 
                                <span style='color:#67C2EF;'> 
                                    <span class='type'>by: System, $log</span> 
                                    <span class='details' style=' word-wrap: break-word;overflow:hidden;'> 
                                         <p>No Announcements for the meantime ..</p> 
                                    </span>     
                                    </span> 
                                </span> 
                            </div> 
                            <div class='icon'> 
                                <i class='icon-info-sign' style='color:#67C2EF;'></i> 
                            </div> 
                                 
                        </div> 
                     
                    </br>    </br> 
                         
                        </div> 
                    "; 


}**/ 
} 
?> 
