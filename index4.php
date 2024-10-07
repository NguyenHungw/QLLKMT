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
    <link rel="stylesheet" href="css/product.css" type="text/css">

    <link rel="stylesheet" href="sass/style.css" type="text/css"> <!-- change sass to css in the end  -->
     
      <!-- css form login-->
    <link rel="stylesheet" href="log.css" type="text/css">
    <?php 
     //Khai báo sử dụng session
     session_start();
                                        
     //Khai báo utf-8 để hiển thị được tiếng việt
     header('Content-Type: text/html; charset=UTF-8');
                                       
                                        
                                            

                                                if (isset($_POST['email1']))   {
                                                    //Kết nối tới database
                                                    $conn=new PDO("mysql:host=localhost; dbname=vuacomputer; charset=utf8","root","");
                                                    
                                                    //Lấy dữ liệu nhập vào
                                                    $email = addslashes($_POST['email1']);
                                                    $mat_khau = addslashes($_POST['mat_khau1']);
                                                    
                                                    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
                                                    if (!$email || !$mat_khau) {
                                                        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
                                                        exit;
                                                    }
            
                                                    // mã hóa pasword
                                                    // $mat_khau = md5($mat_khau);
                                                    
                                                    //Kiểm tra tên đăng nhập có tồn tại không

                                                    $link = mysqli_connect("localhost", "root", "", "vuacomputer");
                                                    $log = mysqli_query($link, "SELECT email,mat_khau FROM thanhvien WHERE email='$email' ");
                                                    // $query = mysqli_query("SELECT email FROM dangky WHERE email='$email'");
                                                    

                                                    if (mysqli_num_rows($log) == 0) {
                                                        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                                                        exit;
                                                    }
                                                    // if (mysqli_num_rows(mysql_query("SELECT email FROM dangky WHERE email='$email'")) ==0)
                                                    // {
                                                    //     echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                                                    //     exit;
                                                    // }
                                                    
                                                    //Lấy mật khẩu trong database ra
                                                    $row = mysqli_fetch_array($log);
                                                    
                                                    //So sánh 2 mật khẩu có trùng khớp hay không
                                                    if ($mat_khau != $row['mat_khau']) {
                                                        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                                                        exit;
                                                    }
                                                    
                                                    //Lưu tên đăng nhập
                                                    $_SESSION['email1'] = $email;
                                                    $admin ='nguyentienhung247@gmail.com';
                                                    if ($email==$admin) {
                                                        echo "Xin chào admin " . $email . ". Bạn đã đăng nhập thành công.";
                                                        // header("Location: http://localhost/Nhom5QLST/Quanlyhanghoa.php");
                                                        header("Location: https://localhost/QuanLyLKMT/quantri/index5.php");
                                                        exit();
                                                        // code...
                                                    } else {
                                                        echo "Xin chào " . $email . ". Bạn đã đăng nhập thành công. <a href='google.com'>Về trang chủ</a>";
                                                    // header("Location: index2.php");
                                                    header("Location: index2.php");
                                                        // code...
                                                    }
                                                    
                                                    
                                                    // header("Location: http://localhost/Nhom5QLST/Quanlyhanghoa.php");

                                                    exit;
                                                    die();
                                                    
                                                }
                                             


                                        

                                       //Xử lý đăng nhập
                                      
                                       
                                       
    ?>
       <?php
            if(isset($_GET['page_layout'])){
            switch ($_GET['page_layout']) {
                case 'danhsachtimkiem':
                    echo '<link rel="stylesheet" href="css/danhsachtimkiem.css">';
                    break;
                case 'danhsachsp':
                    echo '<link rel="stylesheet" href="css/danhsachsp.css">';
                    break;
                case 'chitietsp':
                    echo '<link rel="stylesheet" href="css/chitietsp.css">';
                    break;
                case 'giohang':
                    echo '<link rel="stylesheet" href="css/giohang.css">';
                    break;              
                case 'muahang':
                    echo '<link rel="stylesheet" href="css/muahang.css">';
                    break;
                case 'hoanthanh':
                    echo '<link rel="stylesheet" href="css/hoanthanh.css">';
                    break;
                }
            }

        ?>
 <?php

                                
// print_r($_POST);
// if(isset($email)||isset($mat_khau)){

    if (isset($_POST['tendangky'])) {
$email=$_POST['tendangky'];
$mat_khau=$_POST['pass'];

// echo "<p>Tên đăng nhập:$email Mật khẩu: $mat_khau Họ tên: $hoten </p>";

// Kết nối đến CSDL
$conn=new PDO("mysql:host=localhost; dbname=vuacomputer; charset=utf8","root","");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                
                $sql="INSERT INTO dangky SET email=?, mat_khau=? ";
                $stm=$conn->prepare($sql);
                $stm->execute([$email,$mat_khau]);
                echo "Đã chèn vào CSDL thành công.";

    }             

?>
</head>

<body>
  
    
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
                                <button type="button" class="nav-close" onclick="toggleNav()"><a href="#"><i class="fa fa-user"></i> Đăng nhập</a></button>
                                <nav class="nav">
                                    <!-- <button type="button" class="nav-close" onclick="toggleNav()" >
                                      <ion-icon name="close-outline" size="large"></ion-icon>
                                    </button> -->
                                    
                                    <div class="nav-links-container">
                                      <!-- <a href="#" class="nav__link">
                                        <span class="nav__text">Products</span>
                                        <ion-icon name="cube-outline" size="large"></ion-icon>
                                      </a> -->
                                      
                                        <form name="form" method="post" >
                                      <div id="dangnhap" style="display: block">
                                        <h3><center><b><I> ĐĂNG NHẬP</b></I></center></h2><br>
                                      <input type="text" name="email1" placeholder="Username"><br>
                                      <input type="password" name="mat_khau1" placeholder="Password"> <br>
                                      <br>
                                      <button id="btn1" style="display: block" onclick="checkdn()"> Dang nhap</button></form>
                                      <style type="text/css">
                                        #btn1,#btn2{
                                            margin-left:65px;
                                            float:left;
                                        }
                                      </style>
                                     
                                      </div>
                                      <button id="btn2" style="display: block"> Dang Ky</button>
                                      <form method="post">
                                      
                                      <div id="dangky" style="display: none">
                                      
                                        <h3><center><b><I> ĐĂNG KÝ</b></I></center></h2><br>
                                        <!-- <input type="text" name="hoten" placeholder="Họ và tên"><br> -->
                                        <form name="form" method="post" >
                                        <input type="text" name="tendangky" id="tendangky" placeholder="Username"><br>
                                        <input type="password" name="pass" id="pass" placeholder="Password"> <br>
                                        
                                      </div>
                                      <br>
                                      
                                        <center><button type="submit" class="btn btn-primary" id="btn3" onclick="checkdk()"  style="display: none">Dang Ky</button></th>
                                    </center>
                                        </form>
                                        
                                       
                                        </style>
                                      </table>
                                      <script>
                                            // xử lý ẩn hiện hút đăng ký , đăng nhập
                                            document.getElementById("btn2").onclick = function () {
                                                if (document.getElementById("btn2").style.display == 'block'&&document.getElementById("btn3").style.display == 'none'&&document.getElementById("btn1").style.display == 'block'&&document.getElementById("dangnhap").style.display == 'block'&&document.getElementById("dangky").style.display == 'none') {
                                                    document.getElementById("dangky").style.display = 'block';
                                                    document.getElementById("dangnhap").style.display = 'none';
                                                    document.getElementById("btn1").style.display = 'none';
                                                    document.getElementById("btn3").style.display = 'block';
                                                    document.getElementById("btn2").style.display = 'none';
                                                } else {
                                                    document.getElementById("dangky").style.display = 'none';
                                                    document.getElementById("dangnhap").style.display = 'block';
                                                    document.getElementById("btn1").style.display = 'block';
                                                   
                                                }
                                            };
                                            </script>
                                            <script>    
                                            function checkdn(){
                                            // document.getElementById("btn1").onclick = function () {
                                                    var email1 = document.form.email1.value;
                                                    var mat_khau1 = document.form.mat_khau1.value;

                                                    if (email1 == "" || email1 == null) {
                                                        alert("username khong duoc de trong");
                                                    } else if (email1.Length > 255) {
                                                        alert("username khong duoc qua 255 ky tu ");
                                                        return false;
                                                    }
                                                    else if (mat_khau1 == "" || mat_khau1 == null) {
                                                        alert("password khong duoc de trong");
                                                    } else if (mat_khau1.Length < 6) {
                                                        alert("password không được nhỏ hơn 6 ký tự");
                                                        return false;
                                                    }
                                                    else if (mat_khau1.Length > 255) {
                                                        alert("password khong duoc qua 255 ky tu ");
                                                        return false;
                                                    } else {

                                                        alert("dang nhap thanh cong");
                                                        


                                                    }
                                                };
                                                </script>
                                                <script>
                                                // document.getElementById("btn3").onclick = function (){
                                                    function checkdk(){
                                                    // var fullname = document.form.hoten.value;
                                                    var tendangky = document.getElementById("tendangky").value;
                                                    var pass =document.getElementById("pass").value;

                                                    // email2 =document.getElementById("user").value;

                                                    if (tendangky == "" || tendangky == null) {
                                                        alert("usernameddd khong duoc de trong");
                                                    } else if (tendangky.Length > 255) {
                                                        alert("username khong duoc qua 255 ky tu ");
                                                        return false;
                                                    }
                                                    else if (pass == "" || pass == null) {
                                                        alert("password khong duoc de trong");
                                                    } else if (pass.Length < 6) {
                                                        alert("password không được nhỏ hơn 6 ký tự");
                                                        return false;
                                                    }
                                                    else if (pass.Length > 255) {
                                                        alert("password khong duoc qua 255 ky tu ");
                                                        return false;
                                                    } else {
                                                        alert("Đăng ký thành công");
                                                       
                                                    }
                                                };
                                      </script>
                                      
                                      
                                    </div>
                                    
                                    


                                  </nav>
                                  <main class="main">
                                    <!-- <button onclick="toggleNav()">Open Navigation</button> -->
                                  </main>
                                  <script>
                                    function toggleNav() {
                                      document.body.classList.toggle("nav-open");
                                    }
                                  </script>
                                  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                                  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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
                        <a href="./index.php"><img src="#" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.php">Trang chủ</a></li>
                            <li><a href="">Cửa hàng</a></li>
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
                                <h5>0967723564</h5>
                                <span>24/7 Support</span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg"> -->
                        <!-- <div class="hero__text"> -->
                            <div class="col-lg-0">
                        <div class="row">
                    <!-- <div class="col-md-3 col-sm-12 col-xs-12"> -->
                        <?php  
                        include_once './chucnang/sanpham/danhmucsp.php';
                 
                        ?>
                    </div>
                    <div class=" col-sm-12 col-xs-12">
                 

                        <div id="main">
                            <?php
                            if(isset($_GET['page_layout'])){
                                switch ($_GET['page_layout']) {
                             
                                case 'danhsachsp':
                                    include_once './chucnang/sanpham/danhsachsp.php';
                                    break;
                                case 'chitietsp':
                                     include_once './chucnang/sanpham/chitietsp.php';
                                     break;
                                 case 'giohang':
                                     include_once './chucnang/giohang/giohang.php';
                                     break;
                                 case 'muahang':
                                     include_once './chucnang/giohang/muahang.php';
                                     break;
                                 case 'hoanthanh':
                                     include_once './chucnang/giohang/hoanthanh.php';
                                     break;
                                case 'sanpham':
                                    include_once './chucnang/sanpham/sanpham.php';
                                    break;

                                }
                            }else{
                                //ds san pham
                                include_once './chucnang/sanpham/sanpham.php';
                            }
                            
                            ?>
                        </div>

                        
                    </div>
                </div>
            </div> 
                            <!-- <span>FRESH FRUIT</span>
                            <h2>Vegetable <br/>100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p -->
                            <!-- <a href="#" class="primary-btn">ĐẶT NGAY</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section END -->

    <!-- Categories Section -->
    
    <!-- Categories Section END -->

    <!-- Featured Section -->
   
    <!-- Featured Section END -->

    <!-- Banner -->
    <!-- <div class="banner">
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
    </div> -->
    <!-- Banner END -->

    <!-- Latest/Top Rated/Review Products Section -->
    <div id="body">
              <!-- cho vua nay -->

             
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
        <script type="text/javascript" src="https://ahachat.com/customer-chats/customer_chat_QZRSEmPgzC641a78aa420a0.js"></script>
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