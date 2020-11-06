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
	<div class="container">
		<div class="Deposit-right col-xs-9">
        <div class="title">Thay đổi thông tin cá nhân</div>
            <div class="Deposit-right_content">
                <div class="tab-content">
                	<?php foreach ($mangketqua as $key => $value) {?>

                    <div class="tab-temp personal-infor">
                        <div class="form-register form_personal">
                            <form class="form-horizontal listsearch" method="post" action="updateprofile" enctype='multipart/form-data'>
                        <div class="personal-infortop">
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
									

								<div tabindex="500" class="btn btn-link btn-block btn-file"><i class="glyphicon glyphicon-folder-open"></i> 
									<span class="hidden-xs">Thay đổi ảnh đại diện</span>
									<input id="avatar" name="avatar" type="file" class="">
									<input id="avatar2" name="avatar2" type="text" value="<?= $value['avatar'] ?>" hidden>
								</div>

								</div>    
                            </div>

                            <div class="perinfor-content">
                                <dl class="dl-horizontal">
                                    <dt>Tài khoản </dt>
                                    <dd class="view-link-profile">
                                            : <b><?= $value['typeKH'] ?></b>
                                        <br>
                                    </dd>
                                                                                
                                    <dt>Di động </dt><dd>: 	<?= $value['phone'] ?></dd>
                                    
                                </dl>
                            </div>
                        </div>
                        <hr>                                
                        
                                <input type="hidden" name="avatar">
                                <div class="form-group">
                                    <label for="name" class="col-xs-2 control-label">Tên</label>
                                    <div class="col-xs-5 padding-right0">
                                        <input type="text" class="form-control" name="name" id="name" value="<?= $value['name'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="diachi" class="col-xs-2 control-label">Địa chỉ</label>
                                    <div class="col-xs-5 padding-right0">
                                        <input type="text" class="form-control" name="diachi" id="diachi" value="<?= $value['diachi'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="col-xs-2 control-label">Di động</label>
                                    <div class="col-xs-5 padding-right0">
                                        <input type="text" class="form-control" name="phone" id="phone" value="<?= $value['phone'] ?>">
                                    </div>
                                </div>
                                <div class="btn-register col-xs-7 padding-right0">
                                    <button type="submit" class="btn btn-link pull-right">Thay đổi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
    </div>
	</div>

	<?php include "tailer.php"; ?>
</body>
</html>