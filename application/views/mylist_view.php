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
	        
    	</div>
	</div>
	<div class="container">
		<div class="card-deck-wrapper">
		  	<div class="card-deck">
				<?php if($mangketqua != null){ ?>
			  		<?php foreach ($mangketqua as $key => $value): ?>
			  			
					    <div class="card">
					    	<div class="media-left card-block">
						        <a href="chitiet/<?php echo $value['id'];?>">
						        	<img src="<?= $value['BDS_image'] ?>" width="180" height="160" alt="">
						        </a>
						    </div>
						    <div class="media-body card-block">
						        <a href="<?= base_url() ?>home/chitiet/<?php echo $value['id'];?>"><h3 class="card-title"><?php echo $value['title'] ?></h3></a>
						        <p class="card-text">Địa chỉ: <?php echo $value['address'] ?></p>
						        <p class="card-text">Diện tích: <?php echo $value['dientich'] ?>m2</p>
						        <p class="card-text">Tổng giá: <?php echo $value['price'] ?> triệu</p>
						        <a href="<?= base_url() ?>home/editpost/<?= $value['id'] ?>" class="btn btn-info" ><i class="fa fa-pencil"></i></a>
						        <a href="<?= base_url() ?>home/deletepost/<?= $value['id'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></a>
						        <p class="card-text"><small class="text-muted">Last updated 1 mins ago</small></p>
						    </div>
						    
					    </div>
					<?php endforeach ?>	
				<?php } ?>
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
