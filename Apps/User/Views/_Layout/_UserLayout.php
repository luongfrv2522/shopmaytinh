    <?php 
    $countIn = 0;
    $urlFileCount = 'Public/count.dat';
    if(file_exists($urlFileCount)){
        //fopen(command,mode);
        $data=@file($urlFileCount); // chuyển đổi file sang mảng
        $countIn = $data[0];
        //Ghi moi
        $file=@fopen($urlFileCount, 'w');
        if($file){
            $data= ++$countIn;
            fwrite($file, $data);
            fclose($file);
        }
    }
    //Tạo giỏ hàng
    $gh = BaseClass::GetSession('GioHang');
    $SoLuongDatHang = 0;
    if($gh !== ''){
        $SoLuongDatHang = $gh->Quantity;
    }
    //session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ShopMayTinh</title>
    <base href="<?=BaseURI::getBaseURL()?>/">
    <?php 
    PublicLoader::Load("Content/Css/Common.php");
    PublicLoader::Load("Content/Scripts/Common.php");
    ?>
    <!-- PAGE LEVEL STYLES -->
    <link href="Public/assets/css/bootstrap-fileupload.min.css" rel="stylesheet" />
    <!-- BOOTSTRAP STYLES-->
    <link href="Public/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="Public/assets/css/font-awesome.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div id="header">
            <div class="row">
                <!-- search -->
                <div id="search" class="col-md-4 col-sm-12 col-xs-12">
                    <form method="post" action="Main/List" class="search-form">
                        <input type="submit" name="submit" value="">
                        <input id="search-input" type="text" name="Search" placeholder="Tìm kiếm sản phẩm...">
                    </form>
                </div>
                <!-- end search -->

                <!-- y-cart -->
                <div id="y-cart" class="col-md-8 col-sm-12 col-xs-12">
                    <div id="y-cart-main">
                        <p>Bạn đang có <span><?=$SoLuongDatHang?></span> sản phẩm</p>
                        <a href="GioHang">Chi tiết giỏ hàng</a>
                    </div>
                </div>
                <!-- end y-cart -->
            </div>
        </div>
        <!-- End Header -->
        <!-- Banner  -->
        <div id="banner">
            <div class="row">           
                <div id="logo" class="col-md-4 col-sm-12 col-xs-12">
                    <h1>
                        <a href="#">
                            <img src="Public/Content/Images/Icon/logo1.png">
                        </a>
                    </h1>
                </div>
                <div id="ship" class="col-md-8 col-sm-12 col-xs-12">
                    <img src="Public/Content/Images/Icon/banner.png">
                </div>            
            </div>        
        </div>
        <!-- End Banner -->

        <div class="loading"></div>
        <!-- Body -->
        <div id="body">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div id="menu-but" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                    <!-- BEGIN Danh mục sản phảm -->
                    <div id="menu" class="sidebar collapse navbar-collapse">
                        <?php ViewLoader::LoadNoneLayout('LeftMenu.php'); ?>
                    </div>
                    <!-- END Danh mục sản phẩm -->
                    <div id="banner-l">
                        <h2 class="h2-bar">đối tác</h2>
                        <a href="#">
                            <img class="img-thumbnail" src="Public/Content/Images/Icon/banner02.jpg">
                        </a>
                    </div>

                    <div id="counter">
                        <h2 class="h2-bar">thống kê truy cập</h2>

                        <p>Đã có <span class="olded"><?=$countIn?></span> lượt truy cập</p>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div id="slider">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                <li data-target="#myCarousel" data-slide-to="4"></li>
                                <li data-target="#myCarousel" data-slide-to="5"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="Public/Content/Images/Icon/sls01.jpg" alt="Chania" style="width: 800px;height: 320px;">
                                </div>

                                <div class="item">
                                    <img src="Public/Content/Images/Icon/sls02.png" alt="Chania" style="width: 800px;height: 320px;">
                                </div>
                                <!--   
                                <div class="item">
                                    <img src="Public/Content/Images/Icon/sls03.png" alt="Flower">
                                </div>
                                -->
                                <div class="item">
                                    <img src="Public/Content/Images/Icon/sls03.jpg" alt="Flower" style="width: 800px;height: 320px;">
                                </div>
                                <!--  
                                <div class="item">
                                    <img src="Public/Content/Images/Icon/sls05.png" alt="Flower">
                                </div>
                                -->
                                <div class="item">
                                    <img src="Public/Content/Images/Icon/sls04.png" alt="Flower" style="width: 800px;height: 320px;">
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div id="main">
                        <?php require BaseClass::GetSession('_pageBody'); ?>
                    </div>



                </div>


            </div>
        </div>
    </div>  
    <!-- End Body -->

    <div id="brand">
        <div class="row">
            <div class="col-md-12 text-center">
                <img class="img-thumbnail" src="Public/Content/Images/Icon/brand.png">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div id="footer">
        <div class="row">
            <div id="footer-main" class="col-md-12 col-sm-12 col-xs-12">
                <h4>Phòng bán hàng trực tuyến</h4>
                <p><b>Trụ sở chính:</b> Tầng 3, Số 152-154 Trần Duy Hưng, Cầu Giấy, Hà Nội. | <b>Hotline</b> 1900 0339</p> 
                <p><b>Cơ sở 2:</b> Số 25 Ngõ 178/71 Tây Sơn, Đống Đa, Hà Nội | <b>Hotlin</b>e 0988 550 552</p>
                <p>Email: thienan@gmail.com</p>
            </div>   
        </div>
    </div>
    <!-- End Footer -->

</div>
<!-- BOOTSTRAP SCRIPTS -->
<script src="Public/assets/js/bootstrap.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="Public/assets/js/jquery.metisMenu.js"></script>
</body>
</html>
<?php exit(); ?>