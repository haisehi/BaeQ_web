<h2 style="text-align: center;" class="card-header">Giỏ hàng của bạn</h2>
<?php
// session_start();
if (isset($_SESSION['login1'])) {
    // echo $_SESSION['login1'];
    // echo $_SESSION['id_dangky'];
}
if (isset($_SESSION['cart'])) {
    // echo "<pre>";
    // print_r($_SESSION['cart']);
    // echo "<pre>";
}
?>
<div class="container">
    <!-- Responsive Arrow Progress Bar -->
    <div class="arrow-steps clearfix">
        <div class="step current"> <span> <a href="index.php?quanly=giohang">Giỏ hàng</a></span> </div>
        <div class="step"> <span><a href="index.php?quanly=vanchuyen">vận chuyển</a></span> </div>
        <div class="step"> <span><a href="index.php?quanly=ttthanhtoan">Thanh toán</a><span> </div>
        <div class="step"> <span><a href="index.php?quanly=donhangdadat">Lịch sử đơn hàng</a><span> </div>
        <!-- <div class="step"> <span><a href="#">5</a><span> </div> -->
    </div>
    <!-- end Responsive Arrow Progress Bar -->
    <!-- <div class="nav clearfix">
        <a href="#" class="prev">Previous</a> |
        <a href="#" class="next pull-right">Next</a>
    </div> -->
</div>
<table class="table" style="height: 100vh; width: 100%;">
    <thead class="bg-dark text-light">
        <tr>
            <th>tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Số lượng</th>
            <th>Giá sản phẩm</th>
            <th>Thành tiền</th>
            <th>Quản lý</th>
        </tr>
    </thead>

    <tbody>
        <?php
        if (isset($_SESSION['cart'])) {
            $i = 0;
            $tongtien = 0;
            foreach ($_SESSION['cart'] as $cart_item) {
                $thanhtien = $cart_item['soluong'] * $cart_item['price'];
                $tongtien = $tongtien + $thanhtien;
                $i++;
        ?>
                <tr>
                    <td><?php echo $cart_item['name'] ?></td>
                    <td><img style="width: 70px; height:120px" src="admin/img/<?php echo $cart_item['image'] ?>" alt=""></td>
                    <td>
                        <a href="pages/themgiohang.php?cong=<?php echo $cart_item['id']; ?>"><i style="color: black;" class="fa-solid fa-plus"></i></a>
                        <?php echo $cart_item['soluong'] ?>
                        <a href="pages/themgiohang.php?tru=<?php echo $cart_item['id']; ?>"><i style="color: black;" class="fa-solid fa-minus"></i></a>
                    </td>
                    <td><?php echo number_format($cart_item['price']) . 'VND' ?></td>
                    <td><?php echo number_format($thanhtien) . 'VND' ?></td>
                    <td><a onclick="return Del('<?php echo $cart_item['name']; ?>')" style="text-decoration: none;" href="pages/themgiohang.php?xoa=<?php echo $cart_item['id']; ?>"><i style="color: black;font-size: 30px;" class="fa-solid fa-trash-can"></i></a></td>
                </tr>
            <?php
            }
            ?>
            <tr>
                <th style="text-align: right;" colspan="8">Tổng tiền : <?php echo number_format($tongtien) . 'VND' ?></th>

            </tr>
            <?php
            if (isset($_SESSION['login1'])) { ?>
                <tr>
                    <th style="text-align: right;" colspan="8"><button class="btn btn-primary"><a href="index.php?quanly=vanchuyen" style="text-decoration: none;color: black;">Vận chuyển</a></button></th>
                </tr>
            <?php
            } else {
            ?>
                <tr>
                    <th style="text-align: right;" colspan="8"><button class="btn btn-primary"><a href="index.php?quanly=dangky" style="text-decoration: none;color: black;">Đăng ký</a></button></th>
                </tr>
            <?php
            }
            ?>
            <tr>
                <th style="text-align: right;" colspan="8"><a href="pages/themgiohang.php?xoatatca=1 " style="text-decoration: none;color: black;">Xoá tất cả</a></th>
            </tr>
        <?php
        } else {
        ?>
            <tr>
                <td style="text-align: center;" colspan="8">Hiện tại giỏ hàng trống</td>
            </tr>
        <?php
        }
        ?>
    </tbody>

</table>
<script>
    function Del(name) {
        return confirm("Bạn có chắc muốn xoá sản phẩm : " + name + " không ?");
    }
</script>