<div class="row-fluid"> 

    <a href="index.php?page=f9aae5fda8d810a29f12d1e61b4ab25f"><button class="btn btn-small"style="color:#2D89EF;background:transparent;border:1px solid #2D89EF;"><i class="icon-arrow-left"style="color:#2D89EF;"></i> Back to Users</button></a>    <form class="form-horizontal"  method="post"> 
                        <?php include('user_insert.php');?> 
                        <p class="center"> 
                         
                                        <div class="control-group"> 
                                <label class="control-label" >Health Unit: </label> 
                                <div class="controls"> 
                                <input class="input-large span3" name="hu"  type="text" placeholder="Health Unit"/> 
                            </div> 
                            </div> 
                                <div class="control-group"> 
                                <label class="control-label" >Email Address : </label> 
                                <div class="controls"> 
                                <input class="span5" name="email"  id="email" type="text" placeholder="Email Address"/> 
                            </div> 
                            </div> 
                            <div class="control-group"> 
                                <label class="control-label" >Mobile No. : </label> 
                                <div class="controls"> 
                                <input class="input-large span6" name="mobile" id="username" type="text" placeholder="Mobile No."/> 
                            </div> 
                            </div> 
                        <!--    <div class="control-group"> 
                                <label class="control-label" >Username : </label> 
                                <div class="controls"> 
                                <input class="input-large span6" name="username" id="username" type="text" placeholder="Username"/> 
                            </div> 
                            </div> 
                            <div class="control-group"> 
                                <label class="control-label" >Password : </label> 
                                <div class="controls"><input class="input-large span7" name="password" id="password" type="password" placeholder="Password"/> 
                            </div> 
                            </div> 
                            <div class="control-group"> 
                                <label class="control-label" >Account Type : </label> 
                                <div class="controls"><select name="utype"id="utype"> 
                                    <option>--Select Account Type--</option> 
                                    <option value="Admin">Admin</option> 
                                    <option value="User">User</option> 
                                  </select> 
                            </div> 
                            </div>--> 
                              <input type="submit" name="try" value='Save' class="btn btn-primary" style="margin-left:25%;" /> 
            </form> 
    </div> 