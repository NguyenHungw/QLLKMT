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
                                src="img/sanpham/8.jpg" alt="">
                        </div>
                        
                    
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>
                            Laptop Acer Nitro 5 AN515-45-R3SM N20C1_NH.QBMSV.005 R5-5600H/4G GTX 1650/8G/ 512G/ Win10/ 15.6”FHD IPS 144Hz (Đen)</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(01 reviews)</span>
                        </div>
                        <div class="product__details__price">18,790,000₫</div>
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
                                    <h6>Cấu hình chi tiết</h6>
                                    <table>
                                        <tr style="background-color:rgb(235, 246, 255) ; height: auto; width: 500px;">
                                            <td style="width: 250px;padding-left: 10px;" >SKU</td>
                                            <td>LT.AC.NT5.AN515-45-R3SM</td>
                                        </tr><tr style="height: auto; width: 500px;">
                                            <td style="width: 250px;padding-left: 10px;" >CPU</td>
                                            <td>AMD Ryzen 5 5600H 3.3GHz up to 4.2GHz 16MB, 6 nhân 12 luồng</td>
                                        </tr>
                                        <tr style="background-color:rgb(235, 246, 255) ; height: auto; width: 500px;">
                                            <td style="width: 250px;padding-left: 10px;" >Màn hình</td>
                                            <td>15.6″ FHD (1920 x 1080) IPS, 144Hz, Acer ComfyViewTM LED-backlit TFT LCD, 65% sRGB</td>
                                        </tr>
                                        <tr style="height: auto; width: 500px;">
                                            <td style="width: 250px;padding-left: 10px;" >RAM</td>
                                            <td>8GB DDR4 3200MHz (2x SO-DIMM socket, up to 64GB SDRAM)</td>
                                        </tr>
                                        <tr style="background-color:rgb(235, 246, 255) ; height: auto; width: 500px;">
                                            <td style="width: 250px;padding-left: 10px;" >Đồ họa</td>
                                            <td>NVIDIA GeForce GTX 1650 4GB GDDR6 + AMD Radeon™ Graphics</td>
                                        </tr>
                                        <tr style="height: auto; width: 500px;">
                                            <td style="width: 250px;padding-left: 10px;" >Ổ cứng</td>
                                            <td>512GB SSD M.2 PCIE (Còn trống 1 khe SSD M.2 PCIE và 1 khe 2.5″ SATA)</td>
                                        </tr>
                                        <tr style="background-color:rgb(235, 246, 255) ; height: auto; width: 500px;">
                                            <td style="width: 250px;padding-left: 10px;" >Hệ điều hành</td>
                                            <td>Windows 10 Home</td>
                                        </tr>
                                        <tr style="height: auto; width: 500px;">
                                            <td style="width: 250px;padding-left: 10px;" >Pin</td>
                                            <td>4 Cell 57WHr</td>
                                        </tr>
                                        <tr style="background-color:rgb(235, 246, 255) ; height: auto; width: 500px;">
                                            <td style="width: 250px;padding-left: 10px;" >Trọng lượng</td>
                                            <td>2.20 kg</td>
                                        </tr>
                                        
                                        
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Thông tin</h6>
                                    <p>
                                        <h4>Giới thiệu Laptop Acer Nitro 5 AN515-45-R3SM</h4>
<br>Thiết kế mạnh mẽ hơn
<br>Laptop Acer Nitro 5 AN515-45-R3SM (AMD R5-5600H/ 8GB DDR4 3200MHz/ 512GB SSD M.2 PCIE/ GTX 1650 4GB GDDR6/ 15.6 FHD IPS, 144Hz/ Win10) có kích thước màn hình là 15,6 inch cùng với hai tùy chọn AMD Ryzen 5 5600H và AMD Ryzen 7 5800H. Tận hưởng trải nghiệm chơi game mượt mà, không bị nhòe với tốc độ làm mới 144Hz. Màn hình viền mỏng cũng đã được tăng tỷ lệ so với thân máy lên 80%. Mức độ sáng cũng được tăng lên 300 nits, trước đây chỉ là 275 nits ở phiên bản Nitro 5 trước đây.

<br>Thiết kế bên ngoài cũng nổi bật hơn một chút, với một mảng màu đỏ cho các vây ở mặt sau của laptop. Thay đổi này thay thế cho bản lề màu đỏ, êm hơn so với năm ngoái. Bàn phím RGB 4 vùng có đèn nền giúp làm phong phú trải nghiệm chơi game và đẹp hơn. Nitro 5 AMD 2021 AN515-45-R3SM cũng được thiết kế để đáp ứng mọi nhu cầu chơi game nhờ cấu hình, tính năng và vị trí thiết kế được điều chỉnh đặc biệt cho các hoạt động chơi game.

<br>Card đồ họa với GPU NVIDIA GTX 1650
<br>NVIDIA GeForce GTX 1650 được hỗ trợ bởi hiệu suất đồ họa cải tiến của kiến ​​trúc NVIDIA Turing . Được thiết kế để mang đến sự kết hợp mạnh mẽ giữa đổi mới chơi game, đồ họa thế hệ tiếp theo và tiết kiệm năng lượng. Với hiệu suất nhanh hơn tới 80% so với GTX 1050, đây là bộ card siêu tốc cho các trò chơi phổ biến nhất hiện nay và ngay cả với các tựa game hiện đại.

<br>Dễ dàng nâng cấp dung lượng
<br>Ngoài việc sử dụng phần cứng mới nhất như bộ vi xử lý CPU AMD Ryzen 5000 series và dòng card NVIDIA GeForce GTX hoặc RTX 30 series, Nitro 5 AMD 2021 cũng bao gồm các khả năng nâng cấp giúp dòng Nitro vượt trội hơn so với phiên bản cùng loại.

<br>Đi kèm với khả năng tùy chỉnh bộ nhớ đến các tùy chọn lưu trữ. Người dùng có thể lắp RAM dung lượng lên đến 64GB, cũng như hai khe cắm NVMe SSD và một khe cắm SSD SATA 2,5 inch. Ngoài cổng Ethernet E2600, dành riêng cho biến thể Intel, cổng USB C cũng hỗ trợ Thunderbolt 4 đa chức năng và có tốc độ truyền dữ liệu nhanh hơn gấp 8 lần so với USB 3.0 thông thường.

<br>Hai khe cắm SSD giúp việc thêm một SSD vào Nitro 5 gaming thậm chí còn dễ dàng hơn. Không chỉ vậy, hai khe cắm này đã hỗ trợ giao thức NVMe và được trang bị một bộ tản nhiệt SSD đặc biệt trong mỗi khe, giúp hiệu suất SSD không bị giảm khi nhiệt độ tăng lên.

<br>Nếu bạn vẫn muốn tăng dung lượng lưu trữ của mình nhiều để tiện cho công việc? Thì chúng ta có hai khe cắm RAM có thể được lấp đầy lên đến 32GB RAM DDR4 3200 MHz hỗ trợ kênh đôi.

<br>Intel Wi-Fi 6 AX201 (802.11ax) và Killer Ethernet E2600
<br>Một tính năng mới khác cho mô hình năm nay, Acer Nitro 5 2021 có Intel Wi-Fi 6 AX201 (802.11ax) và Killer DoubleShot Pro cải thiện hiệu suất và độ ổn định mạng ưu tiên chơi game. Điều khiển Ethernet tự động phát hiện lỗi giữa các luồng trò chơi, video và trò chuyện để chọn mức ưu tiên băng thông nhằm mang lại trải nghiệm không có độ trễ. Khi chọn chế độ tự động, trình tối ưu hóa mạng của các chiếc laptop Acer gaming 2021 có thể phân biệt các chương trình nặng để không xảy ra sự cố kết nối. Ngoài ra, người dùng có thể tự đặt mức độ ưu tiên của chương trình, thay đổi phân bổ băng thông cho từng ứng dụng và thậm chí chặn một số ứng dụng nhất định để đảm bảo kết nối tốt nhất.

<br>Hệ thống nhiệt cải tiến với quạt kép
<br>Bạn không cần lo lắng về vấn đề quá nóng máy nữa, Acer Nitro 5 Gaming 2021 đã được bổ sung giải pháp tản nhiệt sáng tạo với thiết kế mới nhất để mang lại hiệu quả làm mát tốt hơn, ngay cả khi máy chạy khối lượng công việc nặng.

<br>Được trang bị hệ thống làm mát quạt kép sử dụng các cổng hút/xả và 4 lỗ thoát nhiệt được đặt ở vị trí chiến lược để đạt được mức tăng tổng thể 25% về hiệu suất nhiệt so với mẫu Acer Nitro 5 2020.

<br>Không thể không kể đến công nghệ Acer CoolBoost với 4 lỗ thông gió ở phía dưới và kết hợp với ứng dụng NitroSense để theo dõi nhiệt độ và điều chỉnh hệ thống tản nhiệt. Hệ thống này được tối ưu hóa hơn nữa bởi công nghệ CoolBoost có thể tăng tốc độ quạt lên 10% và làm mát CPU/GPU lên 9%. Tất cả các tác vụ điện toán được đảm bảo trở nên thoải mái hơn với công nghệ CoolBoost như một giải pháp sáng tạo để làm mát tốt hơn.
                                        </p>
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
                        <div class="product__item__pic set-bg" data-setbg="img/sanpham/1.png">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="sp1.php">tên Laptop Lenovo 300e Chromebook Thế hệ thứ 2</a></h6>
                            <h5>2,490,000₫</h5>
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