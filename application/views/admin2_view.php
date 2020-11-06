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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/product.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/style.css" />

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
                            <div class="module hide">
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
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        DataTables</h3>
                                </div>
                                <div class="module-body table">
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid"><div id="DataTables_Table_0_length" class="dataTables_length"><label>Show <select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div class="dataTables_filter" id="DataTables_Table_0_filter"><label>Search: <input type="text" aria-controls="DataTables_Table_0"></label></div><table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display dataTable" width="100%" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 100%;">
                                        <thead>
                                            <tr role="row"><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                                    Rendering engine
                                                : activate to sort column descending" style="width: 10px;">
                                                    Id
                                                </th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                    Browser
                                                : activate to sort column ascending" style="width: 150px;">
                                                    FullName
                                                </th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                    Platform(s)
                                                : activate to sort column ascending" style="width: 100px;">
                                                    Username
                                                </th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                    Engine version
                                                : activate to sort column ascending" style="width: 80px;">
                                                    Password
                                                </th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                    Engine version
                                                : activate to sort column ascending" style="width: 80px;">
                                                    TypeKH
                                                </th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                    CSS grade
                                                : activate to sort column ascending" style="width: 100px;">
                                                    Date of birth
                                                </th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                    CSS grade
                                                : activate to sort column ascending" style="width: 100px;">
                                                    Address
                                                </th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                    CSS grade
                                                : activate to sort column ascending" style="width: 100px;">
                                                    Phone
                                                </th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                    CSS grade
                                                : activate to sort column ascending" style="width: 100px;">
                                                    Avatar
                                                </th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                    CSS grade
                                                : activate to sort column ascending" style="width: 100px;">
                                                    
                                                    <buton class="btn btn-success" onclick="openForm()"><i class="fa fa-plus"></i></buton>
                                                </th>
                                                
                                                <div class="form-popup" id="adduser">
                                                    <div style="background-color: #CEE2C7;">

                                                    <form action="<?= base_url(); ?>admin/adduser" method="post" class="form-container" enctype='multipart/form-data'>
                                                        <h1>Add User</h1>
                                                        <div class="form-group row">
                                                                <label for="typeKH" class="col-xs-4 control-label regis-label">Loại tài khoản <i class="color-e65925">*</i>
                                                                </label>
                                                                <div class="col-xs-7 padding-right0">
                                                                    <input type="radio" name="typeKH" value="khach hang"> Khách hàng<br>
                                                                    <input type="radio" name="typeKH" value="chu nha dat"> Chủ nhà đất<br>  
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="name" class="col-xs-4 control-label regis-label">Họ tên, Doanh nghiệp <i class="color-e65925">*</i> </label>
                                                                <div class="col-xs-7 padding-right0">
                                                                    <input type="ra" id="name" name="name" class="form-control" placeholder="Ex:  Huấn Rose" required="">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="username" class="col-xs-4 control-label regis-label">Tài khoản <i class="color-e65925">*</i>
                                                                </label>
                                                                <div class="col-xs-7 padding-right0">
                                                                    <input type="text" id="username" name="username" class="form-control" placeholder="Ex: Meowwwwww" required="">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group row">
                                                                <label for="password" class="col-xs-4 control-label regis-label">Mật khẩu <i class="color-e65925">*</i>
                                                                </label>
                                                                <div class="col-xs-7 padding-right0">
                                                                    <input type="password" id="password" name="password" class="form-control" placeholder="Nhập mật khẩu" required="">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="ngaysinh" class="col-xs-4 control-label regis-label">Ngày sinh<i class="color-e65925">*</i></label>
                                                                <div class="col-xs-7 padding-right0">
                                                                    <input type="date" id="ngaysinh" name="ngaysinh" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="diachi" class="col-xs-4 control-label regis-label">Địa chỉ <i class="color-e65925">*</i>
                                                                </label>
                                                                <div class="col-xs-7 padding-right0">
                                                                    <input type="text" id="diachi" name="diachi" class="form-control" placeholder="Ex: Cà Mau">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="phone" class="col-xs-4 control-label regis-label">Di động <i class="color-e65925">*</i>
                                                                </label>
                                                                <div class="col-xs-7 padding-right0">
                                                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Ex: 090345789" required="">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="avatar" class="col-xs-4 control-label regis-label">Avatar <i class="color-e65925">*</i>
                                                                </label>
                                                                <div class="col-xs-7 padding-right0">
                                                                    <input type="file" id="avatar" name="avatar" class="form-control">
                                                                </div>
                                                            </div>

                                                        <button type="submit" class="btn btn-info">Submit</button>
                                                        <button type="button" class="btn btn-danger" onclick="closeForm()">Close</button>
                                                    </form>
                                                </div>
                                                
                                                <script>
                                                        function openForm() {
                                                          document.getElementById("adduser").style.display = "block";
                                                        }

                                                        function closeForm() {
                                                          document.getElementById("adduser").style.display = "none";
                                                        }   
                                                </script>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr><th rowspan="1" colspan="1">
                                                    Id
                                                </th><th rowspan="1" colspan="1">
                                                    Họ tên
                                                </th><th rowspan="1" colspan="1">
                                                    Username
                                                </th><th rowspan="1" colspan="1">
                                                    Password
                                                </th><th rowspan="1" colspan="1">
                                                    TypeKH
                                                </th><th rowspan="1" colspan="1">
                                                    Date of Birth
                                                </th><th rowspan="1" colspan="1">
                                                	Address
                                                </th><th rowspan="1" colspan="1">
                                                	Phone
                                                </th>	
                                                </th><th rowspan="1" colspan="1">
                                                	
                                                </th>
                                            </tr>

                                        </tfoot>
                                        <!-- <tfoot>
                                            <tr><th rowspan="1" colspan="1">
                                                    Id
                                                </th><th rowspan="1" colspan="1">
                                                    Browser
                                                </th><th rowspan="1" colspan="1">
                                                    Platform(s)
                                                </th><th rowspan="1" colspan="1">
                                                    Engine version
                                                </th><th rowspan="1" colspan="1">
                                                    CSS grade
                                                </th></tr>
                                        </tfoot> -->
                                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                                        <?php $i=0; ?>
                                    	<?php foreach ($mangketqua as $key => $value) {?>
	                                    	<tr class="gradeA odd">
	                                            <td class="  sorting_1">
	                                                <?= $value['id'] ?>
	                                            </td>
	                                            <td class="center ">
	                                                <?= $value['name'] ?>
	                                            </td>
	                                            <td class=" ">
	                                                <?= $value['username'] ?>
	                                            </td>
	                                            <td class=" ">
	                                                <?= $value['password'] ?>
	                                            </td>
                                                <td class=" ">
                                                    <?= $value['typeKH'] ?>
                                                </td>
	                                            <td class="center ">
	                                                <?= $value['ngaysinh'] ?>
	                                            </td>
	                                            <td class="center ">
	                                                <?= $value['diachi'] ?>
	                                            </td>
	                                            <td class="center ">
	                                                <?= $value['phone'] ?>
	                                            </td>
                                                <td>
                                                    <div class="file-preview-thumbnails">
                                                <div class="file-default-preview">
                                                    <img src="<?= $value['avatar'] ?>"  >
                                                </div>
                                            </div>
                                                </td>
	                                            <td class="center ">
	                                            	<buton class="btn btn-info" onclick="openForm<?= $value['id'] ?>()"><i class="fa fa-pencil"></i></buton>
	                                                <a href="<?= base_url(); ?>admin/deleteuser/<?= $value['id'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></a>
	                                            </td>
                                                <?php  ?>
	                                            <div class="form-popup" id="<?= $value['id'] ?>">
                                                    <div style="background-color: #c9b4ce;">
												  	<form action="<?= base_url(); ?>admin/edituser/<?= $value['id'] ?>" method="post" class="form-container" enctype='multipart/form-data'>
													    <h1>Edit User</h1>
														<div class="col-sm10 form-group">
															<label for="username"><b>Username</b></label>
													    	<input type="text" value="<?= $value['username'] ?>" name="username" >
														</div>
													    
													    <div class="col-sm10 form-group">
													    	<label for="password"><b>Password</b></label>
													    <input type="text" value="<?= $value['password'] ?>" name="password" >
													    </div>

													    <div class="form-group">
													    	<label for="name"><b>Fullname</b></label>
													    <input type="text" value="<?= $value['name'] ?>" name="name" >

													    </div>

													    <div class="form-group">
													    	 <label for="ngaysinh"><b>Date of birth</b></label>
													    <input type="text" value="<?= $value['ngaysinh'] ?>" name="ngaysinh" >
													    </div>

													    <div class="form-group">
													    	<label for="diachi"><b>Address</b></label>
													    <input type="text" value="<?= $value['diachi'] ?>" name="diachi" >
													    </div>

													    <div class="form-group">
													    	 <label for="phone"><b>Phone</b></label>
													    	<input type="text" value="<?= $value['phone'] ?>" name="phone" >
													    </div>

                                                         <div class="form-group">
                                                            <label for="email"><b>Avatar</b></label>
                                                            <input type="text" value="<?= $value['avatar'] ?>" name="avatar2" hidden>
                                                            <input type="file" value="" name="avatar" >
                                                        </div>

													    <button type="submit" class="btn btn-info">Save</button>
													    <button type="button" class="btn btn-danger" onclick="closeForm<?= $value['id'] ?>()">Close</button>
												  	</form>
												</div>
												<script>
                                                        function openForm<?= $value['id'] ?>() {
                                                          document.getElementById("<?= $value['id'] ?>").style.display = "block";
                                                        }

                                                        function closeForm<?= $value['id'] ?>() {
                                                          document.getElementById("<?= $value['id'] ?>").style.display = "none";
                                                        }	
												</script>
	                                        </tr>
                                            <?php $i++; ?>
                                    	<?php } ?>
                                    </tbody></table><div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_two_button btn-group datatable-pagination" id="DataTables_Table_0_paginate"><a class="paginate_disabled_previous" tabindex="0" role="button" id="DataTables_Table_0_previous" aria-controls="DataTables_Table_0"><span>Previous</span><i class="icon-chevron-left shaded"></i></a><a class="paginate_enabled_next" tabindex="0" role="button" id="DataTables_Table_0_next" aria-controls="DataTables_Table_0"><span>Next</span><i class="icon-chevron-right shaded"></i></a></div></div>
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