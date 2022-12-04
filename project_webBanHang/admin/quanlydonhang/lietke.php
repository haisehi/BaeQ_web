<?php
$sql_lietke_dh = "SELECT *FROM tbl_cart,tbl_dangky WHERE tbl_cart.name_khachhang = tbl_dangky.tenkhachhang	 ORDER BY tbl_cart.id_cart DESC";
$query_lietke_dh = mysqli_query($connect, $sql_lietke_dh);
?>
<table style="width: 100%;border-collapse: collapse;" border="1">
    <tr style="background-color: aquamarine;">
        <th>ID</th>
        <th>Tên khách hàng</th>
        <th>Mã giỏ hàng</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        <th>Tình trạng</th>
        <th>Ngày đặt</th>
        <th>Quản lý</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_dh)) {
        $i++;
    ?>
        <tbody>
            <!-- <td><?php echo $i ?></td> -->
            <td><?php echo $row['id_cart'] ?></td>
            <td><?php echo $row['name_khachhang'] ?></td>
            <td><?php echo $row['code_cart'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['diachi'] ?></td>
            <td><?php echo $row['dienthoai'] ?></td>
            <td>
                <?php
                if ($row['cart_status'] == 1) {
                    echo "<a href='quanlydonhang/xuly.php?cart_status=0&code=" . $row['code_cart'] . "'>Đơn hàng mới</a>";
                } else {
                    echo "Đã xử lý";
                }

                ?>
            </td>
            <td><?php echo $row['date'] ?></td>
            <td><a style="text-decoration: none;" href="index.php?quanly=donhang&code=<?php echo $row['code_cart']; ?>">Xem đơn hàng</a></td>

        </tbody>
    <?php
    }
    ?>
</table>