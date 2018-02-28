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
            <div class="col-md-12 tabcol">
                <div>
                    <ul class="nav nav-tabs tabcontainer">
                        <li class="active tabitem"><a href="#tab-1" class="tablink" role="tab" data-toggle="tab">GIFT </a></li>
                        <li class="tabitem"><a href="#tab-2" class="tablink" role="tab" data-toggle="tab">WEDDING </a></li>
                        <li class="tabitem"><a href="#tab-3" class="tablink" role="tab" data-toggle="tab">COMPANY </a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="tab-1" style="background-color:rgba(255,0,0,0);">
                            <?php
                                    $categories = "";

                                    foreach($product_gift->result() as $line)
                                    {
                                        if(strcmp($categories,$line->categories) != 0)
                                        {
                                            if($categories != "") echo '</div>';
                                          $categories = $line->categories;
                                          echo '<div class="row">';
                                          echo '<div class="col-md-12">';
                                          echo '<h2 class="text-center tabheading">For '.$categories.' </h2></div>';
                                        }

                                        echo '
                                            <div class="col-md-4"><img class="img-responsive productimg" src="'.base_url("assets/img/$line->image").'"></div>
                                        ';
                                    }

                                    echo '</div>';
                              ?>
                            
                            <div class="row">
                            <?php
                                    foreach($product_gift_price->result() as $line)
                                    {
                                        echo '<div class="col-md-4">
                                                <div class="tab1div">
                                                    <p>'.$line->type.'</p>
                                                    <p>'.$line->gram.'</p>
                                                    <p>'.$line->size.'</p>
                                                    <p>'.$line->quantity.'</p>
                                                    <p>'.$line->description .'</p>
                                                    <p>'.$line->bonus.'</p>
                                                <p style="background-color:#fbd056;">'.$line->price.'</p>
                                                </div>
                                            </div>
                                        ';
                                    }
                              ?>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="tabdivbt"></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tabdivbt"><a href="<?php echo base_url("index.php/Controller/MixMatch"); ?>" class="shopbt">SHOP </a></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tabdivbt"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-2" style="background-color:rgba(255,0,0,0);">
                            <div class="row">
                                <?php
                                    foreach($product_wedding_description->result() as $line2)
                                    {
                                      echo '
                                          <div class="col-md-12">
                                            <h2 class="text-center tabheading">'.$line2->description.'</h2></div>           
                                      ';
                                    
                                      foreach($product_wedding->result() as $line)
                                      {
                                          echo '       
                                              <div class="col-md-4"><img class="img-responsive productimg" src="'.base_url("assets/img/$line->image").'"></div>  
                                          ';
                                      }

                                      echo ' <div class="col-md-12">
                                          <h2 class="text-center tabheading">For price or info you can contact us to </h2>
                                    <h2 class="text-center tabheading">'.$line2->contact.'</h2></div>          
                                      ';
                                    }
                              ?>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-3" style="background-color:rgba(255,0,0,0);">
                            <div class="row">
                                <?php
                                    foreach($product_company_description->result() as $line2)
                                    {
                                      echo '
                                          <div class="col-md-12">
                                            <h2 class="text-center tabheading">'.$line2->description.'</h2></div>           
                                      ';
                                    
                                      foreach($product_company->result() as $line)
                                      {
                                          echo '       
                                              <div class="col-md-4"><img class="img-responsive productimg" src="'.base_url("assets/img/$line->image").'"></div>  
                                          ';
                                      }

                                      echo ' <div class="col-md-12">
                                          <h2 class="text-center tabheading">For price or info you can contact us to </h2>
                                    <h2 class="text-center tabheading">'.$line2->contact.'</h2></div>          
                                      ';
                                    }
                              ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $footer; ?>

    <?php echo $script; ?>
</body>

</html>