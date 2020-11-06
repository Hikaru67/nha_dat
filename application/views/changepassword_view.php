<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/product.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/style.css" />
	<title>Document</title>
</head>
<body>
	<?php include "menu.php"; ?>
    <div class="container">
        <div class="form-register">
            <h3 class="title"><span>Đổi mật khẩu</span></h3>
            
            <div class="row row-eq-height">
                <div class="col-xs-6 border-or">
                    <form action="/nha_dat/home/changepassword" class="form-horizontal" method="POST">
						<?php if (isset($_SESSION['wrong_password'])) {?>
                            <div style="padding-right: :0;margin-right:-18px;list-style:none;margin-top:-26px;margin-bottom:5px;color:#e65925;">
                                <i class="color-e65925">*<?php echo $_SESSION['wrong_password']; ?></i> 
                        	</div>   
                        <?php } ?>	
                                           
                        

 						<div class="form-group row">
                            <label for="name" class="col-xs-4 control-label regis-label">Mật khẩu cũ<i class="color-e65925">*</i></label>
                            <div class="col-xs-7 padding-right0">
                                <input type="password" id="old_password" name="old_password" class="form-control" >
                            </div>
                        </div>
                        
                        <?php if (isset($_SESSION['re_pass'])&&!$_SESSION['re_pass']) {?>
                            <div style="padding-right: :0;margin-right:-18px;list-style:none;margin-top:-26px;margin-bottom:5px;color:#e65925;">
                                <i class="color-e65925">*Nhập lại mật khẩu không chính xác</i> 
                            </div>   
                        <?php } ?>  
                        <div class="form-group row">
                            <label for="password" class="col-xs-4 control-label regis-label">Mật khẩu mới<i class="color-e65925">*</i>
                            </label>
                            <div class="col-xs-7 padding-right0">
                                <div class="row">
                                    <div class="col-xs-6 padding-right7">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Nhập mật khẩu" >
                                    </div>
                                    <div class="col-xs-6 padding-left7">
                                        <input type="password" id="re_password" name="re_password" class="form-control" placeholder="Nhập lại mật khẩu" >
                                    </div>
                                </div>
                            </div>
                        </div>                      

                        <div class="form-group">
                            <div class="btn-register col-xs-11 padding-right0">
                                <button type="submit" class="btn btn-link pull-right">Đổi mật khẩu</button>
                            </div>
                        </div>

                    </form>
                </div>

                
            </div>
        </div>
    </div>
    <?php include "tailer.php"; ?>
</body>
</html>