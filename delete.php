<?php
// Truy vấn database
// 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
include"connection.php";
// 2. Chuẩn bị câu truy vấn $sqlSelect, lấy dữ liệu ban đầu của record cần update
// Lấy giá trị khóa chính được truyền theo dạng QueryString Parameter key1=value1&key2=value2...
$id = $_GET['id'];
$sql = "DELETE FROM `user` WHERE id=$id;";

// 3. Thực thi câu lệnh DELETE
$result = mysqli_query($conection, $sql);

// 4. Đóng kết nối
mysqli_close($conection);

// Sau khi cập nhật dữ liệu, tự động điều hướng về trang Danh sách
header('location:Quanlyhanghoa.php');