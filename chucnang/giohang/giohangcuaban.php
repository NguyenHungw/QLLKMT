<div id="y-cart" class="col-md-4 col-sm-12 col-xs-12">
    <div id="y-cart-main">
        <p>Bạn đang có <span><?php if(isset($_SESSION['giohang'])){echo count($_SESSION['giohang']);}else{echo 0;} ?></span> sản phẩm</p>
        <a href="index4.php?page_layout=giohang">Chi tiết giỏ hàng</a>
    </div>
</div>