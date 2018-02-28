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
                <?php
                    foreach($banner->result() as $line)
                    {
                        echo '
                            <div class="jumbo"><img class="img-responsive banner1jumbo" src="'.base_url("assets/img/$line->image").'" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" data-aos-once="true"></div>
                        ';
                    }
                ?>
            </div>
        </div>
        <div class="row" id="row2">
            <div class="col-md-12" style="padding:0px;">
                <div class="content1">
                    <p data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" data-aos-once="true" style="margin:0px;">Letter box is a unique and uncommon gift concept where we candeliver messages through chocolate.You can customize your own design to make a special gift for your friends and family.We also have seasonal box that only last for one months
                        like Christmas and New Year edition, valentine edition, eid mubarak edition, to provide gift that matches the needs of the market. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="containerid1">
        <div class="row">
            <?php
                foreach($event_kiri->result() as $line)
                {
                    echo '
                        <div class="col-md-4 container2col"><img src="'.base_url("assets/img/$line->image").'" data-aos="fade" data-aos-duration="700" data-aos-delay="100" class="container2colitem2"></div>
                    ';
                }

                foreach($event_tengah->result() as $line)
                {
                    echo '
                        <div class="col-md-4 container2col"><img src="'.base_url("assets/img/$line->image").'" data-aos="fade" data-aos-duration="700" data-aos-delay="100" class="container2colitem2"></div>
                    ';
                }

                foreach($event_kanan->result() as $line)
                {
                    echo '
                        <div class="col-md-4 container2col"><img src="'.base_url("assets/img/$line->image").'" data-aos="fade" data-aos-duration="700" data-aos-delay="100" class="container2colitem2"></div>
                    ';
                }
            ?>
        </div>
    </div>
    <div class="features-boxed" style="background-color:rgba(251,208,86,0);">
        <div class="container-fluid featureboxcontainer">
            <div class="intro">
                <h2 class="text-center featureboxheading" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" data-aos-once="true">What can you do?</h2>
                <p class="text-center featureboxparagraph" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" data-aos-once="true">You can customize the product with Mix &amp; Match and simply place your order or contact us for further information.</p>
            </div>
            <div class="row features">
                <div class="col-md-4 col-sm-6 item">
                    <div data-aos="fade-right" data-aos-duration="700" data-aos-delay="100" class="box"><img src="<?php echo base_url(); ?>assets/img/icon.png" data-aos="fade-right" data-aos-duration="700" data-aos-delay="100" class="featureicon">
                        <h3 data-aos="fade-right" data-aos-duration="700" data-aos-delay="100" class="name" style="font-family:Quicksand, sans-serif;color:#fbd056;letter-spacing:1px;">SHOP </h3>
                        <p data-aos="fade-right" data-aos-duration="700" data-aos-delay="100" class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="product.html" data-aos="fade-right" data-aos-duration="700" data-aos-delay="100" class="learn-more">Shop Now</a></div>
                </div>
                <div class="col-md-4 col-sm-6 item">
                    <div class="box"><img src="<?php echo base_url(); ?>assets/img/step2.svg" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" class="featureicon">
                        <h3 data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" class="name" style="font-family:Quicksand, sans-serif;color:#fbd056;letter-spacing:2px;">MIX &amp; MATCH</h3>
                        <p data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="mix&amp;match.html" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" class="learn-more">Mix &amp; Match!</a></div>
                </div>
                <div class="col-md-4 col-sm-6 item">
                    <div class="box"><img src="<?php echo base_url(); ?>assets/img/IG2.png" data-aos="fade-left" data-aos-duration="700" data-aos-delay="100" class="featureicon">
                        <h3 data-aos="fade-left" data-aos-duration="700" data-aos-delay="100" class="name" style="font-family:Quicksand, sans-serif;color:#fbd056;letter-spacing:1px;">CONTACT US</h3>
                        <p data-aos="fade-left" data-aos-duration="700" data-aos-delay="100" class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="contact.html" data-aos="fade-left" data-aos-duration="700" data-aos-delay="100" class="learn-more">Contact Us</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="photo-gallery">
        <div class="container-fluid pupularproductcontainer">
            <div class="intro">
                <h2 class="text-center" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" data-aos-once="true" id="ppheading">POPULAR PRODUCTS</h2>
            </div>
            <div class="row photos">
                <?php
                    foreach($popular_product->result() as $line)
                    {
                        echo '
                            <div class="col-lg-3 col-md-4 col-sm-6 item"><a href="'.base_url("assets/img/$line->image").'" class="popularproductlink" data-lightbox="photos"><img class="img-responsive" src="'.base_url("assets/img/$line->image").'" data-aos="fade" data-aos-duration="700" data-aos-delay="100"></a></div>
                        ';
                    }
                ?>
            </div>
            <div class="buttongallery"><a href="<?php echo base_url("index.php/Controller/Product"); ?>" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" class="shopbt">SHOP </a></div>
        </div>
    </div>
    <div class="container-fluid" id="containerid1">
        <div class="row" id="row5">
            <div class="col-md-12" style="padding:0px;">
            <?php
                    foreach($upcoming_event->result() as $line)
                    {
                        echo '
                            <div class="jumbo"><img class="img-responsive banner1jumbo" src="'.base_url("assets/img/$line->image").'" data-aos="fade" data-aos-duration="700" data-aos-delay="100"></div>
                        ';
                    }
            ?>
                
            </div>
        </div>
    </div>
    
    <?php echo $footer; ?>

    <?php echo $script; ?>

</body>

</html>