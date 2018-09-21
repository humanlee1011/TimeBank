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
<title>用户注册</title>

<?php require_once("../../header.php") ?>

<body class="cms-index-index cms-home-page">
     



<div id="page"> 
  
<?php require_once("../../banner.php") ?>  
<?php require_once("../../navigation.php") ?>
  
<section class="main-container col1-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-12">
          
          <div id="contact" class="page-content page-contact">
          <div class="page-title">
            <h2>用户注册</h2>
          </div>
            <form id="form1" name="form1" method="post" action="../miaomi.php"> 
	            <div class="row">
					<div class="col-sm-6">

						<div class="contact-form-box">
						  <div class="form-selector">
						    <label>用户名</label>
						    <input type="text" class="form-control input-sm" name="user">
						  </div>
						  
						  <div class="form-selector">
						    <label>密码</label>
						    <input type="password" class="form-control input-sm" name="pwd">
						  </div>
						  
						  <div class="form-selector">
						    <button type="submit" class="button"><i class="fa fa-send"></i>&nbsp; <span>注册</span></button>
						    &nbsp; <a href="/reg/organization" class="button">机构注册</a> &nbsp; <a href="#" class="button">清空</a> </div>
						</div>
					</div>
					<div class="col-sm-6">
						<center><img src="/images/reg.png" width="80%"/></center>
					</div>
	            </div>
	        </form>
          </div>
        </section>
      </div>
    </div>
  </section>
      
    </div>
  </div>
  <!-- Container End -->


<?php require_once("../../footer.php") ?>


</body>
</html>
