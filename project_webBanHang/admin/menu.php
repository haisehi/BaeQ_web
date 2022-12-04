<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['login']);
    header("Location:../admin/login.php");
}
?>
<h2>Welcome to <?php if (isset($_SESSION['login'])) {
                    echo $_SESSION['login'];
                } ?></h2>
<div class="container-fluid">
    <div class="header_menu">
        <ul class="list">
            <li class="list_item"><a class="link_item" href="index.php?quanly=quanlytrangchu">Quản lý banner</a></li>
            <li class="list_item"><a class="link_item" href="index.php?quanly=quanlysp">Quản lý sản phẩm</a></li>
            <li class="list_item"><a class="link_item" href="index.php?quanly=nd">Quản lý tài khản người dùng</a></li>
            <li class="list_item"><a class="link_item" href="index.php?quanly=quanlydh">Quản lý đơn hàng</a></li>
            <li class="list_item"><a class="link_item" href="index.php?quanly=thongke">Thống kê</a></li>
            <li class="list_item"><a class="link_item" href="index.php?dangxuat=1">Đăng xuất :<?php if (isset($_SESSION['login'])) {
                                                                                                    echo $_SESSION['login'];
                                                                                                } ?></a></li>
        </ul>
    </div>
    <div class="content">