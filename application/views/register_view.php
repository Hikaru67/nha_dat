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
        <div class="form-register">
            <h3 class="title"><span>Đăng ký thành viên</span></h3>
            
            <div class="row row-eq-height">
                <div class="col-xs-6 border-or">
                    <form action="/nha_dat/account/registed" class="form-horizontal" method="POST" enctype='multipart/form-data'>
                        

                        <div class="form-group row">
                            <label for="typeKH" class="col-xs-4 control-label regis-label">Loại tài khoản <i class="color-e65925">*</i>
                            </label>
                            <div class="col-xs-7 padding-right0">
                                <input type="radio" name="typeKH" value="khach hang"  > Khách hàng<br>
                                <input type="radio" name="typeKH" value="chu nha dat" > Chủ nhà đất<br>  
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-xs-4 control-label regis-label">Họ tên, Doanh nghiệp <i class="color-e65925">*</i> </label>
                            <div class="col-xs-7 padding-right0">
                                <input type="ra" id="name" name="name" class="form-control" placeholder="Ex:  Huấn Rose" required>
                            </div>
                        </div>
                        <?php if ($_SESSION['registed']) {?>
                            <div style="padding-right: :0;margin-right:-18px;list-style:none;margin-top:-26px;margin-bottom:5px;color:#e65925;">
                                <i class="color-e65925">*</i> Tên tài khoản đã tồn tại
                            </div>
                        <?php } ?>
                        <div class="form-group row">
                            <label for="username" class="col-xs-4 control-label regis-label">Tài khoản <i class="color-e65925">*</i>
                            </label>
                            <div class="col-xs-7 padding-right0">
                                <input type="text" id="username" name="username" class="form-control" placeholder="Ex: Meowwwwww" required>
                            </div>
                        </div>
                        
                        <?php if(isset($_SESSION['re_pass'])&&!$_SESSION['re_pass']) {?>
                            <div style="padding-right: :0;margin-right:-18px;list-style:none;margin-top:-26px;margin-bottom:5px;color:#e65925;">
                                <i class="color-e65925">*</i> Nhập lại mật khẩu chưa chính xác
                            </div>
                        <?php } ?>
                        <div class="form-group row">
                            <label for="password" class="col-xs-4 control-label regis-label">Mật khẩu <i class="color-e65925">*</i>
                            </label>
                            <div class="col-xs-7 padding-right0">
                                <div class="row">
                                    <div class="col-xs-6 padding-right7">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Nhập mật khẩu" required>
                                    </div>
                                    <div class="col-xs-6 padding-left7">
                                        <input type="password" id="re_password" name="re_password" class="form-control" placeholder="Nhập lại mật khẩu" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ngaysinh" class="col-xs-4 control-label regis-label">Ngày sinh<i class="color-e65925">*</i></label>
                            <div class="col-xs-7 padding-right0">
                                <input type="date" id="ngaysinh" name="ngaysinh" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="diachi" class="col-xs-4 control-label regis-label">Địa chỉ <i class="color-e65925">*</i>
                            </label>
                            <div class="col-xs-7 padding-right0">
                                <input type="text" id="diachi" name="diachi" class="form-control" placeholder="Ex: Cà Mau" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-xs-4 control-label regis-label">Di động <i class="color-e65925">*</i>
                            </label>
                            <div class="col-xs-7 padding-right0">
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="Ex: 090345789" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="avatar" class="col-xs-4 control-label regis-label">Avatar <i class="color-e65925">*</i>
                            </label>
                            <div class="col-xs-7 padding-right0">
                                <input type="file" id="avatar" name="avatar" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="btn-register col-xs-11 padding-right0">
                                <button type="submit" class="btn btn-link pull-right">Đăng ký</button>
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