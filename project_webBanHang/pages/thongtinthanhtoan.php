<div class="container col_clearfix">
    <!-- Responsive Arrow Progress Bar -->
    <div class="arrow-steps clearfix">
        <div class="step done"> <span> <a href="index.php?quanly=giohang">Giỏ hàng</a></span> </div>
        <div class="step done"> <span><a href="index.php?quanly=vanchuyen">vận chuyển</a></span> </div>
        <div class="step current"> <span><a href="index.php?quanly=ttthanhtoan">Thanh toán</a><span> </div>
        <div class="step"> <span><a href="index.php?quanly=donhangdadat">Lịch sử đơn hàng</a><span> </div>
        <!-- <div class="step"> <span><a href="#">5</a><span> </div> -->
    </div>
    <!-- end Responsive Arrow Progress Bar -->
    <!-- <div class="nav clearfix">
        <a href="#" class="prev">Previous</a> |
        <a href="#" class="next pull-right">Next</a>
    </div> -->
</div>
<div>
    <form action="pages/xulythanhtoan.php" method="post" class="row">
        <?php
        include('admin/config/db.php');
        $tenkhachhang = $_SESSION['login1'];
        $sql_get_vanchuyen = mysqli_query($connect, "SELECT *FROM shipping WHERE tenkhachhang='$tenkhachhang' LIMIT 1");
        $count = mysqli_num_rows($sql_get_vanchuyen);
        if ($count > 0) {
            $row_get_vanchuyen = mysqli_fetch_assoc($sql_get_vanchuyen);
            $name = $row_get_vanchuyen['name'];
            $phone = $row_get_vanchuyen['phone'];
            $address = $row_get_vanchuyen['address'];
            $note = $row_get_vanchuyen['note'];
        } else {
            $name = '';
            $phone = '';
            $address = '';
            $note = '';
        }
        ?>
        <div class="col-md-8 flexmoblile">
            <h4>Thông tin vận chuyển và giỏ hàng</h4>
            <ul>
                <li>Họ và tên vận chuyển : <b><?php echo $name ?></b></li>
                <li>Số điện thoại vận chuyển vận chuyển : <b><?php echo $phone ?></b></li>
                <li>Địa chỉ vận chuyển vận chuyển : <b><?php echo $address ?></b></li>
                <li>Ghi chú vận chuyển : <b><?php echo $note ?></b></li>
            </ul>
            <h5>Giỏ hàng của bạn</h5>
            <table class="table" style="height: 100vh; width: 100%;">
                <thead class="bg-dark text-light">
                    <tr>
                        <th>tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Giá sản phẩm</th>
                        <th>Thành tiền</th>
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

                            </tr>
                        <?php
                        }
                        ?>
                        <tr>
                            <th style="text-align: right;" colspan="8">Tổng tiền : <?php echo number_format($tongtien) . 'VND' ?></th>

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


        </div>
        <div class="col-md-4 hinhthucthanhtoan flexmoblile">
            <h4>Phương thức thanh toán</h4>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="tien mat" checked>
                <i style="color: black;font-size: 30px;" class="fa-regular fa-money-bill-1"></i>
                <label class="form-check-label" for="exampleRadios1">
                    Thanh toán khi nhận hàng
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="chuyen khoan">
                <i style="color: black;font-size: 30px;" class="fa-regular fa-credit-card"></i>
                <label class="form-check-label" for="exampleRadios2">
                    chuyển khoản
                </label>
            </div>
            <input type="submit" name="thanhtoanngay" class="btn btn-danger" value="thanh toán ngay">
            <button class="btn btn-success"><a style="text-decoration: none;color: black;" href="index.php?quanly=donhangdadat">Lịch sử mua hàng</a></button>
        </div>
    </form>
</div>