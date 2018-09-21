<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic page needs -->
<meta charset="utf-8">
<!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>任务领取</title>

<?php require_once("../../header.php") ?>

<body class="cms-index-index cms-home-page">
     



<div id="page"> 
  
<?php require_once("../../banner.php") ?>  
<?php require_once("../../navigation.php") ?>
  
	<div class="error-page">
	    <div class="container">
	      <div class="error_pagenotfound"> <strong style="color:#FED700">领取任务 </strong> <br>
	        <b style="margin-top:10px;">请等待区块链打包确认交易</b> <em>唯一交易ID：<?php echo "$hash"; ?></em>
	        <p><?php echo "$str"; ?></p>
	        <br>
	        <a href="/my/copyright_buy/" class="button-back"><i class="fa fa-arrow-circle-left fa-lg"></i>&nbsp; 领取的任务</a> </div>
	      <!-- end error page notfound --> 
	      
	    </div>
  </div>
<?php require_once("../../footer.php") ?>


</body>
</html>
