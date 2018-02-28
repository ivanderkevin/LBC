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

    <div class="features-boxed" style="background-color:rgba(251,208,86,0);">
        <div class="container-fluid featureboxcontainer">
            <div class="sizeimg"><img src="<?php echo base_url(); ?>assets/img/step1.svg" data-aos="fade" data-aos-duration="700" data-aos-delay="100" class="sizeimg"></div>
            <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" class="mmbtdiv"><a href="<?php echo base_url("index.php/Controller/MixMatch2x2"); ?>"><button class="button" type="button"><span>2x2</span></button></a></div>
            <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" class="mmbtdiv"><a href="<?php echo base_url("index.php/Controller/MixMatch3x3"); ?>"><button class="button" type="button" ><span>3x3</span></button></a></div>
            <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" class="mmbtdiv"><a href="<?php echo base_url("index.php/Controller/MixMatch3x4"); ?>"><button class="button" type="button" ><span>3x4</span></button></a></div>
        </div>
    </div>
    <?php echo $footer; ?>

    <?php echo $script; ?>
</body>

</html>