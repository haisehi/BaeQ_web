<div class="container col_clearfix">
    <!-- Responsive Arrow Progress Bar -->
    <div class="arrow-steps clearfix">
        <div class="step done"> <span> <a href="index.php?quanly=giohang">Giỏ hàng</a></span> </div>
        <div class="step current"> <span><a href="index.php?quanly=vanchuyen">vận chuyển</a></span> </div>
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
<h3>vận chuyển</h3>

<?php
include('admin/config/db.php');

if (isset($_POST['themvanchuyen'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $note = $_POST['note'];
    $tenkhachhang = $_SESSION['login1'];
    $sql_vanchuyen = "INSERT INTO shipping(name,phone,address,note,tenkhachhang) VALUES('$name','$phone','$address','$note','$tenkhachhang')";
    $query_vanchuyen = mysqli_query($connect, $sql_vanchuyen);
    if ($query_vanchuyen) {
        echo "<script>alert('Cập nhật vận chuyển thành công')</script>";
    }
} else if (isset($_POST['vanchuyen'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $note = $_POST['note'];
    $tenkhachhang = $_SESSION['login1'];
    $sql_update_vanchuyen = "UPDATE shipping SET name='$name',phone='$phone',address='$address',note='$note',tenkhachhang='$tenkhachhang' WHERE tenkhachhang='$tenkhachhang' ";
    $query_vanchuyen = mysqli_query($connect, $sql_update_vanchuyen);
    if ($query_vanchuyen) {
        echo "<script>alert('Cập nhật vận chuyển thành công')</script>";
    }
}
?>

<div class="row">
    <?php

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
    <div class="col-md-12">
        <form action="" autocomplete="off" method="POST">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Họ và tên</label>
                <input type="text" class="form-control" id="email" placeholder="..." name="name" value="<?php echo $name ?>">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Số điện thoại</label>
                <input type="number" class="form-control" id="pwd" placeholder="..." name="phone" value="<?php echo $phone ?>">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" id="pwd" placeholder="..." name="address" value="<?php echo $address ?>">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Ghi chú</label>
                <input type="text" class="form-control" id="pwd" placeholder="..." name="note" value="<?php echo $note ?>">
            </div>
            <?php
            if ($name == '' && $phone == '') {
            ?>
                <button type="submit" class="btn btn-success" name="themvanchuyen">Thêm vận chuyển</button>
            <?php
            } elseif ($name != '' && $phone != '') {
            ?>
                <button type="submit" class="btn btn-primary" name="vanchuyen">Cập nhật vận chuyển</button>
            <?php
            }
            ?>
        </form>
    </div>
    <table class="table" style="height: 100vh; width: 100%;">
        <thead class="bg-dark text-light">
            <tr>
                <th>tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Số lượng</th>
                <th class="gsp">Giá sản phẩm</th>
                <th class="gsp">Thành tiền</th>
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
                            <a class="gsp" href="pages/themgiohang.php?cong=<?php echo $cart_item['id']; ?>"><i style="color: black;" class="fa-solid fa-plus"></i></a>
                            <?php echo $cart_item['soluong'] ?>
                            <a class="gsp" href="pages/themgiohang.php?tru=<?php echo $cart_item['id']; ?>"><i style="color: black;" class="fa-solid fa-minus"></i></a>
                        </td>
                        <td class="gsp"><?php echo number_format($cart_item['price']) . 'VND' ?></td>
                        <td class="gsp"><?php echo number_format($thanhtien) . 'VND' ?></td>

                    </tr>
                <?php
                }
                ?>
                <tr>
                    <th class="ttbtmb" colspan="8">Tổng tiền : <?php echo number_format($tongtien) . 'VND' ?></th>

                </tr>
                <?php
                if (isset($_SESSION['login1'])) { ?>
                    <tr>
                        <th class="ttbtmb" colspan="8"><button class="btn btn-primary"><a href="index.php?quanly=ttthanhtoan" style="text-decoration: none;color: black;">Hình thức thanh toán</a></button></th>
                    </tr>
                <?php
                } else {
                ?>
                    <tr>
                        <th class="ttbtmb" colspan="8"><button class="btn btn-primary"><a href="index.php?quanly=dangky" style="text-decoration: none;color: black;">Đăng ký</a></button></th>
                    </tr>
                <?php
                }
                ?>

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