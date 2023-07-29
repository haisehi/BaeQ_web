<?php
session_start();
include("config/db.php");
if (isset($_POST['login'])) {
    $usename = $_POST['username'];
    $password = $_POST['pass'];
    $sql = "SELECT * FROM tbl_admin WHERE username='" . $usename . "' and  password = '" . $password . "' LIMIT 1";
    $row = mysqli_query($connect, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $_SESSION['login'] = $usename;
        header("Location:../admin/index.php");
    } else {
        echo '<script>alert("Tên đăng nhập hoặc mật khẩu không chính xác")</script>';
        header("Location:login.php");
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
                <input type="text" class="form-control" id="uname" placeholder="Enter username" name="username" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Vui lòng nhập tên tài khoản</div>
            </div>
            <div class="mb-5">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Vui lòng nhập mật khẩu</div>
            </div>
            <button type="submit" class="btn btn-primary" name="login">Submit</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>