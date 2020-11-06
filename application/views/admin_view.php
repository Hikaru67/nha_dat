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
	<div class="container">
		
	    <div class="block-center col-sm-4 col-md-4 col-lg-4 card">
		    <div class=" media-body card-block">
				<div id="login-content">
					<h3>Đăng nhập quản trị hệ thống</h3>

					<form class="loginform form-horizontal" method="post" action="/nha_dat/admin/index" >
						<br><br>
						<?php if (isset($_SESSION['wrongad'])&&$_SESSION['wrongad']) {?>
	                        <div style="padding-right: :0;margin-right:-18px;list-style:none;margin-top:-26px;margin-bottom:5px;color:#e65925;">
	                            <i class="color-e65925">*<?php echo $_SESSION['wrongad']; ?></i> 
	                        </div>   
	                    <?php } ?> 
						<p>
							<label for="user">Tên đăng nhập:</label>
							<input class="form-control" name="user" type="text" id="user" value="" required />
						</p>
						<p>
							<label for="pass">Mật khẩu:</label>
							<input class="form-control" name="pass" type="password" id="pass" required/>
						</p>
						<div id="submit">
							
							<input class="btn btn-primary" type="submit" value="Đăng nhập" />
						</div>
					</form>

				</div>					    		
			</div>  
		</div>
	</div>

	
</body>
</html>