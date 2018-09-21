﻿<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic page needs -->
<meta charset="utf-8">
<!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>时光银行</title>

<?php require_once("header.php") ?>

<body class="cms-index-index cms-home-page">
     



<div id="page"> 
  
<?php require_once("banner.php") ?>  
<?php require_once("navigation.php") ?>
  
  <!-- Home Slider Start -->
  <div class="slider">
    <div class="tp-banner-container clearfix">
      <div class="tp-banner" >
        <ul>
          <!-- SLIDE 2 -->
          <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" > 
            <!-- MAIN IMAGE --> 
            <img src="images/slider/ppt1.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
            <!-- LAYERS --> 
            <!-- LAYER NR. 1 -->
            <div class="tp-caption white_heavy_60 customin ltl tp-resizeme"
                          data-x="215"
                          data-y="140" 
                          data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                          data-speed="1200"
                          data-start="700"
                          data-easing="Power4.easeOut"
                          data-splitin="chars"
                          data-splitout="none"
                          data-elementdelay="0.1"
                          data-endelementdelay="0.1"
                          data-endspeed="1000"
                          data-endeasing="Power4.easeIn"
                          style=" font-size:70px; font-weight:800; color:#333;">时光Token</div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption black_thin_blackbg_30 customin ltl tp-resizeme"
                          data-x="215"
                          data-y="220" 
                          data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                          data-speed="1500"
                          data-start="1000"
                          data-easing="Power4.easeInOut"
                          data-splitin="none"
                          data-splitout="none"
                          data-elementdelay="0.01"
                          data-endelementdelay="0.1"
                          data-endspeed="1000"
                          data-endeasing="Power4.easeIn"
                          style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap; color:#222222; font-size:20px; font-weight:500;">&nbsp;区块链上时光存取的代币</div>
            
            <!-- LAYER NR. 4 -->
            <div class="tp-caption lfb ltb start tp-resizeme"
                          data-x="215"
                          data-y="270"
                          data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                          data-speed="1500"
                          data-start="1600"
                          data-easing="Power3.easeInOut"
                          data-splitin="none"
                          data-splitout="none"
                          data-elementdelay="0.01"
                          data-endelementdelay="0.1"
                          data-linktoslide="next"
                          style="border: 2px solid #142347;border-radius: 50px; font-size:14px; background-color: #142347; color:#fff; z-index: 12; max-width: auto; max-height: auto; white-space: nowrap; letter-spacing:1px;"><a href='/blockchain/blocktx' class='largebtn slide1'>查看交易</a> </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
  <!-- jieshao -->
  <section id="service" class="text-center" style="border-top: 0px;  background: none; margin-top:35px;"> 
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="service-box">
              <div class="service-icon"> <i class="fa fa-instagram"></i> </div>
              <div class="service-desc">
                <h4>区块链确权</h4>
                <p>时光银行将在区块链上对时间交易进行确权、存证，交易存证永久不可篡改。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="wow fadeInRight" data-wow-delay="0.2s">
            <div class="service-box">
              <div class="service-icon"> <i class="fa fa-search-plus"></i> </div>
              <div class="service-desc">
                <h4>任务验证</h4>
                <p>时间交易方可进行任务中时间交易的验证。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="service-box">
              <div class="service-icon"> <i class="fa fa-magic"></i> </div>
              <div class="service-desc">
                <h4>时间交易</h4>
                <p>在区块链上，各参与方使用时光Token进行时间的存取等，交易可验证、安全不可篡改。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="wow fadeInLeft" data-wow-delay="0.2s">
            <div class="service-box">
              <div class="service-icon"> <i class="fa fa-cogs"></i> </div>
              <div class="service-desc">
                <h4>开放平台</h4>
                <p>时光银行将以开放区块链节点加入的形式，鼓励多方加入并参与时光存取。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  


  

<?php require_once("footer.php") ?>


</body>
</html>
