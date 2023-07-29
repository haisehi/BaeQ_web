<?php
// session_start();


include('admin/config/db.php');
require('carbon/autoload.php');

use Carbon\Carbon;
use Carbon\CarbonInterval;

$now = Carbon::now('Asia/Ho_Chi_Minh');
$id_khachhang = $_SESSION['login1'];
$code_order = rand(0, 9999);
$insert_cart = 'INSERT INTO tbl_cart(name_khachhang,code_cart,cart_status,date) VALUES("' . $id_khachhang . '","' . $code_order . '",1,"' . $now . '")  ';
$cart_query = mysqli_query($connect, $insert_cart);
if ($cart_query) {
    //them gio hang chi tiet
    foreach ($_SESSION['cart'] as $key => $value) {
        $id_sanpham = $value['id'];
        $soluong = $value['soluong'];
        $insert_order_detail = 'INSERT INTO cart_details(product_id,code_cart,soluong) VALUES("' . $id_sanpham . '","' . $code_order . '","' . $soluong . '")';
        mysqli_query($connect, $insert_order_detail);
    }
}
unset($_SESSION['cart']);
// header('Location:index.php?quanly=trangchu');

?>
<style>
    .ContentPay {
        text-align: center;
        font-family: monospace;
        color: yellowgreen;
    }

    .ContentPay i {
        font-size: 40px;
    }
</style>
<h3 class="ContentPay">
    <i class="fa-regular fa-circle-check"></i>
    <p>Bạn đã thanh toán thanh công , đơn hàng sẽ được vận chuyển đến cho bạn trong thời gian tới.</p>
</h3>