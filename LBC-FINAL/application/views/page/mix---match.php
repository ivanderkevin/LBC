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
            <div class="intro">
                <h2 class="text-center featureboxheading" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">HOW TO MIX &amp; MATCH </h2>
            </div>
            <div class="row featuresmm">
                <div class="col-md-4 col-sm-6 item">
                    <div class="box"><img src="<?php echo base_url(); ?>assets/img/step1.svg" data-aos="fade-right" data-aos-duration="700" data-aos-delay="100" class="featureicon">
                        <h3 data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" class="name" style="font-family:Quicksand, sans-serif;color:#fbd056;letter-spacing:1px;">STEP 1 </h3>
                        <p data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" class="description">Choose the box size, we provide 3 options for you to play Mix &amp; Match! </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 item">
                    <div class="box"><img src="<?php echo base_url(); ?>assets/img/step2.svg" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" class="featureicon">
                        <h3 data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" class="name" style="font-family:Quicksand, sans-serif;color:#fbd056;letter-spacing:2px;">STEP 2</h3>
                        <p data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" class="description">Drag and Drop! Create the message with the letters and accompany it with related icons. </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 item">
                    <div class="box"><img src="<?php echo base_url(); ?>assets/img/step3.svg" data-aos="fade-left" class="featureicon">
                        <h3 data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" class="name" style="font-family:Quicksand, sans-serif;color:#fbd056;letter-spacing:1px;">STEP 3</h3>
                        <p data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" class="description">After you happy with everything, you can place your order through our contact. </p>
                    </div>
                </div>
            </div>
            <div class="mmbtdiv"><a href="<?php echo base_url("index.php/Controller/boxoptions"); ?>" class="shopbt">START </a></div>
        </div>
    </div>
    <?php echo $footer; ?>

    <?php echo $script; ?>
</body>

</html>