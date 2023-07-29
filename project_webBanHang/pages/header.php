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
                <li> <a href="index.php?quanly=trangchu" style="text-decoration: none;color: black;">
                        <i class="fa-solid fa-house-user"></i> HOME</li>
                </a>
                <li>
                    <i class="fa-solid fa-shirt"></i>
                    Nam
                    <label>
                        <input type="checkbox" />
                        <i class="fa-solid fa-angle-down"></i>
                    </label>
                    <ul>
                        <a class="none_decoration" href="index.php?quanly=aoNam&id=1">
                            <li>Áo</li>
                        </a>
                        <a class="none_decoration" href="index.php?quanly=quanNam&id=2">
                            <li>Quần</li>
                        </a>
                        <a class="none_decoration" href="index.php?quanly=aokhoacNam&id=3">
                            <li>Áo khoác</li>
                        </a>
                        <a class="none_decoration" href="index.php?quanly=vestNam&id=4">
                            <li>Vest</li>
                        </a>
                    </ul>
                </li>

                <li>
                    <i class="fa-solid fa-shirt"></i>
                    Nữ
                    <label>
                        <input type="checkbox" />
                        <i class="fa-solid fa-angle-down"></i>
                    </label>
                    <ul>
                        <a class="none_decoration" href="index.php?quanly=aoNu&id=5">
                            <li>Áo</li>
                        </a>
                        <a class="none_decoration" href="index.php?quanly=quanNu&id=6">
                            <li>Quần</li>
                        </a>
                        <a class="none_decoration" href="index.php?quanly=aokhoacNu&id=7">
                            <li>Áo khoác</li>
                        </a>
                        <a class="none_decoration" href="index.php?quanly=vestNu&id=8">
                            <li>Vest</li>
                        </a>
                        <a class="none_decoration" href="index.php?quanly=vay&id=9">
                            <li>Váy</li>
                        </a>
                        <a class="none_decoration" href="index.php?quanly=ouffits&id=10">
                            <li>Ouffts</li>
                        </a>
                    </ul>
                </li>
                <li>
                    <i class="fa-solid fa-shirt"></i>
                    Trẻ em
                    <label>
                        <input type="checkbox" />
                        <i class="fa-solid fa-angle-down"></i>
                    </label>
                    <ul>
                        <a class="none_decoration" href="index.php?quanly=Oufftsnam&id=11">
                            <li>Ouffts nam</li>
                        </a>
                        <a class="none_decoration" href="index.php?quanly=Oufftsnu&id=12">
                            <li>Ouffts nữ</li>
                        </a>
                    </ul>
                </li>
                <li>
                    <i class="fa-solid fa-bag-shopping"></i>
                    Túi
                    <label>
                        <input type="checkbox" />

                    </label>
                    <ul>
                        <a class="none_decoration" href="index.php?quanly=tuinam&id=13">
                            <li>Túi cho nam</li>
                        </a>
                        <a class="none_decoration" href="index.php?quanly=tuinu&id=14">
                            <li>Túi cho nữ</li>
                        </a>
                        <a class="none_decoration" href="index.php?quanly=balotreem&id=15">
                            <li>Balo trẻ em</li>
                        </a>
                </li>
            </ul>
            </ul>
            <ul class="otherOption">
                <li><i class="fa-solid fa-user"></i> Sign in
                    <label>
                        <input type="checkbox" />
                        <i class="fa-solid fa-angle-down"></i>
                    </label>
                    <ul>
                        <?php
                        if (isset($_SESSION['login1'])) {
                        ?>
                            <a href="index.php?dangxuat=1" style="text-decoration: none;color: black;" class="icon">
                                <li>Đăng xuất</li>
                            </a>
                            <a href="index.php?quanly=info" style="text-decoration: none;color: black;" class="icon">
                                <li>Thông tin</li>
                            </a>
                        <?php
                        } else {
                        ?>
                            <a href="index.php?quanly=dangky" style="text-decoration: none;color: black;">
                                <li>Đăng ký <i class="fa-solid fa-arrow-right-to-bracket"></i></li>
                            </a>
                        <?php
                        }
                        ?>
                    </ul>
                </li>
                <li> <a href="index.php?quanly=giohang" style="color: black;"> <i class="fa-solid fa-bag-shopping icon icon-cart"></i></a></li>
            </ul>
        </div>
        <!-- nav pc -->
        <ul class="logo">
            <a href=""> <img class="logo_img" src="../project_webBanHang/img/logo.png" alt="" /></a>
        </ul>
        <ul class="nav-icon">
            <!-- search -->
            <form action="index.php?quanly=timkiem" method="POST">
                <div class="search">
                    <i class="fa-solid fa-magnifying-glass icon icon-search"></i>
                    <input type="text" required class="input_search" name="tukhoa" placeholder="tìm kiếm ..." />
                    <input type="submit" name="timkiem" value="Tìm kiếm" class="btnsearch">
                </div>
            </form>
        </ul>
    </nav>
    <nav class="header_navbar_two">

        <div class="navbar">
            <input type="checkbox" name="openNav" id="openNav" />
            <label for="openNav" class="openNav">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <ul class="menu">
                <li> <a href="index.php?quanly=trangchu" style="text-decoration: none;color: black;">
                        <i class="fa-solid fa-house-user"></i> HOME</li>
                </a>
                <li>
                    <i class="fa-solid fa-shirt"></i>
                    Nam
                    <label>
                        <input type="checkbox" />
                        <i class="fa-solid fa-angle-down"></i>
                    </label>
                    <ul>
                        <a class="none_decoration" href="index.php?quanly=aoNam&id=1">
                            <li>Áo</li>
                        </a>
                        <a class="none_decoration" href="index.php?quanly=quanNam&id=2">
                            <li>Quần</li>
                        </a>
                        <a class="none_decoration" href="index.php?quanly=aokhoacNam&id=3">
                            <li>Áo khoác</li>
                        </a>
                        <a class="none_decoration" href="index.php?quanly=vestNam&id=4">
                            <li>Vest</li>
                        </a>
                    </ul>
                </li>

                <li>
                    <i class="fa-solid fa-shirt"></i>
                    Nữ
                    <label>
                        <input type="checkbox" />
                        <i class="fa-solid fa-angle-down"></i>
                    </label>
                    <ul>
                        <a class="none_decoration" href="index.php?quanly=aoNu&id=5">
                            <li>Áo</li>
                        </a>
                        <a class="none_decoration" href="index.php?quanly=quanNu&id=6">
                            <li>Quần</li>
                        </a>
                        <a class="none_decoration" href="index.php?quanly=aokhoacNu&id=7">
                            <li>Áo khoác</li>
                        </a>
                        <a class="none_decoration" href="index.php?quanly=vestNu&id=8">
                            <li>Vest</li>
                        </a>
                        <a class="none_decoration" href="index.php?quanly=vay&id=9">
                            <li>Váy</li>
                        </a>
                        <a class="none_decoration" href="index.php?quanly=ouffits&id=10">
                            <li>Ouffts</li>
                        </a>
                    </ul>
                </li>
                <li>
                    <i class="fa-solid fa-shirt"></i>
                    Trẻ em
                    <label>
                        <input type="checkbox" />
                        <i class="fa-solid fa-angle-down"></i>
                    </label>
                    <ul>
                        <a class="none_decoration" href="index.php?quanly=Oufftsnam&id=11">
                            <li>Ouffts nam</li>
                        </a>
                        <a class="none_decoration" href="index.php?quanly=Oufftsnu&id=12">
                            <li>Ouffts nữ</li>
                        </a>
                    </ul>
                </li>
                <li>
                    <i class="fa-solid fa-bag-shopping"></i>
                    Túi
                    <label>
                        <input type="checkbox" />

                    </label>
                    <ul>
                        <a class="none_decoration" href="index.php?quanly=tuinam&id=13">
                            <li>Túi cho nam</li>
                        </a>
                        <a class="none_decoration" href="index.php?quanly=tuinu&id=14">
                            <li>Túi cho nữ</li>
                        </a>
                        <a class="none_decoration" href="index.php?quanly=balotreem&id=15">
                            <li>Balo trẻ em</li>
                        </a>
                </li>
            </ul>
            </ul>
            <ul class="otherOption">
                <li><i class="fa-solid fa-user"></i> Sign in
                    <label>
                        <input type="checkbox" />
                        <i class="fa-solid fa-angle-down"></i>
                    </label>
                    <ul>
                        <?php
                        if (isset($_SESSION['login1'])) {
                        ?>
                            <a href="index.php?dangxuat=1" style="text-decoration: none;color: black;" class="icon">
                                <li>Đăng xuất</li>
                            </a>
                            <a href="index.php?quanly=info" style="text-decoration: none;color: black;" class="icon">
                                <li>Thông tin</li>
                            </a>
                        <?php
                        } else {
                        ?>
                            <a href="index.php?quanly=dangky" style="text-decoration: none;color: black;">

                                <li>Đăng ký <i class="fa-solid fa-arrow-right-to-bracket"></i></li>
                            </a>
                        <?php
                        }
                        ?>
                    </ul>
                </li>
                <li> <a href="index.php?quanly=giohang" style="color: black;"> <i class="fa-solid fa-bag-shopping icon icon-cart"></i></a></li>
            </ul>
        </div>
    </nav>
</header>