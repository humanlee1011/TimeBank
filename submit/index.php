<?php 
	session_start();
	// if (!isset($_SESSION['user']))
	// 	header('Location: /login/'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic page needs -->
<meta charset="utf-8">
<!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>发布任务</title>

<?php require_once("../header.php") ?>

<body class="cms-index-index cms-home-page">
     



<div id="page"> 
  
<?php require_once("../banner.php") ?>  
<?php require_once("../navigation.php") ?>
  
<section class="main-container col1-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-12">
          
          <div id="contact" class="page-content page-contact">
          <div class="page-title">
            <h2>发布任务 ( 用户:<?php echo $_SESSION['user']; ?> )</h2>
          </div>
            <form action="miaomi.php" method="post" enctype="multipart/form-data">
	            <div class="row" >
					<div class="col-sm-6">

						<div class="contact-form-box">
						  <div class="form-group">
						    <label>任务名称</label>
						    <input type="text" class="form-control" name="mname">
						  </div>
						  <div class="form-group">
						    <label>任务价格</label>
						    <input type="password" class="form-control input-sm" name="price">
						  </div>
						  <div class="form-group">
						    <label>任务描述</label>
						    <textarea class="form-control" rows="5" name="description"></textarea>
						  </div>
						  
						  <div class="form-group">
						    <button type="submit" class="button"><i class="fa fa-send"></i>&nbsp; <span>提交</span></button>
						    &nbsp; <a href="/submit/" class="button">清空</a> 
						  </div>
								
						</div>
					</div>
					<div style="display:none;">
						  <div class="form-selector" style="margin-top:10px;">
						    <label>作品高清图片:</label>
							<input type="file" name="file0" id="dianji0"/> 
						  </div>

						  <!-- <div class="form-selector">
						    <label>签名:</label>
							<input type="file" name="file1" id="dianji1"/> 
						  </div>

						  <div class="form-selector">
						    <label>局部取点拍摄:</label>
							<input type="file" name="file2" id="dianji2"/> 
						  </div>

						  <div class="form-selector">
						    <label>材质细节:</label>
							<input type="file" name="file3" id="dianji3"/> 
						  </div> -->
					</div>
					<div class="col-sm-6">
						<div class="form-selector">
							<label>图片上传(jpg格式)</label>
							<a><img src="/images/click.png" alt="" id="look0" onclick="document.getElementById('dianji0').click();" width="100%" style="margin-top:5px;"></a>
							<!-- <a><img src="/img/click2.png" alt="" id="look2" onclick="document.getElementById('dianji2').click();" width="100%" style="margin-top:15px;"></a> -->
						</div>
					</div>
					<!-- <div class="col-sm-3">
						<div class="form-selector">
							<label style="opacity:0">1</label>
							<a><img src="/img/click1.png" alt="" id="look1" onclick="document.getElementById('dianji1').click();" width="100%" style="margin-top:5px;"></a>
							<a><img src="/img/click3.png" alt="" id="look3" onclick="document.getElementById('dianji3').click();" width="100%" style="margin-top:15px;"></a>
						</div>
					</div> -->
	           <!--  </div> -->

					<!-- <div class="col-sm-6">

						<div class="contact-form-box">
						  <div class="form-selector">
						    <label>带宽</label>
						    <input type="text" class="form-control input-sm" name="tape">
						  </div>
							<div class="form-selector">
						    <label>IP地址</label>
						    <input type="text" class="form-control input-sm" name="ip">
						  </div>
							<div class="form-selector">
						    <label>定价</label>
						    <input type="text" class="form-control input-sm" name="value">
						  </div>
					</div> -->
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

<script type="text/javascript">
function jianting(dianjiid, lookid) {
	$('#'+dianjiid).change(function() {
	    //获取到file的文件
	    var docObj = document.getElementById(dianjiid);
	    //获取到预览框的文件
	    var imgObjPreview = document.getElementById(lookid);
	    //获取到文件名和类型
	    if(docObj.files && docObj.files[0]) {
	        console.log(docObj.files)
	        //火狐7以上版本不能用上面的getAsDataURL()方式获取，需要一下方式
	        imgObjPreview.src = window.URL.createObjectURL(docObj.files[0]);
	    } else {
	        //IE下，使用滤镜
	        docObj.select();
	        var imgSrc = document.selection.createRange().text;
	        var localImagId = document.getElementById("localImag");
	        //图片异常的捕捉，防止用户修改后缀来伪造图片
	        try {
	            localImagId.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
	            localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;
	        } catch(e) {
	            alert("您上传的图片格式不正确，请重新选择!");
	            return false;
	        }
	        document.selection.empty();
	    }
	    return true;
	});
}
jianting("dianji0","look0");
jianting("dianji1","look1");
jianting("dianji2","look2");
jianting("dianji3","look3");
</script>
<?php require_once("../footer.php") ?>


</body>
</html>
