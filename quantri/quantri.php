<?php  
    ob_start();
    session_start();
    include_once'./ketnoi.php';
    if ($_SESSION['email']=='nguyentienhung247@gmail.com' && $_SESSION['pass']=='123456') {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>vuacomputer</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/datepicker3.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <link href="./quantri.php" rel="stylesheet">

        <!--Icons-->
        <script src="js/lumino.glyphs.js"></script>

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    </head>

    <body>
        <nav class="toph navbar-inverse navbar-fixed-top" role="navigation">
        <style>
   .navbar-inverse {
    background-color: #30a5ff;
    border-color: #080808;
    border-style: outset;
}

    </style>
            
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="quantri.php"><span>VUACOMPUTER</span></a>
                    <ul class="user-menu">
                        <li class="dropdown pull-right">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg><span style="color: white;">Xin chào, <?php if(isset($_SESSION['email'])){echo $_SESSION['email'];} ?></span> <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="quantri.php?page_layout=thongtin&email=<?php echo $_SESSION['email'];?>&pass=<?php echo $_SESSION['pass'];?>"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Thông tin thành viên</a></li>
                                <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Cài đặt</a></li>
                                <li><a href="./chucnang/dangxuat/dangxuat.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Đăng xuất</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div><!-- /.container-fluid -->
        </nav>

        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
            <form role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Tìm kiếm">
                </div>
            </form>
            <ul class="nav menu">
                <li class="active"><a href="quantri.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ quản trị</a></li>
                <li class="parent ">
                    <a href="quantri.php?page_layout=quanlytv">
                        <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Quản lý thành viên
                    </a>
                    <ul class="children collapse" id="sub-item-1">
                        <li>
                            <a href="quantri.php?page_layout=themtv">
                                <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg>
                                Thêm mới
                            </a>
                        </li>
                    </ul>			
                </li>
                <li class="parent ">
                    <a href="quantri.php?page_layout=danhsachdm">
                        <span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Quản lý danh mục
                    </a>
                    <ul class="children collapse" id="sub-item-2">
                        <li>
                            <a class="" href="quantri.php?page_layout=themdm">
                                <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Thêm mới
                            </a>
                        </li>

                    </ul>			
                </li>
                <li class="parent ">
                    <a href="quantri.php?page_layout=danhsachsp">
                        <span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Quản lý sản phẩm
                    </a>
                    <ul class="children collapse" id="sub-item-3">
                        <li>
                            <a class="" href="quantri.php?page_layout=themsp">
                                <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Thêm mới
                            </a>
                        </li>

                    </ul>				
                </li>
   


                <li role="presentation" class="divider"></li>
                <li><a href="./chucnang/dangxuat/dangxuat.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Đăng xuất</a></li>
            </ul>

        </div><!--/.sidebar-->

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
            <?php  
                //master page
                if(isset($_GET['page_layout'])){
                    switch ($_GET['page_layout']) {
                        case 'danhsachsp':include_once'./chucnang/sanpham/danhsachsp.php';
                            break;
                        case 'danhsachdm':include_once'./chucnang/danhmuc/danhsachdm.php';
                            break;
                        case 'suadm':include_once'./chucnang/danhmuc/suadm.php';
                            break;
                        case 'suasp':include_once'./chucnang/sanpham/suasp.php';
                            break;
                        case 'themsp':include_once'./chucnang/sanpham/themsp.php';
                            break;
                        case 'themdm':include_once'./chucnang/danhmuc/themdm.php';
                            break;
                        case 'quanlytv': include_once'./chucnang/thanhvien/quanlytv.php';
                            break;
                        case 'themtv': include_once'./chucnang/thanhvien/themtv.php';
                            break;
                        case 'suatv': include_once'./chucnang/thanhvien/suatv.php';
                            break;
                        case 'thongtin': include_once'./chucnang/thanhvien/thongtin.php';
                            break;
                        default:include_once'./gioithieu.php';
                    }
                }
                else{
                    include_once'./gioithieu.php';
                }
            ?>
        </div>	<!--/.main-->

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/chart.min.js"></script>
        <script src="js/chart-data.js"></script>
        <script src="js/easypiechart.js"></script>
        <script src="js/easypiechart-data.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>	
        <script src="js/bootstrap-table.js"></script>
        <link rel="stylesheet" href="css/bootstrap-table.css"/>
        <script>
            $('#calendar').datepicker({
            });

            !function ($) {
                $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
                    $(this).find('em:first').toggleClass("glyphicon-minus");
                });
                $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
            }(window.jQuery);

            $(window).on('resize', function () {
                if ($(window).width() > 768)
                    $('#sidebar-collapse').collapse('show')
            })
            $(window).on('resize', function () {
                if ($(window).width() <= 767)
                    $('#sidebar-collapse').collapse('hide')
            })
        </script>	
    </body>

</html>
<?php  
    }
    else{
        //header('location: index.php');
        header('location: ../index.php');
    }
?>