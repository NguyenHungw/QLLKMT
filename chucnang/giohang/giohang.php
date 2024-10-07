<div id="cart">
    <h2 class="h2-bar">giỏ hàng của bạn</h2>
    <?php  
    //Kiểm tra xem giỏ hàng đã được tạo ra bởi phiên đăng nhập hiện tại chưa 
        if (isset($_SESSION['giohang'])) {
            //Kiểm tra xem người dùng đã thay đổi số lượng sản phẩm trong giỏ hàng chưa
            if(isset($_POST['sl'])){
                foreach ($_POST['sl'] as $id_sp => $sl) {
                    //Nếu số lượng của một sản phẩm trong giỏ hàng bằng 0, thì sản phẩm đó sẽ bị xoá bỏ khỏi giỏ hàng
                    if($sl==0){
                        unset($_SESSION['giohang'][$id_sp]);
                    }else if($sl>0){
                        //nếu sl sp trong giỏ hàng >0 thì cập nhật vào giỏ
                        $_SESSION['giohang'][$id_sp] = $sl;
                    }
                }
            }
            //Tạo một mảng $arrid chứa danh sách các sản phẩm trong giỏ hàng thông qua vòng lặp foreach
            $arrid=array();
            foreach ($_SESSION['giohang'] as $id_sp => $so_luong) {
                $arrid[]=$id_sp;
            }
            //Chuyển đổi mảng $arrid thành chuỗi và lưu vào biến $strid
            $strid=implode(',', $arrid);
            //Thực hiện truy vấn để lấy thông tin của các sản phẩm trong giỏ hàng
        $sql="SELECT * FROM sanpham WHERE id_sp IN($strid) ORDER BY id_sp DESC";
        //và lưu vào biến query
        $query=mysqli_query($conn,$sql);
    ?>
    <form id="giohang" method="post">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th style="width:40%">Sản phẩm</th>
                <th style="width:10%">Giá</th>
                <th style="width:10%">Số lượng</th>
                <th style="width:30%" class="text-center">Tổng tiền</th>
                <th style="width:10%"></th>
            </tr>
        </thead>
        <!-- Product Item -->
        <?php  
            $totalPriceAll=0;
            while ($row=mysqli_fetch_array($query)) {
                $totalPrice=$row['gia_sp']*$_SESSION['giohang'][$row['id_sp']];
        ?>
        <tbody>
            <tr>
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-2 hidden-xs"><img src="quantri/anh/<?php echo $row['anh_sp']; ?>" alt="..." class="img-responsive"/></div>
                        <div class="col-sm-10">
                            <h5><?php echo $row['ten_sp']; ?></h5>
                        </div>
                    </div>
                </td>
                <td data-th="Price"><?php echo $row['gia_sp']; ?></td>
                <td data-th="Quantity">
                    <input name="sl[<?php echo $row['id_sp']; ?>]" type="number" min="0" class="form-control text-center" value="<?php echo $_SESSION['giohang'][$row['id_sp']]; ?>">
                </td>
                <td data-th="Subtotal" class="text-center"><span><?php echo $totalPrice; ?></span></td>
                <td class="actions" data-th="">
                    <a href="chucnang/giohang/xoahang.php?id_sp=<?php echo $row['id_sp']; ?>">Xóa</a>
                </td>
            </tr>
        </tbody>
        <?php  
            $totalPriceAll+=$totalPrice;
            }
        ?>
        <!-- End Product Item -->
        <tfoot>
            <tr class="visible-xs">
                <td class="text-center"><strong>Total <span><?php echo $totalPriceAll; ?></span></strong></td>
            </tr>
            <tr>
                <td>
                    <a href="index4.php" class="btn btn-warning">Tiếp tục mua hàng</a>
                    <a onclick="document.getElementById('giohang').submit();" href="#" class="btn btn-info">Cập nhật giỏ hàng</a>

                </td>
                <td colspan="2" class="hidden-xs">
                    <a class="btn btn-default" href="chucnang/giohang/xoahang.php?id_sp=0">Xóa hết sản phẩm</a>  
                </td>
                <td class="hidden-xs text-center"><strong>Tổng tiền giỏ hàng: <span><?php echo $totalPriceAll; ?></span></strong></td>
                <td><a href="index4.php?page_layout=muahang" class="btn btn-success btn-block">Thanh toán</a></td>
            </tr>
        </tfoot>
    </table>
    </form>
    <?php  
        }else{
            echo '<script>alert("không có sản phẩm nào trong giả hàng!");</script>';
        }
    ?>
</div>