<?php
require_once '../admin/config/db.php';
?>
<div id="main">
    <?php
    if (isset($_GET['quanly'])) {
        $tam = $_GET['quanly'];
    } else {
        $tam = '';
    }
    if ($tam == 'quanlysp') {
        include('content.php');
    } elseif ($tam == 'nd') {
        include('../admin/nguoidung/index.php');
    } elseif ($tam == 'quanlydh') {
        include('quanlydonhang/lietke.php');
    } elseif ($tam == 'donhang') {
        include('quanlydonhang/xemdonhang.php');
    } elseif ($tam == 'thongke') {
        include('dashboard.php');
    } elseif ($tam == 'quanlytrangchu') {
        include('../admin/trangchu/trangchu.php');
    } elseif ($tam == 'chinhsua') {
        include('../admin/nguoidung/chinhsuainfo.php');
    } elseif ($tam == 'quanlytrangchu') {
        include('../admin/trangchu/trangchu.php');
    } else {
        include('content.php');
    }
    ?>
</div>