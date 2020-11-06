<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="http://127.0.0.1:8080/nha_dat/vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/angular-material.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/product.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/style.css" />
	<title>Document</title>
</head>
<body ng-app="myApp" ng-controller="MyController" ng-init='abc="giatri"'>
	<?php include "menu.php" ?>
	
		<?php if(isset($_SESSION['id'])){ ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 push-sm-2">
				<h3 class="text-xs-center">
				<?php $typePost = $_GET['typePost'];
					switch ($typePost) {
						case 'post_ban':
							echo 'Đăng bài bán BĐS';
							break;
						case 'post_cho_thue':
							echo 'Đăng bài cho thuê BĐS';
							break;
						case 'post_can_mua':
							echo 'Đăng bài cần mua BĐS';
							break;
						case 'post_can_thue':
							echo 'Đăng bài cần thuê BĐS';
							break;	
					}
				 ?>
				</h3>
				<hr>
				<form action="<?php echo base_url(); ?>home/add_post" method="POST" role="form" enctype='multipart/form-data'>
					
					<div class="form-group">
						<label for="">Loại</label><br>
						<input type="radio" name="typeBDS" value="" class="form-group" ng-model="giatri">Nhà<br>
						<input type="radio" name="typeBDS" value="dat" class="form-group" ng-model="giatri">Đất<br>
					</div>	
					
					<!-- <div class="form-group">
						<input name="id" type="text" value="<?php echo $_SESSION['id_post']; ?>" class="form-control" hidden id="id">
					</div> -->

					<div class="form-group">
						<input name="id_user" type="text" value="<?php echo $_SESSION['id']; ?>" class="form-control" hidden id="id_user">
					</div>

					<div class="form-group">
						<input name="typePost" type="text" value="<?php echo $typePost; ?>" class="form-control" hidden id="typePost">
					</div>

					<div class="form-group">
						<label for="">Tiêu đề</label>
						<input name="title" type="text" class="form-control" id="title" placeholder="Tiêu đề" required>
					</div>
				
					<div class="form-group">
						<label for="">Địa chỉ</label>
						<input name="address" type="text" class="form-control" id="address" placeholder="Địa chỉ" required>
					</div>
				
					<div class="form-group">
						<label for="">Giá</label>
						<input name="price" type="text" class="form-control" id="price" placeholder="Tổng giá bán" required>
					</div>
					<!-- ng-hide = "{{abc}}" -->
					<div class="form-group">
						<label for="">Diện tích đất</label>
						<input name="dientich" type="text" class="form-control" id="dientich" placeholder="Diện tích đất" required>
					</div>
				
					<div class="form-group" ng-hide = "{{abc}}">
						<label for="">Diện tích sử dụng</label>
						<input name="dientich_sd" type="text" class="form-control" id="dientich_sd" placeholder="Diện tích sử dụng">
					</div>

					<div class="form-group" >
						<label for="">Mô tả thêm</label>
						<input name="chitiet" type="text" class="form-control" id="chitiet" placeholder="Mô tả thêm">
					</div>

					<div class="form-group">
						<label for="">Upload ảnh</label>
						<input name="BDS_image" type="file" class="form-control" id="BDS_image" >
					</div>

					<button type="submit" class="btn btn-block btn-outline-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
		<?php } ?>

		<?php if(!isset($_SESSION['id'])){ ?>
			<div class="slider-banner" id="home-slide" style="background: #fff;">
		        <div id="slider-banner" class="carousel carousel-slider" data-ride="carousel" data-interval="3000">
		            <div class="item-slider item">
		                <img src="https://previews.123rf.com/images/korara/korara1805/korara180500020/100643812-404-error-page-vector-illustration-banner-with-not-found-message-cartoon-penguin-with-lenses-backgro.jpg" alt="">
		            </div>
		        </div>
		    </div>
		<?php } ?>

	<?php include "tailer.php"; ?>
	<script type="text/javascript" src="http://127.0.0.1:8080/nha_dat/vendor/bootstrap.js"></script>  
	<script type="text/javascript" src="http://127.0.0.1:8080/nha_dat/vendor/angular-1.5.min.js"></script>  
  	<script type="text/javascript" src="http://127.0.0.1:8080/nha_dat/vendor/angular-animate.min.js"></script>
  	<script type="text/javascript" src="http://127.0.0.1:8080/nha_dat/vendor/angular-aria.min.js"></script>
 	<script type="text/javascript" src="http://127.0.0.1:8080/nha_dat/vendor/angular-messages.min.js"></script>
 	<script type="text/javascript" src="http://127.0.0.1:8080/nha_dat/vendor/angular-material.min.js"></script>  
  	<script type="text/javascript" src="http://127.0.0.1:8080/nha_dat/1.js"></script>
</body>

</html>