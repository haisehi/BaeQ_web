<div class="container">
    <!-- Responsive Arrow Progress Bar -->
    <div class="arrow-steps clearfix">
        <div class="step done"> <span> <a href="index.php?quanly=giohang">Giỏ hàng</a></span> </div>
        <div class="step done"> <span><a href="index.php?quanly=vanchuyen">vận chuyển</a></span> </div>
        <div class="step done"> <span><a href="index.php?quanly=ttthanhtoan">Thanh toán</a><span> </div>
        <div class="step current"> <span><a href="index.php?quanly=donhangdadat">Lịch sử đơn hàng</a><span> </div>
        <!-- <div class="step"> <span><a href="#">5</a><span> </div> -->
    </div>
    <!-- end Responsive Arrow Progress Bar -->
    <!-- <div class="nav clearfix">
        <a href="#" class="prev">Previous</a> |
        <a href="#" class="next pull-right">Next</a>
    </div> -->
</div>
<?php
include('admin/config/db.php');
require('carbon/autoload.php');
$id_khachhang = $_SESSION['login1'];
$sql_get_vanchuyen = mysqli_query($connect, "SELECT * FROM tbl_cart INNER JOIN shipping ON tbl_cart.cart_shipping = shipping.id_shipping WHERE tbl_cart.name_khachhang='$id_khachhang '");
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách sản phẩm</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="bg-dark text-light">
                    <tr>
                        <th>#</th>
                        <th>Tên khách hàng</th>
                        <th>ngày mua hàng</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Phương thức thanh toán</th>
                        <th>Mã đơn hàng</th>
                        <th>Đơn hàng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($sql_get_vanchuyen)) { ?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $row['name_khachhang'] ?></td>
                            <td><?php echo $row['date'] ?></td>
                            <td><?php echo $row['address'] ?></td>
                            <td><?php echo $row['phone'] ?></td>
                            <td><?php echo $row['payment'] ?></td>
                            <td><?php echo $row['code_cart'] ?></td>
                            <td><a style="text-decoration: none;" href="index.php?quanly=lichsu&code_cart=<?php echo $row['code_cart']; ?>">xem</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>