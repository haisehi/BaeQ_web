<?php
include('admin/config/db.php');
$code = $_GET['code_cart'];
$sql_lietke_dh = "SELECT *FROM cart_details,products WHERE cart_details.product_id = products.product_id AND cart_details.code_cart='$code' ORDER BY cart_details.id_cart_details  DESC";
$query_lietke_dh = mysqli_query($connect, $sql_lietke_dh);
?>
<table style="width: 100%;border-collapse: collapse;" border="1">
    <tr style="background-color: #bbc1bf;">
        <th class="gsp">ID</th>
        <th class="gsp">Mã đơn hàng</th>
        <th>Ảnh</th>
        <th>Tên sản phẩm</th>
        <th>Kích thước</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th class="gsp">Thành tiền</th>
    </tr>
    <?php
    $i = 0;
    $totalMoney = 0;
    while ($row = mysqli_fetch_array($query_lietke_dh)) {
        $i++;
        $money = $row['price'] * $row['soluong'];
        $totalMoney += $money;

    ?>
        <tbody>
            <td class="gsp"><?php echo $i ?></td>
            <td class="gsp"><?php echo $row['code_cart'] ?></td>
            <td>
                <img src="admin/img/<?php echo $row['image'] ?>" alt="" width="100px" height="150px">
            </td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['size'] ?></td>
            <td><?php echo $row['soluong'] ?></td>
            <td><?php echo number_format($row['price']) . 'VND' ?></td>
            <td class="gsp"><?php echo number_format($money) . 'VND' ?></td>
        </tbody>
        <td colspan="6">
            <p>Tổng tiền :<?php echo number_format($totalMoney) . 'VND' ?> </p>
        </td>
    <?php
    }
    ?>
</table>