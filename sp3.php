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

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="img/sanpham/3.png" alt="">
                        </div>
                        
                    
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>CPU Intel Core i3 12100F Box Chính Hãng</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(11 reviews)</span>
                        </div>
                        <div class="product__details__price">2,550,000₫</div>
                        <br>
                        <a href="#" class="primary-btn">Đặt hàng</a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>Trạng thái</b> <span>Còn hàng</span></li>
                            <li><b>Giao hàng</b> <span>Trong 1 ngày. <samp>Miễn phí vận chuyển ngay hôm nay</samp></span></li>
                            <li><b>Trọng lượng</b> <span>1,35kg</span></li>
                            <li><b>Chia sẻ</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <!-- Bootstrap Dynamic Tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Thông số sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Thông tin</a>
                            </li>
                            
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Thông số sản phẩm</h6>
                                    <table>
                                        <tr style="background-color:rgb(235, 246, 255) ; height: auto; width: 500px;">
                                            <td style="width: 250px;padding-left: 10px;" >Thương hiệu</td>
                                            <td>Intel</td>
                                        </tr><tr style="height: auto; width: 500px;">
                                            <td style="width: 250px;padding-left: 10px;" >Thế hệ</td>
                                            <td>Core i3 Thế hệ thứ 12</td>
                                        </tr>
                                        <tr style="background-color:rgb(235, 246, 255) ; height: auto; width: 500px;">
                                            <td style="width: 250px;padding-left: 10px;" >Tên gọi</td>
                                            <td>Core i3 Thế hệ thứ 12</td>
                                        </tr>
                                        <tr style="height: auto; width: 500px;">
                                            <td style="width: 250px;padding-left: 10px;" >Socket</td>
                                            <td>FCLGA 1700</td>
                                        </tr>
                                        <tr style="background-color:rgb(235, 246, 255) ; height: auto; width: 500px;">
                                            <td style="width: 250px;padding-left: 10px;" >Tên thế hệ</td>
                                            <td>Alder Lake</td>
                                        </tr>
                                        <tr style="height: auto; width: 500px;">
                                            <td style="width: 250px;padding-left: 10px;" >Số nhân</td>
                                            <td>4</td>
                                        </tr>
                                        <tr style="background-color:rgb(235, 246, 255) ; height: auto; width: 500px;">
                                            <td style="width: 250px;padding-left: 10px;" >số luồng</td>
                                            <td>8</td>
                                        </tr>
                                        <tr style=" height: auto; width: 500px;">
                                            <td style="width: 250px;padding-left: 10px;" >Tốc độ cơ bản</td>
                                            <td>Performance-core Max Turbo Frequency: 4.3 GHz</td>
                                        </tr>
                                        <tr style="background-color:rgb(235, 246, 255) ; height: auto; width: 500px;">
                                            <td style="width: 250px;padding-left: 10px;" >Performance-core Base Frequency</td>
                                            <td>3.30 GHz</td>
                                        </tr>
                                        <tr style=" height: auto; width: 500px;">
                                            <td style="width: 250px;padding-left: 10px;" >Cache</td>
                                            <td>12MB</td>
                                        </tr>
                                        <tr style="background-color:rgb(235, 246, 255) ; height: auto; width: 500px;">
                                            <td style="width: 250px;padding-left: 10px;" >Total L2 Cache</td>
                                            <td>5MB</td>
                                        </tr>
                                        <tr style=" height: auto; width: 500px;">
                                            <td style="width: 250px;padding-left: 10px;" >Hỗ trợ 64-bit</td>
                                            <td>Có</td>
                                        </tr>
                                        <tr style="background-color:rgb(235, 246, 255) ; height: auto; width: 500px;">
                                            <td style="width: 250px;padding-left: 10px;" >Hỗ trợ 64-bit</td>
                                            <td>Không</td>
                                        </tr>
                                        
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Thông tin</h6>
                                    
                                        <h3>Giới thiệu CPU Intel Core i3 12100F ( Alder Lake | Socket 1700 )</h3>
                                        <ul>
                                           <li> Bộ Sưu Tập Sản Phẩm: 12th Generation Intel® Core™ i3 Processors
                                        <li>Tên mã: Alder Lake trước đây của các sản phẩm
                                        <li>Số hiệu Bộ xử lý: i3-12100F
                                         </ul>

                                        <h4>Thông tin kỹ thuật CPU</h4>
                                        <ul>
                                        <li>ố lõi: 4
                                        <li># of Performance-cores: 4
                                        <li># of Efficient-cores: 0
                                        <li>Số luồng: 8
                                        <li>Tần số turbo tối đa: 4.30 GHz
                                        <li>Performance-core Max Turbo Frequency: 4.30 GHz
                                        <li>Performance-core Base Frequency: 3.30 GHz
                                        <li> Bộ nhớ đệm: 12 MB Intel® Smart Cache
                                        <li>  Total L2 Cache: 5 MB
                                        <li>  Processor Base Power: 58 W
                                        <li>  Maximum Turbo Power: 89 W
                                        </ul>
                                       <h4> Thông số bộ nhớ</h4>
                                        <ul>
                                        <li>Dung lượng bộ nhớ tối Đa (tùy vào loại bộ nhớ): 128 GB
                                        <li>Các loại bộ nhớ: Up to DDR5 4800 MT/s | Up to DDR4 3200 MT/s
                                        <li>Số Kênh Bộ Nhớ Tối Đa: 2
                                        <li>Băng thông bộ nhớ tối đa: 76.8 GB/s
                                         </ul>
                                        <h4>Các tùy chọn mở rộng</h4>
                                        <ul>
                                        <li>Direct Media Interface (DMI) Revision: 4.0
                                        <li>Khả năng mở rộng: 1S Only
                                       <li> Phiên bản PCI Express:  5.0 and 4.0
                                        <li>Cấu hình PCI Express: Up to 1×16+4, 2×8+4
                                        <li>Số cổng PCI Express tối đa: 20
                            
                                        <li>Max # of DMI Lanes: 8
                                        
                                        </ul>
                                        <h4>Thông số gói</h4>
                                        <ul>
                                        <li>Hỗ trợ socket: FCLGA1700
                                        <li>Cấu hình CPU tối đa: 1
                                        <li> Thông số giải pháp Nhiệt: PCG 2020C
                                            <li>TJUNCTION: 100°C
                                                <li> Kích thước gói: 45.0 mm x 37.5 mm.
                                        </ul>
                                        <h4>Các công nghệ tiên tiến</h4>
                                        <ul>
                                            <li>Intel® Gaussian & Neural Accelerator: 3.0
                                                <li>Intel® Thread Director: Không
                                                    <li>Tăng cường học sâu Intel® Deep Learning Boost (Intel® DL Boost): Có
                                                        <li>Hỗ trợ bộ nhớ Intel® Optane™: Có
                                                            <li>Công Nghệ Intel® Speed Shift: Có
                                                                <li>Công Nghệ Intel® Turbo Boost Max 3.0: Không
                                                                    <li>Công nghệ Intel® Turbo Boost: 2.0
                                                                        <li>Công nghệ siêu Phân luồng Intel®: Có
                                                                            <li> Công nghệ ảo hóa Intel® (VT-x): Có
                                                                              <li> Công nghệ ảo hóa Intel® cho nhập/xuất được hướng vào (VT-d): Có
                                                                                    <li>  Intel® VT-x với bảng trang mở rộng: Có
                                                                                        <li>  Intel® 64: Có
                                                                                            <li> Bộ hướng dẫn: 64-bit
                                                                                                <li> Phần mở rộng bộ hướng dẫn: Intel® SSE4.1, Intel® SSE4.2, Intel® AVX2
                                                                                                    <li> Trạng thái chạy không: Có
                                                                                                        <li> Công nghệ Intel SpeedStep® nâng cao: Có
                                                                                                            <li>Công nghệ theo dõi nhiệt: Có
                                                                                                                <li> Intel® Volume Management Device (VMD): Có
                                        </ul>
                                        <h4>Bảo mật & độ tin cậy</h4>
                                        <ul>
                                        <li>Intel® AES New Instructions: Có
                                            <li>   Khóa bảo mật: Có
                                                <li>  Intel® OS Guard: Có
                                                    <li>  Bit vô hiệu hoá thực thi: Có
                                                        <li> Intel® Boot Guard: Có
                                                            <li> Điều Khiển Thực Thi Theo Từng Chế Độ (MBE): Có
                                                                <li> Intel® Control-Flow Enforcement Technology: Có
                                    </ul>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section END -->

    <!-- Related Product Section -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Sản phẩm liên quan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
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
                <div class="col-lg-3 col-md-4 col-sm-6">
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
                <div class="col-lg-3 col-md-4 col-sm-6">
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
                <div class="col-lg-3 col-md-4 col-sm-6">
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
            </div>
        </div>
    </section>
    <!-- Related Product Section END -->

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