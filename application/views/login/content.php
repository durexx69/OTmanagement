<div id="wrapper">
    <div id="login" class="animate form">
        <section class="login_content">
            
            <?php echo validation_errors(); ?>
            
            <?php echo form_open('login/checklogin'); ?>
                <h1>Sign In</h1>
                <div>
                    <input type="text" name="us" class="form-control" placeholder="Username" required="" />
                </div>
                <div>
                    <input type="password" name="passwd" class="form-control" placeholder="Password" required="" />
                </div>
                <div>
                    <button type="submit" name="Login" value="submit" class="btn btn-default submit" >Log in</button>
                    <a class="reset_pass" href="#">Lost your password?</a>
                </div>
                <div class="clearfix"></div>
                <div class="separator">                           
                    <div class="clearfix"></div>
                    <br />
                    <div>
                        <h1><i class="fa fa-clock-o fa-3x" style="font-size: 25px;"></i> Overtime R M S </h1>                                
                    </div>
                </div>
            <?php echo form_close(); ?>
            <!-- form -->
        </section>
        <!-- content -->
    </div>
    
</div>