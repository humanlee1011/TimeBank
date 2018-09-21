<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic page needs -->
<meta charset="utf-8">
<!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Token余额不足</title>

<?php require_once("../header.php") ?>

<body class="cms-index-index cms-home-page">
     



<div id="page"> 
  
<?php require_once("../banner.php") ?>  
<?php require_once("../navigation.php") ?>
  
	<div class="error-page">
	    <div class="container">
	      <div class="error_pagenotfound"> <strong style="color:#142347">余额不足</strong> <br>
	        <b style="margin-top:10px;">请完成任务获得token</b> <em></em>
	        <br>
	        <a href="/mision/list/" class="button-back"><i class="fa fa-arrow-circle-left fa-lg"></i>&nbsp; 领取任务</a> </div>
	      <!-- end error page notfound --> 
	      
	    </div>
  </div>
<?php require_once("../footer.php") ?>


</body>
</html>
