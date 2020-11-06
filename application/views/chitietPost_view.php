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
	<?php include "menu.php" ?>

	<div class="container">
		<div class="housing-wrapper">
            <div class="row">
                <div class="col-xs-9 housing-left">
                    <div class="title-lg">
                        <div class="pull-left">
                            <h1 class="title_h1"><?= $_SESSION['title'] ?></h1>
                            <div class="address"><a href=""> <i class="fa fa-map-marker"></i><?= $_SESSION['address'] ?></a></div>
                        </div>
                        <div class="area_price pull-right text-right">
                            <p>
                                <span class="area_top"><?= $_SESSION['dientich'] ?>m2/</span>
                                <span class="price_top"><?= $_SESSION['price'] ?> triệu</span>
                            </p>
                           <!--  <p>Giá diện tích: ~ 8 triệu/m2</p> -->
                        </div>
                    </div>
                    <div class="content-bottom">
                        <div class="pull-left">
                            <p id="_post_code" value="">Mã tin: <?= $_SESSION['id_post'] ?></p>
                        </div>
                        <div class="pull-right">
                            <div class="social-option text-right">
                                
                            </div>
                        </div>
                    </div>

                    <div class="slideshow-container">
				        <div class="mySlides fade">
				          <img src="<?= $_SESSION['BDS_image'] ?>" style="width:100%">
				        </div>

				        <div class="mySlides fade">
				          <img src="<?= $_SESSION['BDS_image'] ?>" style="width:100%">
				        </div>

				        <div class="mySlides fade">
				          <img src="<?= $_SESSION['BDS_image'] ?>" style="width:100%">
				        </div>
				     </div>
				     <br>

				        <div style="text-align:center">
				        <span class="dot" onclick="currentSlide(0)"></span> 
				        <span class="dot" onclick="currentSlide(1)"></span> 
				        <span class="dot" onclick="currentSlide(2)"></span> 
			        </div>  
                        <div class="backg_white">
                            <h4 class="title_home"><span>Đặc điểm chính</span></h4>
                            <div class="row Main_features">
                                <div class="col-xs-8 clearfix">
                                    <span class="name">Địa điểm</span>
                                    <span class="text"><?= $_SESSION['address'] ?></span>
                                </div>
                                <div class="col-xs-8 clearfix">
                                    <span class="name">Diện tích đất</span>
                                    <span class="text"><?= $_SESSION['dientich'] ?>m2</span>
                                </div>
                                <?php if ($_SESSION['dientich_sd']!="") {?>
                                <div class="col-xs-8 clearfix">
                                    <span class="name">Diện tích sử dụng</span>
                                    <span class="text"><?= $_SESSION['dientich_sd'] ?>m2</span>
                                </div>          
                            	<?php } ?>
                        	</div>

	                        <div class="row-cols-4 " >
	                            <div class=""  >
	                                <h3>Thông tin chi tiết</h3>
	                                <span style="font-size: 16px ; "><?= $_SESSION['chitiet'] ?></span>
	                            </div>
	                        </div>
	                        <?php foreach ($mangketqua as $key => $value) { ?>
	                        <div class="card personal-infortop">
	                        	<div class="row-cols-4 " >
		                            <div class=""  >
		                                <h3>Thông tin liên hệ</h3>
		                            </div>
	                       		 </div>
	                        	<div class="upload-photo pull-left">
	                                <div class="file-input file-input-ajax-new">
	                                	<div class="file-preview ">
										    <div class="close fileinput-remove"></div>
										    <div class=" file-drop-zone">
											    <div class="file-preview-thumbnails">
											    	<div class="file-default-preview">
											    		<img src="<?= $value['avatar'] ?>"	>
											    	</div>
											    </div>
											    <div class="clearfix"></div>    
											    
											    <div class="kv-fileinput-error file-error-message" style="display: none;"></div>
										    </div>
										</div>
									
									</div>    
                            	</div>
		                        <div class=" text-center row">
		                            <div class="col-xs-8 user-profile">
	                                    <h4 class="pull-left name">Họ tên: <?= $value['name'] ?></h4>
		                            </div>
		                            <div class="col-xs-8 user-profile">
		                            	<p class="pull-left card-text">Di động: <?= $value['phone'] ?></p>
		                            </div>
		                        </div>
		                    </div>
	                    	<?php } ?>

                    	</div>
                </div>
                
            </div>
        </div>
	</div>
	<?php include "tailer.php"; ?>
</body>
<script>
	  //khai báo biến slideIndex đại diện cho slide hiện tại
	  var slideIndex;
	  // KHai bào hàm hiển thị slide
	  function showSlides() {
	      var i;
	      var slides = document.getElementsByClassName("mySlides");
	      var dots = document.getElementsByClassName("dot");
	      for (i = 0; i < slides.length; i++) {
	         slides[i].style.display = "none";  
	      }
	      for (i = 0; i < dots.length; i++) {
	          dots[i].className = dots[i].className.replace(" active", "");
	      }

	      slides[slideIndex].style.display = "block";  
	      dots[slideIndex].className += " active";
	      //chuyển đến slide tiếp theo
	      slideIndex++;
	      //nếu đang ở slide cuối cùng thì chuyển về slide đầu
	      if (slideIndex > slides.length - 1) {
	        slideIndex = 0
	      }    
	      //tự động chuyển đổi slide sau 5s
	      setTimeout(showSlides, 5000);
	  }
	  //mặc định hiển thị slide đầu tiên 
	  showSlides(slideIndex = 0);


	  function currentSlide(n) {
	    showSlides(slideIndex = n);
	  }
    </script>
</html>