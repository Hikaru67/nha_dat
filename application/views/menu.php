<div id="header">
        <div class="container">
    <div id="header-top">
        <div class="pull-left logo">
            <a href="/nha_dat/home">
                <img src="<?php echo(base_url()); ?>uploads/logo.png" width="200px" alt="LOGO NHADAT">
            </a>
        </div>
        <div class="pull-right">
            <ul class="list-inline">
                
            <!-- login vào tài khoản -->
            <?php 
                if(!isset($_SESSION['id'])){?> 
                    <?php  echo '<li>'; ?>
                    <?php  echo '<a rel="nofollow" href="/nha_dat/account/register"></i>Đăng ký</a>';?>
                
                
                    <!--  <span>hoặc</span>  -->
                    
                    <span>hoặc</span>
                    <a rel="nofollow" class="login" href="/nha_dat/account/login"></i>Đăng Nhập</a>
                </li>
            <?php } ?>
                <?php if(isset($_SESSION['id'])) {?>
                    
                <li class="sidebar-chosse" id="loged"  type="hidden">
                    <li class="name-profile-link">
                        <strong><a href="/nha_dat/account/my" class="color-e65925"><?php echo $_SESSION['name']; ?></a></strong>
                    </li>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-bars"></i>
                        </button><span style="color: red"></span>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a href="/nha_dat/account/myprofile"><i class="fa fa-user"></i>Thông tin cá nhân</a>
                            </li>
                            <li>
                                <a href="/nha_dat/account/listpost"><i class="fa fa-laptop"></i>Các tin đã đăng</a>
                            </li>
                            
                            <li>
                                <a href="/nha_dat/account/changepassword"><i class="fa fa-lock"></i> Đổi mật khẩu</a>
                            </li>

                            <li>
                                <a href="/nha_dat/account/logout"><i class="fa fa-sign-out"></i>Thoát</a>
                            </li>
                        </ul>

                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    
    <div id="header-menu">
        <div class="pull-left">
            <ul class="list-inline">
                <li>
                    <a href="/nha_dat/home/" class="main-menu">Trang chủ</a>                </li>

                <li>
                    <a href="/nha_dat/home/showPost?typePost=post_ban&typeBDS=0" class="main-menu">Bán <i class="fa fa-caret-down"></i></a>
                    <div class="menu-child menu-child_temp">
                                                
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="nha">
                                    <div class="name"><a href="/nha_dat/home/showPost?typePost=post_ban&typeBDS=nha">Nhà</a></div>
                                    
                                </div>
                                
                            </div>
                            <div class="col-xs-6">
                                <div class="dat">
                                    <div class="name"><a href="/nha_dat/home/showPost?typePost=post_ban&typeBDS=dat">Đất</a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </li>

                <li>
                    <a href="/nha_dat/home/showPost?typePost=post_cho_thue&typeBDS=0" class="main-menu">Cho thuê <i class="fa fa-caret-down"></i></a>
                    <div class="menu-child menu-child_temp">

                        <div class="row">
                            <div class="col-xs-6">
                                <div class="nha">
                                    <div class="name"><a href="/nha_dat/home/showPost?typePost=post_cho_thue&typeBDS=nha">Nhà</a></div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="dat">
                                    <div class="name"><a href="/nha_dat/home/showPost?typePost=post_cho_thue&typeBDS=dat">Đất</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="/nha_dat/home/showPost?typePost=post_can_mua&typeBDS=0" class="main-menu">Cần mua<i class="fa fa-caret-down"></i></a>
                    <div class="menu-child">
                       
                        <div class="col-xs-6">
                            <div class="buy">
                                <div class="name"><a href="/nha_dat/home/showPost?typePost=post_can_mua&typeBDS=nha">Nhà</a></div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="rent">
                                <div class="name"><a href="/nha_dat/home/showPost?typePost=post_can_mua&typeBDS=dat">Đất</a></div>
                            </div>
                        </div>


                    </div>
                </li>

                <li>
                    <a href="/nha_dat/home/showPost?typePost=post_can_thue&typeBDS=0" class="main-menu">Cần thuê<i class="fa fa-caret-down"></i></a>
                    <div class="menu-child">
                       
                        <div class="col-xs-6">
                            <div class="buy">
                                <div class="name"><a href="/nha_dat/home/showPost?typePost=post_can_thue&typeBDS=nha">Nhà</a></div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="rent">
                                <div class="name"><a href="/nha_dat/home/showPost?typePost=post_can_thue&typeBDS=dat">Đất</a></div>
                            </div>
                        </div>


                    </div>
                </li>

    <script>
        function myFuntion() {
            <?php if(!isset($_SESSION['id'])) { ?>
                alert("Đăng nhập để tiếp tục");
            <?php } ?>
        }
    </script>
                <li>
                    <a href="" onclick="myFuntion()" class="main-menu">Đăng bài <i class="fa fa-caret-down"></i></a>
                    <?php if($_SESSION['Loged']) {?>
                        <div class="menu-child">
                            <?php if($_SESSION['typeKH'] == 'chu nha dat') { ?>
                            <div class="col-xs-6">
                                <div class="post_buy">
                                    <div id="post_buy" class="name"><a href="/nha_dat/home/new_post?typePost=post_ban">Cần bán</a></div>
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="post_rent">
                                    <div class="name"><a href="/nha_dat/home/new_post?typePost=post_cho_thue">Cho thuê</a></div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php if($_SESSION['typeKH'] == 'khach hang') { ?>
                            <div class="col-xs-6">
                                <div class="post_buy">
                                    <div class="name"><a href="/nha_dat/home/new_post?typePost=post_can_mua">Cần mua</a></div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="post_rent">
                                    <div class="name"><a href="/nha_dat/home/new_post?typePost=post_can_thue">Cần thuê</a></div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                    <?php } ?>
                </li>
            </ul>
        </div>
        <!-- <div class="pull-right post-new">
            <a href="/newpost"><i class="fa fa-pencil-square-o"></i> <span>đăng tin nhanh</span></a>        
        </div> -->
    </div>

</div>    
</div>
