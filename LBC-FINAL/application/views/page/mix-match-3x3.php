<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="en-US">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2017.0.2.363"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <link href="https://fonts.googleapis.com/css?family=Cabin:400,600" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/draganddrop.css?v=5"/>
  <script type = "text/javascript" src="<?php echo base_url(); ?>assets/dragdroptouch.js"></script>
  <script type = "text/javascript" src="<?php echo base_url(); ?>assets/dragdrop.js"></script>

  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "require.js", "mix-match-3x3.css"], "outOfDate":[]};
</script>
  
  <link rel="shortcut icon" href="<?php echo base_url(); ?>images/mix-match-3x3-favicon.ico?crc=3970908141"/>
  <title>Mix&amp;Match | 3x3</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/site_global.css?crc=384580191"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/mix-match-3x3.css?crc=3847918825" id="pagesheet"/>
  <!-- JS includes -->
  <!--[if lt IE 9]>
  <script src="<?php echo base_url(); ?>scripts/html5shiv.js?crc=4241844378" type="text/javascript"></script>
  <![endif]-->
   </head>
 <body class="museBGSize">

  <div class="clearfix borderbox" id="page"><!-- column -->
   <div class="colelem" id="u125910"><!-- custom html -->

<div id="holder33">
<div id="container33">
    <div id="div1" class="square33" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="div2" class="square33" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="div3" class="square33" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="div4" class="square33" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="div5" class="square33" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="div6" class="square33" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="div7" class="square33" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="div8" class="square33" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="div9" class="square33" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
</div>

<div id="order">
<?php echo form_error('orderdata1'); ?>
<?php echo form_error('orderdata2'); ?>
<?php echo form_error('orderdata3'); ?>
<?php echo form_error('orderdata4'); ?>
<?php echo form_error('orderdata5'); ?>
<?php echo form_error('orderdata6'); ?>
<?php echo form_error('orderdata7'); ?>
<?php echo form_error('orderdata8'); ?>
<?php echo form_error('orderdata9'); ?>

<script type="text/javascript">
      function order(){
        var div1 = document.getElementById("div1");
        var div2 = document.getElementById("div2");
        var div3 = document.getElementById("div3");
        var div4 = document.getElementById("div4");
        var div5 = document.getElementById("div5");
        var div6 = document.getElementById("div6");
        var div7 = document.getElementById("div7");
        var div8 = document.getElementById("div8");
        var div9 = document.getElementById("div9");

        document.getElementById("orderdata1").value = "";
        document.getElementById("orderdata2").value = "";
        document.getElementById("orderdata3").value = "";
        document.getElementById("orderdata4").value = "";
        document.getElementById("orderdata5").value = "";
        document.getElementById("orderdata6").value = "";
        document.getElementById("orderdata7").value = "";
        document.getElementById("orderdata8").value = "";
        document.getElementById("orderdata9").value = "";

        if(div1.querySelector('#box') != null){
          var box1 = div1.querySelector('#box').src;
          document.getElementById("orderdata1").value = box1;
        }
        if(div2.querySelector('#box') != null){
          var box2 = div2.querySelector('#box').src;
          document.getElementById("orderdata2").value = box2;
        }
        if(div3.querySelector('#box') != null){
          var box3 = div3.querySelector('#box').src;
          document.getElementById("orderdata3").value = box3;
        }
        if(div4.querySelector('#box') != null){
          var box4 = div4.querySelector('#box').src;
          document.getElementById("orderdata4").value = box4;
        }
        if(div5.querySelector('#box') != null){
          var box5 = div5.querySelector('#box').src;
          document.getElementById("orderdata5").value = box5;
        }
        if(div6.querySelector('#box') != null){
          var box6 = div6.querySelector('#box').src;
          document.getElementById("orderdata6").value = box6;
        }
        if(div7.querySelector('#box') != null){
          var box7 = div7.querySelector('#box').src;
          document.getElementById("orderdata7").value = box7;
        }
        if(div8.querySelector('#box') != null){
          var box8 = div8.querySelector('#box').src;
          document.getElementById("orderdata8").value = box8;
        }
        if(div9.querySelector('#box') != null){
          var box9 = div9.querySelector('#box').src;
          document.getElementById("orderdata9").value = box9;
        }

        document.getElementById('orderForm').submit();
       }
</script>

    <!--<form action="mailto:greetings.ambawani@gmail.com" method="post" enctype="text/plain"> action perlu diganti -->
        <form method="post" accept-charset="utf-8" action="<?php echo base_url("index.php/Controller/SentOrderEmail/$location"); ?>" id="orderForm">
        <h1>Customer Details</h1>
        <div id="lb">
        <label for="name">Name</label><?php echo form_error('name'); ?>
        <input class="inputorder" type="text" id="name" name="name" value="<?php echo set_value('name'); ?>">

        <label for="email">Email</label><?php echo form_error('email'); ?>
        <input class="inputorder" type="text" id="email" name="email" value="<?php echo set_value('email'); ?>">

        <label for="address">Address</label><?php echo form_error('address'); ?>
        <input class="inputorder" type="text" id="address" name="address" value="<?php echo set_value('address'); ?>">

        <label for="phone">Phone</label><?php echo form_error('phone'); ?>
        <input class="inputorder" type="text" id="phone" name="phone" value="<?php echo set_value('phone'); ?>">

        <label for="delivery">Delivery Service (JNE/Gojek)</label><?php echo form_error('delivery'); ?>
        <input class="inputorder" type="text" id="delivery" name="delivery" value="<?php echo set_value('delivery'); ?>">

        <label for="deliverydate">Delivery Date</label><?php echo form_error('deliverydate'); ?>
        <input class="inputorder" type="text" id="deliverydate" name="deliverydate" value="<?php echo set_value('deliverydate'); ?>">

        <input type="hidden" id="orderdata1" name="orderdata1">
        <input type="hidden" id="orderdata2" name="orderdata2">
        <input type="hidden" id="orderdata3" name="orderdata3">
        <input type="hidden" id="orderdata4" name="orderdata4">
        <input type="hidden" id="orderdata5" name="orderdata5">
        <input type="hidden" id="orderdata6" name="orderdata6">
        <input type="hidden" id="orderdata7" name="orderdata7">
        <input type="hidden" id="orderdata8" name="orderdata8">
        <input type="hidden" id="orderdata9" name="orderdata9"> <!-- Order Data -->
        </div>
        <input class="orderButton" type="button" onclick="order()" value="ORDER">
        <input class="orderButton" onclick="window.location='<?php echo base_url("index.php/Controller/BoxOptions"); ?>';" type="button" value="BACK">
    </form>

</div>
</div>
<br>
<br>
<br>
<div class="tabcontainer">
<div class="tab">
  <button id="defaultOpen" class="tablinks" onclick="openTab(event, 'Letter')">LETTER</button>
  <button class="tablinks" onclick="openTab(event, 'Icon')">ICON</button>
  <button class="tablinks" onclick="openTab(event, 'Event')">EVENT</button>
</div>

<div id="Letter" class="tabcontent">
  <div id="collection">
    <?php
            $counter = 1;

            foreach($mixmatch_letter->result() as $line)
            {

                echo '
                   <img id="box" class="drag'.$counter.'" src="'.base_url("assets/$line->image").'" onmouseover="hover(this)" onmouseout="normal(this)" ondragover="allowDrop(event)" draggable="true" ondragstart="drag(event)" ondragend="end(event)">
                ';

                $counter = $counter + 1;
            }
      ?>
    
  </div>
</div>

<div id="Icon" class="tabcontent">
  <div id="collection">
    <?php
            $counter = 1;

            foreach($mixmatch_icon->result() as $line)
            {

                echo '
                   <img id="box" class="dragi'.$counter.'" src="'.base_url("assets/$line->image").'" onmouseover="hover(this)" onmouseout="normal(this)" ondragover="allowDrop(event)" draggable="true" ondragstart="drag(event)" ondragend="end(event)">
                ';

                $counter = $counter + 1;
            }
      ?>
  </div>
</div>

<div id="Event" class="tabcontent">
  <div id="collection">
    <?php
            $counter = 1;

            foreach($mixmatch_event->result() as $line)
            {

                echo '
                   <img id="box" class="drage'.$counter.'" src="'.base_url("assets/$line->image").'" onmouseover="hover(this)" onmouseout="normal(this)" ondragover="allowDrop(event)" draggable="true" ondragstart="drag(event)" ondragend="end(event)">
                ';

                $counter = $counter + 1;
            }
      ?>
    </div>
</div>
</div>

   </div>
   <div class="verticalspacer" data-offset-top="782" data-content-above-spacer="781" data-content-below-spacer="22"></div>
  </div>
  <!-- Other scripts -->
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){

      if(window.location.pathname == "/LBC-FINAL/index.php/Controller/MixMatch3x3") require.config({baseUrl:"../.."});
        else require.config({baseUrl:"../../.."});

  require(["jquery","museutils","whatinput","jquery.musepolyfill.bgsize","jquery.watch"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="<?php echo base_url(); ?>scripts/require.js?crc=4234670167" type="text/javascript" async data-main="<?php echo base_url(); ?>scripts/museconfig.js?crc=4152223963" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>
