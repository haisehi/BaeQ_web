<div id="main">
    <?php
    // session_start();
    if (isset($_GET['quanly'])) {
        $tam = $_GET['quanly'];
    } else {
        $tam = '';
    }
    if ($tam == 'giohang') {
        include('giohang.php');
    }
    // login
    elseif ($tam == 'dangnhap') {
        include('dangnhap.php');
    } elseif ($tam == 'dangky') {
        include('dangky.php');
    } elseif ($tam == 'thanhtoan') {
        include('thanhtoan.php');
    } elseif ($tam == 'tintuc') {
        include('tintuc.php');
    } elseif ($tam == 'timkiem') {
        include('search.php');
    }
    // infor
    elseif ($tam == 'info') {
        include('info.php');
    } elseif ($tam == 'chinhsuainfo') {
        include('chinhsuainfo.php');
    }
    //don hang
    elseif ($tam == 'giohang') {
        include('giohang.php');
    } elseif ($tam == 'vanchuyen') {
        include('vanchuyen.php');
    } elseif ($tam == 'ttthanhtoan') {
        include('thongtinthanhtoan.php');
    } elseif ($tam == 'donhangdadat') {
        include('chitietdonhangdadat.php');
    } elseif ($tam == 'lichsu') {
        include('lichsudonhang.php');
    }

    // nam
    elseif ($tam == 'aoNam') {
        include('../project_webBanHang/pages/main/nam/ao.php');
    } elseif ($tam == 'quanNam') {
        include('../project_webBanHang/pages/main/nam/quan.php');
    } elseif ($tam == 'aokhoacNam') {
        include('../project_webBanHang/pages/main/nam/aokhoac.php');
    } elseif ($tam == 'vestNam') {
        include('../project_webBanHang/pages/main/nam/vest.php');
    }
    // nu
    elseif ($tam == 'aoNu') {
        include('../project_webBanHang/pages/main/nu/ao.php');
    } elseif ($tam == 'quanNu') {
        include('../project_webBanHang/pages/main/nu/quan.php');
    } elseif ($tam == 'aokhoacNu') {
        include('../project_webBanHang/pages/main/nu/aokhoac.php');
    } elseif ($tam == 'vestNu') {
        include('../project_webBanHang/pages/main/nu/vest.php');
    } elseif ($tam == 'vay') {
        include('../project_webBanHang/pages/main/nu/vay.php');
    } elseif ($tam == 'ouffits') {
        include('../project_webBanHang/pages/main/nu/ouffit.php');
    }
    // tre em
    elseif ($tam == 'Oufftsnam') {
        include('../project_webBanHang/pages/main/treem/aonam.php');
    } elseif ($tam == 'Oufftsnu') {
        include('../project_webBanHang/pages/main/treem/aonu.php');
    }
    // tui
    elseif ($tam == 'tuinam') {
        include('../project_webBanHang/pages/main/tui/tuinam.php');
    } elseif ($tam == 'tuinu') {
        include('../project_webBanHang/pages/main/tui/tuinu.php');
    } elseif ($tam == 'balotreem') {
        include('../project_webBanHang/pages/main/tui/balotreem.php');
    } elseif ($tam == 'products') {
        include('sanpham.php');
    } else {
        include('index.php');
    }
    ?>
</div>