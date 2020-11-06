<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/product.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/style.css" />
</head>
<body>
    <?php include "menu.php"; ?>	
    <div class="container">
		<div class="form-login form-register">
            <h3 class="title"><span>Đăng nhập</span></h3>
            
            <div class="row row-eq-height">
                <div class="col-xs-6 border-itemp">
                    <form action="/nha_dat/account/loged" class="form-horizontal" method="post"> 
                     <?php if (isset($_SESSION['wrong_account'])) {?>
                        <div style="padding-right: :0;margin-right:-18px;list-style:none;margin-top:-26px;margin-bottom:5px;color:#e65925;">
                            <i class="color-e65925">*<?php echo $_SESSION['wrong_account']; ?></i> 
                        </div>   
                    <?php } ?>                     
                    <div class="form-group">
                        <label for="login" class="col-xs-3 control-label">Tài khoản</label>
                        <div class="col-xs-8 padding-right0">
                            <input type="text" id="username" name="username" value="" class="form-control" placeholder="Ex: vule@datvang.com">                                                    
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-xs-3 control-label">Mật khẩu</label>
                        <div class="col-xs-8 padding-right0">
                            <input type="password" id="password" name="password" value="" class="form-control" placeholder="Mật khẩu đăng nhập">                                                    
                        </div>
                    </div>
                    
                    <div class="btn-register col-xs-offset-3 col-xs-8 padding-0">
                        <div class="pull-left">
                            <a href="/nha_dat/account/register" class="pw-recovery">Đăng ký</a>
                        </div>
                        <input type="submit" id="submit" name="submit" value="Đăng nhập" class="btn btn-link pull-right">                    
                    </div>
                    </form>                
                </div>
              
            </div>
        </div>
	</div>
</body>
<?php include "tailer.php"; ?>
</html>