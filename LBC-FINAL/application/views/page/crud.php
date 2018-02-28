<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Letter Box | Admin <?php echo $tag; ?></title>
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

    <?php foreach($crud ['js_files'] as $file): ?>
          <script src="<?php echo $file; ?>"></script>
        <?php endforeach; ?>

    <?php foreach($crud['css_files'] as $file): ?>
      <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
     <?php endforeach; ?>

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

      <div class="header">
            <div class="container">
                <div class="header-top">
                    <div class="logo">
                       
                    </div>
                    <div class="login-bars">
                        
                        <div class="cart box_1">
                            
                            <div class="clearfix"> </div>
                        </div>  
                    </div>
        <div class="clearfix"></div>
                </div>
                <!---menu-----bar--->
                <div class="header-botom">
                    <div class="content white">
                    <nav class="navbar navbar-default nav-menu" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="clearfix"></div>
                        <!--/.navbar-header-->

                        <div class="collapse navbar-collapse collapse-pdng" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav nav-font">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="<?php echo base_url("index.php/Controller/adminBanner"); ?>">Banner</a></li>
                                      <li><a href="<?php echo base_url("index.php/Controller/adminEventTengah"); ?>">Event Tengah</a></li>
                                      <li><a href="<?php echo base_url("index.php/Controller/adminEventKanan"); ?>">Event Kanan</a></li>
                                      <li><a href="<?php echo base_url("index.php/Controller/adminEventKiri"); ?>">Event Kiri</a></li>
                                      <li><a href="<?php echo base_url("index.php/Controller/adminPopularProduct"); ?>">Popular Product</a></li>
                                      <li><a href="<?php echo base_url("index.php/Controller/adminUpcomingEvent"); ?>">Upcoming Event</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product Gift<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="<?php echo base_url("index.php/Controller/adminProductGift"); ?>">Product Gift Image</a></li>
                                      <li><a href="<?php echo base_url("index.php/Controller/adminProductGiftPrice"); ?>">Product Gift Price</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product Wedding<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="<?php echo base_url("index.php/Controller/adminProductWedding"); ?>">Product Wedding Image</a></li>
                                      <li><a href="<?php echo base_url("index.php/Controller/adminProductWeddingDescription"); ?>">Product Wedding Description</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product Company<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="<?php echo base_url("index.php/Controller/adminProductCompany"); ?>">Product Company Image</a></li>
                                      <li><a href="<?php echo base_url("index.php/Controller/adminProductCompanyDescription"); ?>">Product Company Description</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mix Match<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="<?php echo base_url("index.php/Controller/adminMixMatchLetter"); ?>">Mix Match Letter</a></li>
                                      <li><a href="<?php echo base_url("index.php/Controller/adminMixMatchIcon"); ?>">Mix Match Icon</a></li>
                                      <li><a href="<?php echo base_url("index.php/Controller/adminMixMatchEvent"); ?>">Mix Match Event</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url("index.php/Controller/adminNewsletter"); ?>">Subscribers</a></li>
                                <li><a href="<?php echo base_url("index.php/Controller/adminUsers"); ?>">Admin Username & Password</a></li>
                                <li><a href="<?php echo base_url("index.php/Controller/logout"); ?>">Log Out</a></li>
                                <div class="clearfix"></div>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <!--/.navbar-collapse-->
                        <div class="clearfix"></div>
                    </nav>
                    <!--/.navbar-->   
                        <div class="clearfix"></div>
                    </div>
                    <!--/.content--->
                </div>
                    <!--header-bottom-->
            </div>
        </div>

        </div>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url("index.php/Controller"); ?>">BACK TO HOME</a></li>
                    <li class="active"><?php echo strtoupper($tag); ?></li>
                </ol>
            </div>
        </div>

            <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <?php echo $crud['output']; ?>
                  </div>
                  <?php
                  if ($tag == 'Newsletter')
                        {
                            echo '
                                <div class="clearfix"></div>
                                <br>
                                <h3>Send Newsletter</h3>
                                <div class="contact-content">
                                    '.form_open('Controller/sentNewsletter').'
                                        <input type="text" name="title" class="textbox" placeholder="Email Title" required><br>
                                            <div class="clear"> </div>
                                        <div>
                                            <textarea name="message" placeholder="Your Message" required></textarea><br>
                                        </div>  
                                       <div class="submit"> 
                                            <input class="btn btn-default cont-btn" onclick="return confirm(\'Are you sure you want to sent this email?\');" type="submit" value="SEND " />
                                      </div>
                                      </form>
                                </div>
                            ';
                        }  
                      ?>

                </div>
                    <div class="clearfix"></div>
                </div>
            </div>

    </body>
</html>