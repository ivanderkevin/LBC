<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LetterBoxGift</title>
        <?php echo $style; ?>

</head>

<body>
    
    <?php echo $navbar; ?>

    <div class="container-fluid" id="containerid1">
        <div class="row" id="row1">
            <div class="col-md-12" style="padding:0px;">
                <div class="content1">
                    <h1 data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" class="headercontact">CONTACT US</h1>
                    <p data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" style="margin:0px;font-family:Cabin, sans-serif;">Big or small, we’ve got a solution when you need it. Our advanced service and support tools provide step-by-step instructions without being put on hold or waiting in line. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-clean" style="background-color:rgba(241,247,252,0);">

        <form method="post" data-aos="fade-up" id="contactusForm" action="<?php echo base_url("index.php/Controller/sentContactUs"); ?>" data-aos-duration="700" data-aos-delay="100">
            <?php echo form_error('name', '<p style="color:red;">', '</p>'); ?><div class="form-group"><input class="form-control" type="text" name="name" id="name" placeholder="Name"></div>
            <?php echo form_error('email', '<p style="color:red;">', '</p>'); ?><div class="form-group"><input class="form-control" type="email" name="email" id="email" placeholder="Email"></div>
            <?php echo form_error('message', '<p style="color:red;">', '</p>'); ?><div class="form-group"><textarea class="form-control" rows="14" name="message" id="message" placeholder="Message"></textarea></div>
            <div class="form-group"><button class="btn btn-primary" type="submit" onclick="contactus()">SUBMIT </button></div>
        </form>
    </div>
    <div class="map-clean">
        <div class="container">
            <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" class="intro">
                <p class="text-center" style="color:#212121;">PHONE / WHATSAPP: </p>
                <p class="text-center" style="color:#fbd056;">+62 897 549 4932 </p>
                <p class="text-center" style="color:#212121;">LINE: </p>
                <p class="text-center" style="color:#fbd056;">@LETTERBOX (Don't forget to use '@') </p>
                <p class="text-center">ADDRESS: </p>
                <p class="text-center" style="color:#fbd056;">Jalan Krekot Bunder 4 NO. 5Jakarta Pusat 10710 </p>
            </div>
        </div><iframe allowfullscreen="" frameborder="0" width="100%" height="450" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCu0rI5Qg6Yq2JpwFcVWVD46zIvc_EOgWs&amp;q=jalan+krekot+bunder+4+no.+5%2C+jakarta+pusat&amp;zoom=15" data-aos="fade" data-aos-duration="700"
            data-aos-delay="100"></iframe></div>
            
    <?php echo $footer; ?>

    <script type="text/javascript">
      function contactus(){

        /*if(document.getElementById("message").value != null){
            var str = document.getElementById("message").value;
            var str2 = str.replace(/(?:\r\n|\r|\n)/g, '<br />');

          document.getElementById("message").value = str2;
        }*/

        document.getElementById('contactusForm').submit();
       }
    </script>

    <?php echo $script; ?>
</body>

</html>