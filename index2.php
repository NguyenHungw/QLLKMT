<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hưng & Hùng</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">

    <link rel="stylesheet" href="sass/style.css" type="text/css"> <!-- change sass to css in the end  -->
      <!-- css form login-->
    <link rel="stylesheet" href="log.css" type="text/css">
    
 <?php
session_start();  
// Kết nối đến CSDL
$conn=new PDO("mysql:host=localhost; dbname=vuacomputer; charset=utf8","root","");
     

?>
    
</head>

<body>
  
    <!-- Hamburger (only visible on tablets and mobiles) -->
    <div class="top_menu__overlay"></div>
    <div class="hamburger__menu__wrapper">
        <div class="hamburger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="hamburger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price"><span>$10.00</span></div>
        </div>
        <div class="hamburger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>Viẹt Nam</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">English</a></li>
                    <li><a href="#">Việt nam</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="hamburger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Home</a></li>
                <li><a href="./shop.php">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        
                        <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                        <li><a href="./checkout.php">Check Out</a></li>
                        
                    </ul>
                </li>
                <li><a href="">Blog</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="hamburger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> nguyentienhung247@gmail.com</li>
                <li></li>
            </ul>
        </div>
    </div>
    <!-- Hamburger END -->

    <!-- Header Section (on tablets and mobiles it's hidden) -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <!-- Left side of header -->
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> nguyentienhung247@gmail.com</li>
                                <li>Miễn phí ship đơn hàng từ 1.000.000đ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <!-- Right side of header -->
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/vietnam.png" alt="">
                                <div>Việt Nam</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Việt Nam</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                Xin chào

                                
                            <?php
                            
                                if (isset($_SESSION['email'])){
                                    echo $_SESSION['email'].'<a href="./quantri/chucnang/dangxuat/dangxuat.php" style="color:red;">Đăng xuất</a>';

                                   
                                }
                                 ?>
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navigation -->
        <div class="container">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navigation -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.php">Trang chủ</a></li>
                            <li><a href="./index4.php">Cửa hàng</a></li>
                            <li><a href="./thanhtoan.php">Thanh toán</a>
                                
                            </li>
                           
                            <li><a href="./diachi.php">Địa chỉ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price"><span></span></div>
                    </div>
                </div>
            </div>
            <div class="hamburger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section END -->

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Menu</span>
                        </div>
                        
                        <ul class="menutop">
                            <li><a href="#" class="a"><img src="img/pc.png">&nbsp&nbsp&nbspPC</a></li>
                            <li><a href="#"class="a"><img src="img/iconlap.png">&nbsp&nbsp&nbspLaptop</a></li>
                            <li><a href="#"class="a"><img src="img/man.png">&nbsp&nbsp&nbspMàn Hình</a></li>
                            <li><a href="#"class="a"><img src="img/banphim.png">&nbsp&nbsp&nbspBàn phím , chuột</a></li>
                            <li><a href="#"class="a"><img src="img/in.png">&nbsp&nbsp&nbspMáy in</a></li>
                            <li><a href="#"class="a"><img src="img/banphim.png">&nbsp&nbsp&nbspNguồn</a></li>
                            <li><a href="#"class="a"><img src="img/ssd.png">&nbsp&nbsp&nbspVGA</a></li>
                            <li><a href="#"class="a"><img src="img/cpu.png">&nbsp&nbsp&nbspCPU</a></li>
                            <li><a href="#"class="a"><img src="img/ram.png">&nbsp&nbsp&nbspRam</a></li>
                            <li><a href="#"class="a"><img src="img/ssd.png">&nbsp&nbsp&nbspSDD</a></li>
                            <li><a href="#"class="a"><img src="img/banphim.png">&nbsp&nbsp&nbspKhác</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    Tất cả thể loại
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="Bạn đang cần tìm kiếm gì?">
                                <button type="submit" class="site-btn">Tìm kiếm</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>0387.820.895</h5>
                                <span>24/7 Support</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <!-- <span>FRESH FRUIT</span>
                            <h2>Vegetable <br/>100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p -->
                            <a href="#" class="primary-btn">ĐẶT NGAY</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section END -->

    <!-- Categories Section -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <!-- 4x3 -->
                    <div class="col-lg-3">
                        <a href="sp1.php">
                        <div class="categories__item set-bg" data-setbg="img/sanpham/1.png">
                            <!-- <h5><a href="#">Fresh Fruit</a></h5> -->
                        </div></a>
                    </div>
                    <div class="col-lg-3">
                        <a href="sp2.php"> <div class="categories__item set-bg" data-setbg="img/sanpham/2.png">
                            <!-- <h5><a href="#">Dried Fruit</a></h5> -->
                        </div></a>
                    </div>
                    <div class="col-lg-3">
                        <a href="sp3.php"><div class="categories__item set-bg" data-setbg="img/sanpham/3.png">
                            <!-- <h5><a href="#">Vegetables</a></h5> -->
                        </div></a>
                    </div>
                    <div class="col-lg-3">
                        <a href="sp4.php"><div class="categories__item set-bg" data-setbg="img/sanpham/4.png">
                            <!-- <h5><a href="#">Fruit Drinks</a></h5> -->
                        </div></a>
                        
                    </div>
                    <div class="col-lg-3">
                        <a href="sp5.php"></a><div class="categories__item set-bg" data-setbg="img/sanpham/5.png">
                            <!-- <h5><a href="#">Fresh Meat</a></h5> -->
                        </div></a>
                       
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section END -->

    <!-- Featured Section -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản phẩm nổi bật</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".oranges">PC</li>
                            <li data-filter=".fresh-meat">Ram</li>
                            <li data-filter=".vegetables">Laptop</li>
                            <li data-filter=".fastfood">CPU</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <!-- 8 items/products -->
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/sanpham/1.png">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="sp1.php">Laptop Lenovo 300e Chromebook Thế hệ thứ 2 (11,6 inch)</a></h6>
                            <h5>2,490,000₫</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/sanpham/2.png">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="sp2.php">Mainboard Asus H610M-K Prime DDR4</a></h6>
                            <h5>1,990,000₫</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/sanpham/3.png">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="sp3.php">CPU Intel Core i3 12100F Box Chính Hãng</a></h6>
                            <h5>2,550,000₫</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/sanpham/4.png">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="sp4.php">Màn hình LCD 24” Gigabyte G24F-EK FHD IPS 165Hz 1ms Freesync Gaming</a></h6>
                            <h5>3,890,000₫</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/sanpham/5.png">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="sp5.php">Ram DDR4 Corsair Vengeance LPX 8G/3600 Black Heat Spreader (CMK8GX4M1D3600C18)</a></h6>
                            <h5>690,000₫</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/sanpham/6.png">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="sp6.php">VGA Asus Gaming TUF OC 1660 Super 6G 2 Fan</a></h6>
                            <h5>4,690,000₫</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/sanpham/7.png">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="sp7.php">SSD Kingston 500G NV2 M.2 2280 NVMe (SNV2S/500G)</a></h6>
                            <h5>1,090,000₫</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/sanpham/8.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="sp8.php">Laptop Acer Nitro 5 AN515-45-R3SM N20C1_NH.QBMSV.005 R5-5600H/4G GTX 1650/8G/ 512G/ Win10/ 15.6”FHD IPS 144Hz (Đen)</a></h6>
                            <h5>18,790,000₫</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section END -->

    <!-- Banner -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <a href="#"><img src="img/1.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <a href="#"><img src="img/2.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner END -->

    <!-- Latest/Top Rated/Review Products Section -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <!-- Latest Products -->
                        <h4>Hàng mới về</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-product__slider__item">
                                <a href="sp4.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/sanpham/4.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Màn hình LCD 24” Gigabyte G24F-EK FHD IPS 165Hz 1ms Freesync Gaming</h6>
                                        <span>3,890,000₫</span>
                                    </div>
                                </a>
                                <a href="sp5.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/sanpham/5.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ram DDR4 Corsair Vengeance LPX 8G/3600 Black Heat Spreader (CMK8GX4M1D3600C18)</h6>
                                        <span>690,000₫</span>
                                    </div>
                                </a>
                                <a href="sp6.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/sanpham/6.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>VGA Asus Gaming TUF OC 1660 Super 6G 2 Fan</h6>
                                        <span>4,690,000₫</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="sp1.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/sanpham/1.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Laptop Lenovo 300e Chromebook Thế hệ thứ 2 (11,6 inch)</h6>
                                        <span>2,490,000₫</span>
                                    </div>
                                </a>
                                <a href="sp2.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/sanpham/2.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Mainboard Asus H610M-K Prime DDR4</h6>
                                        <span>1,990,000₫</span>
                                    </div>
                                </a>
                                <a href="sp3.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/sanpham/3.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>CPU Intel Core i3 12100F Box Chính Hãng</h6>
                                        <span>2,550,000₫</span>
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <!-- Top Rated Products -->
                        <h4>Top bán chạy</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-product__slider__item">
                                <a href="sp3.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/sanpham/3.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>CPU Intel Core i3 12100F Box Chính Hãng</h6>
                                        <span>2,550,000₫</span>
                                    </div>
                                </a>
                                <a href="sp4.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/sanpham/4.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Màn hình LCD 24” Gigabyte G24F-EK FHD IPS 165Hz 1ms Freesync Gaming</h6>
                                        <span>3,890,000₫</span>
                                    </div>
                                </a>
                                <a href="sp5.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/sanpham/5.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ram DDR4 Corsair Vengeance LPX 8G/3600 Black Heat Spreader (CMK8GX4M1D3600C18)</h6>
                                        <span>690,000₫</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="sp1.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/sanpham/1.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Laptop Lenovo 300e Chromebook Thế hệ thứ 2 (11,6 inch)</h6>
                                        <span>2,490,000₫</span>
                                    </div>
                                </a>
                                <a href="sp2.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/sanpham/2.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Mainboard Asus H610M-K Prime DDR4</h6>
                                        <span>1,990,000₫</span>
                                    </div>
                                </a>
                                <a href="sp6.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/sanpham/6.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>VGA Asus Gaming TUF OC 1660 Super 6G 2 Fan</h6>
                                        <span>4,690,000₫</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <!-- Review Products -->
                        <h4>Sản phẩm khác</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-product__slider__item">
                                <a href="sp1.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/sanpham/1.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Laptop Lenovo 300e Chromebook Thế hệ thứ 2 (11,6 inch)</h6>
                                        <span>2,490,000₫</span>
                                    </div>
                                </a>
                                <a href="sp3.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/sanpham/3.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>CPU Intel Core i3 12100F Box Chính Hãng</h6>
                                        <span>2,550,000₫</span>
                                    </div>
                                </a>
                                <a href="sp5.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/sanpham/5.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ram DDR4 Corsair Vengeance LPX 8G/3600 Black Heat Spreader (CMK8GX4M1D3600C18)</h6>
                                        <span>690,000₫</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="sp2.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/sanpham/2.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Mainboard Asus H610M-K Prime DDR4</h6>
                                        <span>1,990,000₫</span>
                                    </div>
                                </a>
                                <a href="sp4.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/sanpham/4.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Màn hình LCD 24” Gigabyte G24F-EK FHD IPS 165Hz 1ms Freesync Gaming</h6>
                                        <span>3,890,000₫</span>
                                    </div>
                                </a>
                                <a href="sp6.php" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/sanpham/6.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>VGA Asus Gaming TUF OC 1660 Super 6G 2 Fan</h6>
                                        <span>4,690,000₫</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest/Top Rated/Review Products Section END -->

    <!-- Blog Section -->
    
    <!-- Blog Section END -->

    <!-- Footer Section -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <!-- Logo & About -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.php"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Địa chỉ : Đại Học Thành Đô</li>
                            <li>Phone: 0387820895</li>
                            <li>Email: nguyentienhung247@gmail.com</li>
                        </ul>
                    </div>
                </div>

                <!-- Useful links -->
                <div class="col-lg-4 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>Chính sách chung</h6>
                        <ul>
                            <li><a href="#">Chích sách trả góp</a></li>
                            <li><a href="#">Chính sách bảo mật</a></li>
                            <li><a href="#">Chính sách khiếu nại</a></li>
                            <li><a href="#">Chính sách bảo hành</a></li>
                            <li><a href="#">Chính sách đổi - trả</a></li>
                            <li><a href="#">Chính sách bảo vệ thông tin</a></li>
                        </ul>
                        <h6>Giới thiệu chung</h6>
                        <ul>
                            <li><a href="#">Về chúng tôi</a></li>
                            <li><a href="#">Tư vấn mua hàng</a></li>
                            <li><a href="#">Tuyển dụng</a></li>
                            
                        </ul>
                    </div>
                </div>

                <!-- Newsletter Join -->
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Tham gia chương trình khuyến mại ngay bây giờ</h6>
                        <p>Nhập thông tin email để nhận được nhiều ưu đại nhất đến từ cửa hàng...</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright & Cards -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                Sinh viên thực hiện:<b><br>Nguyễn Tiến hưng
                                    <br> Phạm Thế Hùng 2200326</b>
                            </p>
                            <p>
                                Giao viên hướng dẫn : <b>Lê Thị vui</b>
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section END -->

    <!-- JS Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>

    <script src="js/main.js"></script>
</body>

</html>