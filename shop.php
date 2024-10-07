<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani</title>

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

    <link rel="stylesheet" href="sass/style.css" type="text/css">
    <?php

 session_start();                 
// Kết nối đến CSDL
$conn=new PDO("mysql:host=localhost; dbname=demo; charset=utf8","root","");
     

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
                            <?php
                                
                                if (isset($_SESSION['tendangnhap1'])){
                                    echo $_SESSION['tendangnhap1'].'<a href="index.php">Đăng xuất</a>';
                                   
                                   
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
                            <li><a href="./shop.php">Cửa hàng</a></li>
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

    <!-- Breadcrumb Section -->
    <section class="breadcrumb-section set-bg" data-setbg="img/11.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Chi tiết sản phẩm</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Trang chủ</a>
                            <a href="./index.php">Chi tiết</a>
                            <span>Sản phẩm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section END -->

    <!-- Product Section -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Sản phẩm</h4>
                            <ul>
                                <li><a href="#">PC</a></li>
                                <li><a href="#">Laptop</a></li>
                                <li><a href="#">Màn hình</a></li>
                                <li><a href="#">Ram</a></li>
                                <li><a href="#">CPU</a></li>
                                <li><a href="#">SSD</a></li>
                                <li><a href="#">Máy in</a></li>
                                <li><a href="#">Khác</a></li>
                                
                            </ul>
                        </div>
                        
                        
                       
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Hàng hót</h4>
                                <div class="latest-product__slider owl-carousel">
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
                                    <div class="latest-prdouct__slider__item">
                                        <a href="sp4.php" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="img/sanpham/4.png" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Màn hình LCD 24” Gigabyte G24F-EK FHD IPS 165Hz 1ms Freesync Gaming</h6>
                                                <span>3,890,000₫
                                                </span>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Hàng khuyến mại</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/sanpham/1.png">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            
                                            <h5><a href="sp1.php">Laptop Lenovo 300e Chromebook Thế hệ thứ 2 (11,6 inch)</a></h5>
                                            <div class="product__item__price">2,490,000₫ <span>3,000,000đ</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/sanpham/2.png">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                     
                                            <h5><a href="sp2.php">Mainboard Asus H610M-K Prime DDR4</a></h5>
                                            <div class="product__item__price">1,990,000₫ <span>2,000,000đ</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/sanpham/3.png">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                           
                                            <h5><a href="sp3.php">CPU Intel Core i3 12100F Box Chính Hãng</a></h5>
                                            <div class="product__item__price">2,550,000₫ <span>3,000,000đ</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/sanpham/4.png">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            
                                            <h5><a href="sp4.php">Màn hình LCD 24” Gigabyte G24F-EK FHD IPS 165Hz 1ms Freesync Gaming</a></h5>
                                            <div class="product__item__price">3,890,000₫ <span>4,500,000đ</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/sanpham/5.png">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                          
                                            <h5><a href="sp5.php">Ram DDR4 Corsair Vengeance LPX 8G/3600 Black Heat Spreader (CMK8GX4M1D3600C18)</a></h5>
                                            <div class="product__item__price">690,000₫ <span>1,000,000đ</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/sanpham/6.png">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                           
                                            <h5><a href="sp6.php">VGA Asus Gaming TUF OC 1660 Super 6G 2 Fan</a></h5>
                                            <div class="product__item__price">4,690,000₫<span>5,500,000đ</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sắp xếp theo</span>
                                    <select>
                                        <option value="0">Bán chạy</option>
                                        <option value="0">Giá tiền</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>16</span> Products found</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/sanpham/1.png">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="sp1.php">Laptop Lenovo 300e Chromebook Thế hệ thứ 2 (11,6 inch)</a></h6>
                                    <h5>2,490,000₫</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/sanpham/2.png">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="sp2.php">Mainboard Asus H610M-K Prime DDR4</a></h6>
                                    <h5>1,990,000₫</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/sanpham/3.png">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="sp3.php">CPU Intel Core i3 12100F Box Chính Hãng</a></h6>
                                    <h5>2,550,000₫</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/sanpham/4.png">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="sp4.php">Màn hình LCD 24” Gigabyte G24F-EK FHD IPS 165Hz 1ms Freesync Gaming</a></h6>
                                    <h5>3,890,000₫</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/sanpham/5.png">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="sp5.php">Ram DDR4 Corsair Vengeance LPX 8G/3600 Black Heat Spreader (CMK8GX4M1D3600C18)</a></h6>
                                    <h5>690,000₫</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/sanpham/6.png">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="sp6.php">
                                        VGA Asus Gaming TUF OC 1660 Super 6G 2 Fan</a></h6>
                                    <h5>4,690,000₫</h5>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

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