<?php
// session_start();
include("admin/config/db.php");

if (isset($_POST['dangky'])) {
    $tenkhachhang = $_POST['tenkhachhang'];
    $matkhau = $_POST['matkhau'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $sdt = $_POST['dienthoai'];
    $hovaten = $_POST['hovaten'];
    $sql_dangky = mysqli_query($connect, "INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai,hovaten) VALUES  ('" . $tenkhachhang . "','" . $email . "','" . $diachi . "','" . $matkhau . "','" . $sdt . "','" . $hovaten . "')");
    if ($sql_dangky) {
        echo '<p style="text-align: center;color: greenyellow;font-size: 40px;">Bạn đã đăng ký thành công</p>';
        $_SESSION['dangky'] = $tenkhachhang;
        $_SESSION['id_dangky'] = mysqli_insert_id($connect);


        // header("Location:index.php");
    } else {
        echo '<p style="text-align: center;color: red;font-size: 40px;">Bạn đăng ký không thành công</p>';
    }
}
?>
<div class="container p-5 my-5 border">
    <h3 class="text-center">Đăng ký</h3>

    <form action="" class="was-validated" method="POST">
        <div class="mb-3 mt-5">
            <label for="uname" class="form-label">Tên đăng nhập:</label>
            <input type="text" class="form-control" placeholder="Enter username" name="tenkhachhang" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Vui lòng nhập tên tài khoản</div>
        </div>
        <div class="mb-5">
            <label for="pwd" class="form-label">Mật khẩu:</label>
            <input type="password" class="form-control" placeholder="Enter password" name="matkhau" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Vui lòng nhập mật khẩu</div>
        </div>
        <div class="mb-3 mt-5">
            <label for="uname" class="form-label">Tên khách hàng:</label>
            <input type="text" class="form-control" placeholder="Enter username" name="hovaten" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Vui lòng nhập tên tài khoản</div>
        </div>
        <div class="mb-5">
            <label for="uname" class="form-label">Email:</label>
            <input type="text" class="form-control" placeholder="Enter email" name="email" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Vui lòng nhập tên email</div>
        </div>
        <div class="mb-5">
            <label for="uname" class="form-label">Địa chỉ:</label>
            <input type="text" class="form-control" placeholder="Enter address" name="diachi" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Vui lòng nhập tên địa chỉ</div>
        </div>
        <div class="mb-5">
            <label for="uname" class="form-label">Số điện thoại:</label>
            <input type="text" class="form-control" placeholder="Enter phone number" name="dienthoai" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
        </div>

        <input type="submit" class="btn btn-primary" name="dangky" value="Đăng ký" type="text">
        <a href="index.php?quanly=dangnhap" class="btn btn-primary">Đăng nhập</a>

    </form>
</div>