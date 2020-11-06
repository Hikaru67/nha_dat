<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		.form-popup {
		  display: none;
		  position: fixed;
		  bottom: 0;
		  right: 0px;
		  border: 3px solid #f1f1f1;
		  z-index: 9;
		}

		.form-container {
		  max-width: 300px;
		  padding: 10px;
		  background-color: white;
		}
		.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}
	</style>
	<meta charset="UTF-8">

 	<link type="text/css" href="<?php echo base_url(); ?>vendor/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url(); ?>vendor/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url(); ?>vendor/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/theme.css" />
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<title>Document</title>
</head>
<body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="#"><?php echo $_SESSION['adname']; ?> </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                            <li><a href="#"><i class="icon-eye-open"></i></a></li>
                            <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                        </ul>
                        <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form>
                        <ul class="nav pull-right">
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Item No. 1</a></li>
                                    <li><a href="#">Don't Click</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Example Header</li>
                                    <li><a href="#">A Separated link</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Support </a></li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar">
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class=" row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="<?= base_url(); ?>admin/usermanagement"><i class="menu-icon icon-dashboard"></i>User Management
                                </a></li>
                                <li><a href="<?= base_url(); ?>admin/postmanagement"><i class="menu-icon icon-bullhorn"></i>Post management </a>
                                </li>
                                
                                
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a href="changepass"><i class="menu-icon icon-signout"></i>Change password </a></li>
                                <li><a href="logout"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            
                            <!--/#btn-controls-->
                            
                            <!--/.module-->
                            <!-- <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Adjust Budget Range</h3>
                                </div>
                                <div class="module-body">
                                    <div class="form-inline clearfix">
                                        <a href="#" class="btn pull-right">Update</a>
                                        <label for="amount">
                                            Price range:</label>
                                        &nbsp;
                                        <input type="text" id="amount" class="input-">
                                    </div>
                                    <hr>
                                    <div class="slider-range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
                                    <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 15%; width: 45%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 15%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 60%;"></a></div>
                                </div>
                            </div> -->
                            <div class="module">
                            
                                 <div class="container">
                                    
                                        <h3 class="title"><span>Đổi mật khẩu</span></h3>
                                        
                                        <div class="row row-eq-height">
                                            <div class="col-xs-6 border-or">
                                                <form action="changepass" class="form-horizontal" method="POST">
                                                    <br>
                                                    <?php if (isset($_SESSION['wrong_adpassword'])&&$_SESSION['wrong_adpassword']) {?>
                                                        <div style="padding-right: :0;margin-right:-18px;list-style:none;margin-top:-26px;margin-bottom:5px;color:#e65925;">
                                                            <i class="color-e65925">*<?php echo $_SESSION['wrong_adpassword']; ?></i> 
                                                        </div>   
                                                    <?php } ?>  
                                                                       
                                                    

                                                    <div class="form-group row">
                                                        <label for="name" class="col-xs-4 control-label regis-label">Mật khẩu cũ<i class="color-e65925">*</i></label>
                                                        <div class="col-xs-7 padding-right0">
                                                            <input type="password" id="old_pass" name="old_pass" class="form-control"  required>
                                                        </div>
                                                    </div>
                                                    
                                                    <?php if (isset($_SESSION['re_pass'])&&$_SESSION['re_pass']) {?>
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
                                                                    <input type="password" id="pass" name="pass" class="form-control" placeholder="Nhập mật khẩu" required>
                                                                </div>
                                                                <div class="col-xs-6 padding-left7">
                                                                    <input type="password" id="re_pass" name="re_pass" class="form-control" placeholder="Nhập lại mật khẩu" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>                      

                                                    <div class="form-group">
                                                        <div class="btn-register col-xs-11 padding-right0">
                                                            <button type="submit" class="btn btn-default pull-right">Đổi mật khẩu</button>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>

                                            
                                        </div>
                                    
                                </div>
                            </div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">© 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>

      
    

</body>
</html>