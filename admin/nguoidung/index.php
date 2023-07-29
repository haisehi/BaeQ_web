<?php
$sql_lietke_nd = "SELECT *FROM tbl_dangky ";
$query_lietke_dh = mysqli_query($connect, $sql_lietke_nd);
?>
<table style="width: 100%;border-collapse: collapse;" border="1">
    <tr style="background-color: aquamarine;">
        <th>ID</th>
        <th>Tên khách hàng</th>
        <th>Tên tài khoản</th>
        <th>Mật khẩu</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        <th>Quản lý</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_dh)) {
        $i++;
    ?>
        <tbody>
            <td><?php echo $i ?></td>
            <td><?php echo $row['hovaten'] ?></td>
            <td><?php echo $row['tenkhachhang'] ?></td>
            <td><?php echo $row['matkhau'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['diachi'] ?></td>
            <td><?php echo $row['dienthoai'] ?></td>
            <td><a style="text-decoration: none;" href="index.php?quanly=chinhsua&id=<?php echo $row['tenkhachhang']; ?>">Chỉnh sửa</a></td>

        </tbody>
    <?php
    }
    ?>
</table>