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
        <div class="row">
            <div class="col-md-6">
                <h1 data-aos="fade" data-aos-duration="700" data-aos-delay="100">ABOUT US </h1>
                <p class="text-justify aboutparagraph" data-aos="fade" data-aos-duration="700" data-aos-delay="100">Letter box is a unique and uncommon gift concept where we can deliver messages through chocolate. Letter box was created on August 2014 and now have more than 100 design box that you can choose (alphabets, symbols and number) or you can
                    customize your own design to make a special gift for your friends and family. We also have seasonal box that only last for one months like Christmas and New Year edition, Valentine edition, Eid Mubarak edition, to provide gift that
                    matches the needs of the market. </p>
            </div>
            <div class="col-md-6"><img src="<?php echo base_url(); ?>assets/img/logo.png" data-aos="fade" data-aos-duration="700" data-aos-delay="100" class="aboutimg1" style="width:350px;"></div>
        </div>
        <div class="row" id="row2">
            <div class="col-md-12" style="padding:0px;">
                <div class="jumbo"><img class="img-responsive banner1jumbo" src="<?php echo base_url(); ?>assets/img/flavor.jpg" data-aos="fade" data-aos-duration="700" data-aos-delay="100"></div>
                <div class="divparagraph2">
                    <p data-aos="fade" data-aos-duration="700" data-aos-delay="100" style="margin:0px;">We are using a home made chocolate that have 7 flavors. All of our homemade chocolates were made with the right procedure which the process of melting the chocolate and tempering must be in the right temperature in order to make the
                        chocolate last longer and have a good taste. </p>
                </div>
            </div>
        </div>
        <div class="row" style="padding-bottom:86px;">
            <div class="col-md-6 lastcol" style="padding:0px;width:402px;"><img src="<?php echo base_url(); ?>assets/img/6.jpg" data-aos="fade" data-aos-duration="700" data-aos-delay="100" class="aboutimg2"></div>
            <div class="col-md-6" data-aos="fade" data-aos-duration="700" data-aos-delay="100">
                <h1 style="padding-bottom:14px;font-size:20px;">OUR CHOCOLATE FLAVORS&nbsp; </h1>
                <p class="text-justify aboutparagraph2">White Chocolate </p>
                <p class="text-justify aboutparagraph2">Dark Chocolate </p>
                <p class="text-justify aboutparagraph2">Milk Chocolate </p>
                <p class="text-justify aboutparagraph2">Caramel </p>
                <p class="text-justify aboutparagraph2">Cookies and Cream </p>
                <p class="text-justify aboutparagraph2">Green Tea Chocolate </p>
                <p class="text-justify aboutparagraph2">Milk Cookies </p>
            </div>
        </div>
    </div>

    <?php echo $footer; ?>

    <?php echo $script; ?>
    
</body>

</html>