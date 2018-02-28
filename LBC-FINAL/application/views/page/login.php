<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Letter Box | Admin Login</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>images/product-master-favicon.ico?crc=3970908141"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<meta charset utf="8">

        <!--fonts-->
    <link href='<?php echo base_url(); ?>css/fonts.css' rel='stylesheet' type='text/css'>
    
    <!--fonts-->
    <!--bootstrap-->
       <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--coustom css-->
      <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css"/>

    <!-- FlexSlider -->
            <link rel="stylesheet" href="<?php echo base_url(); ?>css/flexslider.css" type="text/css" media="screen" />

        <!--default-js-->
      <script src="<?php echo base_url(); ?>scripts/jquery-2.1.4.min.js"></script>
    <!--bootstrap-js-->
      <script src="<?php echo base_url(); ?>scripts/bootstrap.min.js"></script>
    <!--script-->

    <!-- FlexSlider -->
            <script src="<?php echo base_url(); ?>scripts/imagezoom.js"></script>
              <script defer src="<?php echo base_url(); ?>scripts/jquery.flexslider.js"></script>

            <script>
            // Can also be used with $(document).ready()
            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
              });
            });
            </script>
        <!-- //FlexSlider-->
    </head>
    <body>
        </div>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url("index.php/Controller"); ?>">HOME</a></li>
                    <li class="active">LOGIN</li>
                </ol>
            </div>
        </div>
        <!--signup-->
        <!-- login-page -->
        <div class="login">
            <div class="container">
                <div class="login-grids">
                    <div class="col-md-6 log">
                             <h3>Login</h3>
                             <div class="strip"></div>
                             <p>Welcome, please enter the following to continue.</p>
                             <?php
                                if(form_error('username') != null)
                                {
                                  echo form_error('username').'<br>'; 
                                }
                                else if(form_error('password') != null)
                                {
                                  echo form_error('password').'<br>'; 
                                }
                                else if(form_error('username') != null && form_error('password') != null)
                                {
                                  echo form_error('username').'<br>'; 
                                }
                             ?>
                             <?php echo form_open('Controller/admin'); ?>
                                 <h5>Username:</h5>	
                                 <input type="text" id="username" placeholder="Username" name="username" maxlength="50">
                                 <h5>Password:</h5>
                                 <input type="password" id="password" placeholder="Password" name="password" maxlength="50"><br>					
                                 <input type="submit" value="Login" />
                             </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
<!-- //login-page -->
        <!--signup-->

    </body>
</html>