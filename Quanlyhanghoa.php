<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý hàng hóa </title>

    <!-- Liên kết CSS Bootstrap bằng CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
<div class="w3-sidebar w3-bar-block" style="display:none" id="mySidebar">
<button onclick="w3_close()" class="w3-bar-item w3-button w3-large">Thoát &times;</button>
<a href="index2.php"class="w3-bar-item w3-button">Trang Chủ</a>
                <a href="./thongtinnv.html"class="w3-bar-item w3-button">Thông tin cá nhân</a>
                
                <a href="#"class="w3-bar-item w3-button">Quản lý tài khoản	</a>
                <a href="http://localhost/Nhom5QLST/quanlyhoadon.php"class="w3-bar-item w3-button">Quản Lý Hóa đơn</a>
                <a href="http://localhost/Nhom5QLST/Quanlyhanghoa.php"class="w3-bar-item w3-button">Quản lý hàng hóa</a>
                <a href="http://localhost/Nhom5QLST/Quanlyflashsale.php"class="w3-bar-item w3-button">Quản lý flash sale</a>
                <a href="http://localhost/Nhom5QLST/quanlyttnv.php"class="w3-bar-item w3-button">Quản Lý Nhân Viên</a>
                <!-- <a href="FormDangNhap.html"class="w3-bar-item w3-button">Đăng xuất</a> -->
                <a href="index.php" onclick="logout()" class="w3-bar-item w3-button">Đăng xuất</a>
</div>
<script>
    function logout(){
        alert("Dang xuat thanh cong");
        
    }

    </script>
<!-- Page Content -->
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
  <div class="w3-container">
   
  </div>
</div>
<script>
function w3_open() {
  document.getElementById("mySidebar").style.width = "20%";
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>




    <!-- Main content -->
    <div class="container">
        <h1>Danh sách Sản phẩm</h1>

        <?php
        // Truy vấn database để lấy danh sách
        // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
        include "connection.php";	

        // 2. Chuẩn bị câu truy vấn $sql
        if (isset($_GET["search"]) && !empty($_GET["search"])) {

            $key = $_GET["search"];
            $sql = "SELECT * FROM `user` WHERE masp LIKE '%$key%' OR tensp LIKE '%$key%' OR soluong LIKE '%$key%' OR gianhap LIKE '%$key%' OR giaban LIKE '%$key%' OR datesx LIKE '%$key%' OR datehan LIKE '%$key%' OR nhasx LIKE '%$key%'";
        }
        else{
        $sql = "SELECT * FROM `user`";
        }

        // 3. Thực thi câu truy vấn SQL để lấy về dữ liệu
        $result = mysqli_query($conection, $sql);

        // 4. Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tách để sử dụng
        // Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
        // Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
        $data = [];
        $rowNum = 1;
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $data[] = array(
                'rowNum' => $rowNum, // sử dụng biến tự tăng để làm dữ liệu cột STT
                'id' => $row['id'],
                'image' => $row['image'],
                'masp' => $row['masp'],
                'tensp' => $row['tensp'],
                'soluong' => $row['soluong'],
                'gianhap' => $row['gianhap'],
                'giaban' => $row['giaban'],
                'datesx' => $row['datesx'],
                'datehan' => $row['datehan'],
                'nhasx' => $row['nhasx'],

            );
            $rowNum++;
        }

        // Xóa 
        ?>

        <!-- Button Thêm mới -->
        <a href="index.php" class="btn btn-primary">
            <i class="fas fa-plus"></i> Thêm mới
        </a>
        <a href="Quanlyhanghoa.php" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tất cả  
        </a>
        <!--Tim kiem-->
        <form action="" method="get">
        <input type="text" name="search" placeholder="Nhập từ khóa tìm kiếm..." value="<?php if (isset($_GET["search"])) {
            echo $_GET["search"];
        } ?>">
    </form>
 
        <table class="table table-borderd">
            <thead>
                <tr>
                    <th>STT</th>
                
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá nhập</th>
                    <th>Giá bán</th>
                    <th>Ngày sản xuất</th>
                    <th>Ngày hết hạn</th>
                    <th>Nhà sản xuất</th>
                    <th>Tùy chọn</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row) : ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <!-- <td><img src="uploads/<?php echo $row['image'] ?>" alt="" width="160" height="80"> </td> -->
                        <td><?php echo $row['masp']; ?></td>
                        <td><?php echo $row['tensp']; ?></td>
                        <td><?php echo $row['soluong']; ?></td>
                        <td><?php echo $row['gianhap']; ?></td>
                        <td><?php echo $row['giaban']; ?></td>
                        <td><?php echo $row['datesx']; ?></td>
                        <td><?php echo $row['datehan']; ?></td>
                        <td><?php echo $row['nhasx']; ?></td>
                        <td>
                            <!-- Button Sửa -->
                            <a href="edit.php?id=<?php echo $row['id']; ?>" id="btnUpdate" class="btn btn-primary">
                                <i class="fas fa-edit"></i>
                            </a>

                            <!-- Button Xóa -->
                            <a href="delete.php?id=<?php echo $row['id']; ?>" id="btnDelete" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Liên kết JS Jquery bằng CDN -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <!-- Liên kết JS Popper bằng CDN -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!-- Liên kết JS Bootstrap bằng CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Liên kết JS FontAwesome bằng CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</body>

</html>