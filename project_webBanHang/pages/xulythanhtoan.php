<?php
session_start();


include('../admin/config/db.php');
require('../carbon/autoload.php');

use Carbon\Carbon;
use Carbon\CarbonInterval;

$now = Carbon::now('Asia/Ho_Chi_Minh');
// $tenkhachhang = $_SESSION['login1'];
$code_order = rand(0, 9999);
$payment = $_POST['payment'];
// lay id thong tin van chuyen
$id_khachhang = $_SESSION['login1'];
$sql_get_vanchuyen = mysqli_query($connect, "SELECT *FROM shipping WHERE tenkhachhang='$id_khachhang' LIMIT 1");
$row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
$id_shipping = $row_get_vanchuyen['id_shipping'];
// insert cart
$insert_cart = 'INSERT INTO tbl_cart(name_khachhang,code_cart,cart_status,date,payment,cart_shipping) VALUES("' . $id_khachhang . '","' . $code_order . '",1,"' . $now . '","' . $payment . '","' . $id_shipping . '")  ';
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
// header('Location:index.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>

</head>

<body>
    <div class="btn">
        <label for="modal_confirm1">Tiếp tục mua hàng</label>
    </div>

    <div class="modal">
        <input type="checkbox" name="setingModal" id="modal_confirm1">
        <div class="header">
            <img style="width: 100%;" src="../img/Laeeb-removebg-preview.png" alt="">
            <img src="../img/img2.png" alt="">
            <img src="../img/img3.png" alt="">
        </div>
        <div class="content">
            <h1>Bạn có muốn tiếp tục mua hàng cùng chúng tôi không ?</h1>
            <div class="des">
                Cảm ơn bạn đã sử dụng dịch vụ mua sắm ở baeQ <br>
                Đơn hàng sẽ giao cho bạn trong thời gian sớm nhất.
            </div>
            <div class="confirm">
                <label for="modal_confirm1" class="cancel"><i class="fa-solid fa-rotate-left"></i></label>
                <a href="../index.php?quanly=trangchu"><button class="continue"><i class="fa-solid fa-truck-fast"></i></button></a>
            </div>
        </div>
    </div>

</body>

</html>
<style>
    body {
        background-image: linear-gradient(to top right, #cacaca, #9281ca, #65646b);
        height: 100vh;
        overflow: hidden;
    }

    .btn {
        display: block;
        color: #fff;
        margin-top: 300px;
        padding: 5px 10px;
        text-align: center;
    }

    .btn label {
        background-color: #ffffff66;
        display: inline-block;
        margin: 0 20px;
        padding: 20px;
    }

    .modal {
        width: 300px;
        margin: auto;
        position: fixed;
        top: 50%;
        left: 50%;
        transition-delay: 2s;
        transform: translate(-50%, -50%) scale(0);
    }

    .modal .header {
        background-image: linear-gradient(to top left,
                #C086E1, #E8ABC7);
        min-height: 200px;
        border-radius: 30px;
        position: relative;
        padding: 20px 20px 100px 20px;
        opacity: 0;
        transition: 0.5s;
        transform: translate(0, 70px);
    }

    .modal img {
        position: absolute;
    }

    .modal img:nth-child(1) {
        top: -30px;
        width: 500px;
        left: 5%;
        opacity: 0;
        transform: translate(0, 70px);
        transition: 0.7s;
    }

    .modal img:nth-child(2) {
        top: 170px;
        transform: rotate(80deg);
        width: 100px;
        left: -50px;
        opacity: 0;
        transition: 1s;

    }

    .modal img:nth-child(3) {
        transform: rotate(-80deg);
        bottom: -90px;
        width: 100px;
        right: -40px;
        opacity: 0;
        transition: 1s;
    }

    .modal .content {
        background-color: #E2F0EB4D;
        padding: 20px;
        min-height: 100px;
        border-radius: 30px;
        backdrop-filter: blur(20px);
        color: #eee;
        font-family: monospace;
        transform: translate(0, 70px);
        opacity: 0;
        transition: 0.5s;
        transition-delay: 0.2s;
    }

    .modal .confirm {
        text-align: center;
        margin-top: 30px;
    }

    .modal .content label,
    .modal .content button {
        display: inline-block;
        border: none;
        padding: 10px;
        color: #fff;
        margin: 0 10px;
    }

    .modal .content label {
        background-color: #ffffff4D;
    }

    .modal .content button {
        background-color: #986FEA;
    }

    .modal input[name="setingModal"] {
        display: none;
    }

    .modal:has(input[name="setingModal"]:checked) {
        transition: 0s;
        transform: translate(-50%, -50%) scale(1);
    }

    .modal:has(input[name="setingModal"]:checked) .header {
        opacity: 1;
        transform: translate(0, 0);
    }

    .modal:has(input[name="setingModal"]:checked) .content {
        transition-delay: 0s;
        opacity: 1;
        transform: translate(0, -70px);
    }

    .modal:has(input[name="setingModal"]:checked) .header img:nth-child(1) {
        opacity: 1;
        transform: translate(0, 0);
        transition-delay: 0.3s;
    }

    .modal:has(input[name="setingModal"]:checked) .header img:nth-child(2) {
        opacity: 1;
        transform: rotate(-20deg);
        transition-delay: 0.5s;
        top: -20px;
    }

    .modal:has(input[name="setingModal"]:checked) .header img:nth-child(3) {
        opacity: 1;
        transform: rotate(20deg);
        transition-delay: 0.5s;
        bottom: 20px;
    }
</style>