<?php

use Carbon\Carbon;
use Carbon\CarbonInterval;

require('../../carbon/autoload.php');
include('../config/db.php');
$now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

if (isset($_GET['cart_status']) && isset($_GET['code'])) {
    $status = $_GET['cart_status'];
    $code_cart = $_GET['code'];
    // $xuly = $_POST['xuly'];
    $sql = mysqli_query($connect, "UPDATE tbl_cart SET cart_status ='" . $status . "' WHERE code_cart='" . $code_cart . "'");
    // thong ke danh thu
    $sql_lietke_dh = "SELECT * FROM cart_details,products WHERE cart_details.product_id = products.product_id AND cart_details.code_cart = '$code_cart' ORDER BY cart_details.id_cart_details DESC";
    $query_lietke_dh = mysqli_query($connect, $sql_lietke_dh);

    $sql_thongke = "SELECT *FROM tbl_thongke WHERE ngaydat = '$now'";
    $query_thongke = mysqli_query($connect, $sql_thongke);

    $total = 0;
    $giasp = 0;
    while ($row = mysqli_fetch_array($query_lietke_dh)) {
        $total += $row['soluong'];
        $giasp += $row['price'];
    }
    echo $giasp . "<br>";
    echo $total;
    if (mysqli_num_rows($query_thongke) == 0) {
        $soluongban = $total;
        $doanhthu = $giasp;
        $donhang = 1;
        $sql_update_thongke = mysqli_query($connect, "INSERT INTO tbl_thongke(ngaydat,soluongban,doanhthu,donhang) VALUE ('$now','$soluongban','$doanhthu','$donhang') ");
    } elseif (mysqli_num_rows($query_thongke) != 0) {
        while ($row_tk = mysqli_fetch_array($query_thongke)) {
            $soluongban = $row_tk['soluongban'] + $total;
            $doanhthu = $row_tk['doanhthu'] + $giasp;
            $donhang = $row_tk['donhang'] + 1;
            $sql_update_thongke = mysqli_query($connect, "UPDATE tbl_thongke SET soluongban='$soluongban',doanhthu='$doanhthu',donhang='$donhang' WHERE ngaydat='$now' ");
        }
    }

    header('Location:../index.php?quanly=quanlydh');
}
?>
<h3>Đã xử lý</h3>