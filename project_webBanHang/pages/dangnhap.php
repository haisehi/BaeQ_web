<?php
// session_start();
include("admin/config/db.php");
if (isset($_POST['login1'])) {
    // $usename = $_POST['username'];
    // $id = $_GET['id'];
    $tenkhachhang = $_POST['tenkhachhang'];
    $matkhau = $_POST['matkhau'];
    $sql = "SELECT * FROM tbl_dangky WHERE tenkhachhang='" . $tenkhachhang . "' AND  matkhau = '" . $matkhau . "' LIMIT 1";
    $row = mysqli_query($connect, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $_SESSION['login1'] = $tenkhachhang;
        $_SESSION['id_dangky'] = mysqli_insert_id($connect);
        // echo mysqli_insert_id($connect);

        // header("Location:index.php?quanly=vanchuyen");
    } else {
        echo '<script>alert("Tên đăng nhập hoặc mật khẩu không chính xác")</script>';
        // header("Location:index.php?quanly=dangnhap");
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="container p-5 my-5 border">
        <h3 class="text-center">Login</h3>

        <form action="" class="was-validated" method="POST">
            <div class="mb-3 mt-5">
                <label for="uname" class="form-label">Username:</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter username" name="tenkhachhang" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Vui lòng nhập tên tài khoản</div>
            </div>
            <div class="mb-5">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="matkhau" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Vui lòng nhập mật khẩu</div>
            </div>
            <button type="submit" class="btn btn-primary" name="login1">Đăng nhập</button>
            <button type="submit" class="btn btn-primary" name=""><a href="index.php?quanly=dangky" class="text-decoration-none link-dark">Đăng ký</a></button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>