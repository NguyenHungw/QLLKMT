	<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý hàng hóa</title>

    <!-- Liên kết CSS Bootstrap bằng CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <?php
    // Truy vấn database
    // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
    include "connection.php";

    // 2. Chuẩn bị câu truy vấn $sqlSelect, lấy dữ liệu ban đầu của record cần update
    // Lấy giá trị khóa chính được truyền theo dạng QueryString Parameter key1=value1&key2=value2...
    $id=$_GET['id'];
    $sqlSelect ="SELECT * FROM `user` WHERE id= $id";

    // 3. Thực thi câu truy vấn SQL để lấy về dữ liệu ban đầu của record cần update
    $resultSelect = mysqli_query($conection, $sqlSelect);
    $supermarket = mysqli_fetch_array($resultSelect, MYSQLI_ASSOC); // 1 record

    // Nếu không tìm thấy dữ liệu -> thông báo lỗi
    if(empty($supermarket)) {
        echo "Giá trị id: $id không tồn tại. Vui lòng kiểm tra lại.";
        die;
    }
    ?>
    
    <!-- Main content -->
    <div class="container">
        <h1>Cập nhật sản phẩm</h1>

        <form name="frmEdit" id="frmEdit" method="post" action="" class="form">
            <table class="table">
                <tr>
                    <td>STT</td>
                    <td><input type="text" name="id" id="id" class="form-control" value="<?php echo $supermarket['id'] ?>" readonly /></td>
                </tr>
                <tr>
                    <td>Mã nhà sản phẩm</td>
                    <td><input type="text" name="masp" id="masp" class="form-control" value="<?php echo $supermarket['masp'] ?>" /></td>
                </tr>
                <tr>
                    <td>Tên sản phẩm</td>
                    <td><input type="text" name="tensp" id="tensp" class="form-control" value="<?php echo $supermarket['tensp'] ?>"  /></td>
                </tr>
                <tr>
                    <td>Số lượng</td>
                    <td><input type="text" name="soluong" id="soluong" class="form-control" value="<?php echo $supermarket['soluong'] ?>" /></td>
                </tr>
                <tr>
                	<td>Giá nhập</td>
                	<td><input type="text" name="gianhap" id="gianhap" class="form-control" value="<?php echo $supermarket['gianhap'] ?>" /></td>
                </tr>
                <tr>
                	<td>Giá bán</td>
                	<td><input type="text" name="giaban" id="giaban" class="form-control" value="<?php echo $supermarket['giaban'] ?>" /></td>
                </tr>
                <tr>
                	<td>Ngày sản xuất</td>
                	<td><input type="date" name="datesx" id="datesx" class="form-control" value="<?php echo $supermarket['datesx'] ?>" /></td>
                </tr>
                <tr>
                	<td>Ngày hết hạn</td>
                	<td><input type="date" name="datehan" id="datehan" class="form-control" value="<?php echo $supermarket['datehan'] ?>" /></td>
                </tr>
                <tr>
                	<td>Nhà sản xuất</td>
                	<td><input type="text" name="nhasx" id="nhasx" class="form-control" value="<?php echo $supermarket['nhasx'] ?>" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button name="btnSave" class="btn btn-primary"><i class="fas fa-save"></i> Lưu dữ liệu</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>


    <?php
    // 4. Nếu người dùng có bấm nút Đăng ký thì thực thi câu lệnh UPDATE
    if (isset($_POST['btnSave'])) {
        // Lấy dữ liệu người dùng hiệu chỉnh gởi từ REQUEST POST
        $masp = $_POST['masp'];
        $tensp = $_POST['tensp'];
        $soluong = $_POST['soluong'];
        $gianhap = $_POST['gianhap'];
        $giaban = $_POST['giaban'];
        $datesx = $_POST['datesx'];
        $datehan = $_POST['datehan'];
        $nhasx = $_POST['nhasx'];
        $image = $_POST['image'];
        if (isset($_FILES['image'])) {
            $file = $_FILES['image'];
            $file_name = $file['name'
        ];
        move_uploaded_file($file['tap_name'],'uploads/'.$file_name);
        }

        // Câu lệnh UPDATE
        $sql = "UPDATE `user` SET `image`='$image',`masp`='$masp',`tensp`='$tensp',`soluong`='$soluong',`gianhap`='$gianhap',`giaban`='$giaban',`datesx`='$datesx',`datehan`='$datehan',`nhasx`='$nhasx' WHERE id=$id";

        // Thực thi UPDATE
        mysqli_query($conection, $sql);

        // Đóng kết nối
        mysqli_close($conection);

        // Sau khi cập nhật dữ liệu, tự động điều hướng về trang Danh sách
        header('location:Quanlyhanghoa.php');
    }
    ?>

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