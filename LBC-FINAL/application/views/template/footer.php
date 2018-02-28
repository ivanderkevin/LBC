<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<script type="text/javascript">
      function newsletter(){
        document.getElementById('newsletterForm').submit();
       }
</script>

<div class="footer-dark" style="background-color:#fbd056;">
        <footer>
            <div class="container">
                <div class="row" style="color:#212121;">
                    <div class="col-md-6 col-md-push-6 item text">
                        <h3 class="rightheadingfooter" style="font-size:18px;">BE FIRST </h3>
                        <p class="aboutfooter">Want exclusive access and first access to new products? Sign-up to join our Notables List below. </p>

                        <form class="form-inline subscribeform" method="post" id="newsletterForm" action="<?php echo base_url("index.php/Controller/Subscribe/$location"); ?>"><?php echo form_error('emailnewsletter', '<p style="color:red;">', '</p>'); ?>
                            <input class="form-control subform" name="emailnewsletter" id="emailnewsletter" placeholder="Your Email">
                            <input class="btn btn-primary subscribebt" type="button" onclick="newsletter()" value="SUBSCRIBE">
                        </form>

                    </div>
                    <div class="col-md-3 col-md-pull-6 col-sm-4 item">
                        <h3 class="aboutheadingfooter" style="font-size:18px;">ABOUT LETTER BOX&nbsp; </h3>
                        <p class="aboutfooter">Unique and uncommon gift, cute design, and meaningfull. made in Jakarta. Our chocolate can deliver message to your friend or family. </p>
                        <h3 class="rightheadingfooter" style="font-size:18px;padding-top:17px;">CONTACT US: </h3>
                        <p class="aboutfooter">P : 08975494932</p>
                        <p class="aboutfooter">L : @letterbox&nbsp; </p>
                        <p class="aboutfooter">E : janicelie@hotmail.com </p>
                    </div>
                    <div class="col-md-12 col-sm-4 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="https://www.instagram.com/the_letterbox/"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">LetterBoxChocolate © 2017</p><img src="<?php echo base_url(); ?>assets/img/footerrubah.png" class="footerimg"></div>
                </div>
            </div>
        </footer>
    </div>