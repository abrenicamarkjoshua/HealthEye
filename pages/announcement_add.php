<div class="row-fluid" id="add_disease"> 

    <a href="index.php?page=feb4d2dfe1b2a637fdfd9e397cc4735f"><button class="btn btn-small"style="color:#2D89EF;background:transparent;border:1px solid #2D89EF;"><i class="icon-arrow-left"style="color:#2D89EF;"></i> Back to Announcements</button></a>    <form class="form-horizontal"  method="post"> 
                        <?php include('announcement_insert.php');?> 
                        <p class="center"> 
                         
                        <div class="control-group"> 
                                <label class="control-label">Type:</label> 
                                <div class="controls"> 
                                  <select name="a_type"id="a_type"required="" autofocus=""> 
                                    <option value="Information">Information</option> 
                                    <option value="Alert">Alert</option> 
                                    <option value="Danger">Danger</option> 
                                  </select> 
                                </div> 
                              </div> 
                              
                               
                               
                              <div class="control-group"> 
                                <label class="control-label">Body:</label> 
                                <div class="controls"> 
                             
                                <textarea class="input-large span3" id="a_body"name="a_body"required="" autofocus="" style="width: 450px; 
                            height: 100px; 
    border: 1px solid #cccccc; 
    padding: 5px; margin-left:2%;resize: none;" type="text"></textarea> 
                                 
                                </div> 
                              </div> 
                               
                              <input type="submit" name="try" value='Save' class="btn btn-primary" style="margin-left:25%;" /> 
             
            </form> 
    </div> 