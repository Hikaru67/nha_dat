<!DOCTYPE html>
<html lang="en">
<head>
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
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html"><?php echo $_SESSION['adname']; ?> </a>
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
                    
                </div>
                <div class="row">
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
                                            <tr role="row">
                                            	<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                                    Rendering engine
                                                : activate to sort column descending" style="width: 10px;">
                                                    Id
                                                </th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                    Browser
                                                : activate to sort column ascending" style="width: 10px;">
                                                    IdUser
                                                </th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                    Platform(s)
                                                : activate to sort column ascending" style="width: 50px;">
                                                    TypePost
                                                </th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                    Engine version
                                                : activate to sort column ascending" style="width: 50px;">
                                                    TypeBDS
                                                </th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                    CSS grade
                                                : activate to sort column ascending" style="width: 100px;">
                                                    Title
                                                </th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                    CSS grade
                                                : activate to sort column ascending" style="width: 80px;">
                                                    Address
                                                </th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                    CSS grade
                                                : activate to sort column ascending" style="width: 80px;">
                                                    Price
                                                </th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                    CSS grade
                                                : activate to sort column ascending" style="width: 50px;">
                                                    Diện tích
                                                </th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                    CSS grade
                                                : activate to sort column ascending" style="width: 50px;">
                                                    Diện tích SD
                                                </th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                    CSS grade
                                                : activate to sort column ascending" style="width: 50px;">
                                                    Chi tiết
                                                </th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="
                                                    CSS grade
                                                : activate to sort column ascending" style="width: 50px;">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr><th rowspan="1" colspan="1">
                                                    Id
                                                </th><th rowspan="1" colspan="1">
                                                    IdUser
                                                </th><th rowspan="1" colspan="1">
                                                    TypePost
                                                </th><th rowspan="1" colspan="1">
                                                    TypeBDS
                                                </th><th rowspan="1" colspan="1">
                                                    Title
                                                </th><th rowspan="1" colspan="1">
                                                    Address
                                                </th><th rowspan="1" colspan="1">
                                                	Price
                                                </th><th rowspan="1" colspan="1">
                                                	Diện tích
                                                </th><th rowspan="1" colspan="1">
                                                    Diện tích SD
                                                </th><th rowspan="1" colspan="1">
                                                    Chi tiết
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

                                    	<?php foreach ($mangketqua as $key => $value) {?>
	                                    	<tr class="gradeA odd">
	                                            <td class="  sorting_1">
	                                                <?= $value['id'] ?>
	                                            </td>
	                                            <td class="center ">
	                                                <?= $value['id_user'] ?>
	                                            </td>
	                                            <td class=" ">
	                                                <?= $value['typePost'] ?>
	                                            </td>
                                                <td class=" ">
                                                    <?= $value['typeBDS'] ?>
                                                </td>
	                                            <td class=" ">
	                                                <?= $value['title'] ?>
	                                            </td>
                                                <td class="center ">
                                                    <?= $value['price'] ?> Triệu
                                                </td>
	                                            <td class="center ">
	                                                <?= $value['address'] ?>
	                                            </td>
	                                            <td class="center ">
	                                                <?= $value['dientich'] ?>m2
	                                            </td>

                                                
                                                <td class="center ">
                                                    <?php if (($value['dientich_sd']!="")) {
                                                        echo $value['dientich_sd'];
                                                    }
                                                    else {
                                                         echo '0';
                                                     } ?>m2
                                                </td>

                                                <td class="center ">
                                                    <?= $value['chitiet'] ?>
                                                </td>
                                                
	                                            <td class="center ">
	                                                <a href="deletepost/<?= $value['id'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></a>
	                                            </td>
	                                        </tr>

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
      
    

</body>
</html>