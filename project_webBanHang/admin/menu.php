<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['login']);
    header("Location:../admin/login.php");
}
?>
<h2>Welcome to <?php if (isset($_SESSION['login'])) {
                    echo $_SESSION['login'];
                } ?></h2>

<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['login1']);
}
?>
<!-- header -->
<header class="header">
    <nav class="header__navbar_one">
        <!-- mobile -->
        <div class="navbar_mobile">
            <input type="checkbox" name="openNav" id="openNav" />
            <label for="openNav" class="openNav">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <ul class="menu">
                <li> <a href="index.php?quanly=quanlytrangchu" style="text-decoration: none;color: black;">
                        <i class="fa-solid fa-house-user"></i> Quản lý banner</li>
                </a>
                <li> <a href="index.php?quanly=quanlysp" style="text-decoration: none;color: black;">
                        <i class="fa-solid fa-house-user"></i> Quản lý sản phẩm</li>
                </a>
                <li> <a href="index.php?quanly=nd" style="text-decoration: none;color: black;">
                        <i class="fa-solid fa-house-user"></i> Quản lý tài khản người dùng</li>
                </a>
                <li> <a href="index.php?quanly=quanlydh" style="text-decoration: none;color: black;">
                        <i class="fa-solid fa-house-user"></i> Quản lý đơn hàng</li>
                </a>
                <li> <a href="index.php?quanly=thongke" style="text-decoration: none;color: black;">
                        <i class="fa-solid fa-house-user"></i> Thống kê</li>
                </a>

            </ul>
            <ul class="otherOption">
                <li class="list_item"><a class="link_item" href="index.php?dangxuat=1">Đăng xuất :<?php if (isset($_SESSION['login'])) {
                                                                                                        echo $_SESSION['login'];
                                                                                                    } ?></a></li>
            </ul>
        </div>

    </nav>
    <nav class="header_navbar_two">

        <div class="navbar">

            <ul class="menu">
                <li> <a href="index.php?quanly=quanlytrangchu" style="text-decoration: none;color: black;">
                        <i class="fa-solid fa-house-user"></i> Quản lý banner</li>
                </a>
                <li> <a href="index.php?quanly=quanlysp" style="text-decoration: none;color: black;">
                        <i class="fa-solid fa-house-user"></i> Quản lý sản phẩm</li>
                </a>
                <li> <a href="index.php?quanly=nd" style="text-decoration: none;color: black;">
                        <i class="fa-solid fa-house-user"></i> Quản lý tài khản người dùng</li>
                </a>
                <li> <a href="index.php?quanly=quanlydh" style="text-decoration: none;color: black;">
                        <i class="fa-solid fa-house-user"></i> Quản lý đơn hàng</li>
                </a>
                <li> <a href="index.php?quanly=thongke" style="text-decoration: none;color: black;">
                        <i class="fa-solid fa-house-user"></i> Thống kê</li>
                </a>

            </ul>
            <ul class="otherOption">
                <li class="list_item"><a class="link_item" href="index.php?dangxuat=1">Đăng xuất :<?php if (isset($_SESSION['login'])) {
                                                                                                        echo $_SESSION['login'];
                                                                                                    } ?></a></li>
            </ul>
        </div>
    </nav>
</header>