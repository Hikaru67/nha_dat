<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="http://127.0.0.1:8080/nha_dat/vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/angular-material.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/product.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/style.css" />
	<title>Document</title>
</head>
<body>
	<?php include "menu.php"; ?>
	<div class="quick-search">
    	<div class="container">
	        <form action="/nha_dat/home/showPost?typePost=<?php echo $_SESSION['typePost'];?>&typeBDS=<?php echo $_SESSION['typeBDS'];?>" class="form-inline " method="post">
	        	<div class="form-group">
                    <label for="login" class="col-xs-6 control-label">Địa chỉ </label>
                    <div class="col-xs-8 padding-right0">
                        <input type="text" id="address" name="address" value="" class="form-control" placeholder="Hai Bà Trưng">
                    </div>
                </div>

	            <div class="form-group">
                    <label for="login" class="col-xs-6 control-label">Diện tích >= </label>
                    <div class="col-xs-8 padding-right0">
                        <input type="text" id="dientich" name="dientich" value="" class="form-control" placeholder="100m2">
                    </div>
                </div>
	            
	            <div class="form-group">
                    <label for="login" class="col-xs-6 control-label">Giá <= </label>
                    <div class="col-xs-8 padding-right0">
                        <input type="text" id="price" name="price" value="" class="form-control" placeholder="1 tỷ">
                    </div>
                </div>

                <div class="form-group">
                    <!-- <label for="login" class="col-xs-6 control-label">Giá <= </label> -->
                    <div class="col-xs-8 padding-right0">
                    	 <label for="login" class="col-xs-10 control-label">Lọc kết quả</label>
                    	<button type="" class="btn btn-info form-control" value="Lọc">Nai xờ</button>
                        
                    </div>
                </div>
	        </form>
    	</div>
	</div>
	<div class="container">
		<div class="card-deck-wrapper">
		  	<div class="card-deck">

		  		<?php foreach ($mangketqua as $key => $value): ?>
		  			<!-- <?php if($value ->dientich > $this->input->post('dientich')) ?> -->
				    <div class="card">
				    	<div class="media-left card-block">
					        <a href="chitiet/<?php echo $value['id'];?>">
					        	<img src="<?= $value['BDS_image'] ?>" width="180" height="160" alt="">
					        </a>
					    </div>
					    <div class="media-body card-block">
					        <a href="chitiet/<?php echo $value['id'];?>"><h3 class="card-title"><?php echo $value['title'] ?></h3></a>
					        <p class="card-text">Địa chỉ: <?php echo $value['address'] ?></p>
					        <p class="card-text">Diện tích: <?php echo $value['dientich'] ?>m2</p>
					        <p class="card-text">Tổng giá: <?php echo $value['price'] ?> triệu</p>
					        <p class="card-text"><small class="text-muted">Last updated 1 mins ago</small></p>
					    </div>
					    
				    </div>
				<?php endforeach ?>	
				<?php if($mangketqua==null) {?>
					<div>
						<img src="https://i.pinimg.com/originals/ae/8a/c2/ae8ac2fa217d23aadcc913989fcc34a2.png" width="80%" alt="">
					</div>
				<?php } ?>
			</div>  
		</div>
	</div>
		

	<?php include "tailer.php"; ?>
</body>
</html>
