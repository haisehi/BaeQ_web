<?php
include("config/db.php");

$id = $_GET['id'];

$sql_update = "SELECT * FROM tbl_dangky WHERE tenkhachhang = '$id' ";
$query_update = mysqli_query($connect, $sql_update);
$row_up = mysqli_fetch_assoc($query_update);

if (isset($_POST['sua'])) {
    $tenkhachhang = $_POST['tenkhachhang'];

    if ($_FILES['image_info']['name'] == '') {
        $image = $row_up['image_info'];
    } else {
        $image = $_FILES['image_info']['name'];
        $image_tmp = $_FILES['image_info']['tmp_name'];
        move_uploaded_file($image_tmp, 'img/' . $image);
    }

    $matkhau = $_POST['matkhau'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $sdt = $_POST['dienthoai'];
    $hovaten = $_POST['hovaten'];


    $sql = "UPDATE tbl_dangky SET tenkhachhang ='$tenkhachhang',image_info = '$image',matkhau = '$matkhau',email='$email',diachi='$diachi',dienthoai='$sdt',hovaten ='$hovaten ' WHERE tenkhachhang = $id";
    $query = mysqli_query($connect, $sql);
    // header('localhost:index.php?quanly=info');
}
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thay đổi thông tin người dùng</h2>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class=" form-group">
                    <label for="">Ảnh Người dùng</label>
                    <input type="file" class="form-control" name="image_info" value="<?php echo $row_up['image_info'] ?>">
                </div>
                <div class=" mb-3 mt-5">
                    <label for="uname" class="form-label">Tên đăng nhập:</label>
                    <input type="text" class="form-control" placeholder="Enter username" name="tenkhachhang" required value="<?php echo $row_up['tenkhachhang'] ?>">
                    <div class=" valid-feedback">
                    </div>
                    <div class="invalid-feedback">Vui lòng nhập tên tài khoản</div>
                </div>
                <div class="mb-5">
                    <label for="pwd" class="form-label">Mật khẩu:</label>
                    <input type="password" class="form-control" placeholder="Enter password" name="matkhau" required value="<?php echo $row_up['matkhau'] ?>">
                    <div class=" valid-feedback">
                    </div>
                    <div class="invalid-feedback">Vui lòng nhập mật khẩu</div>
                </div>
                <div class="mb-3 mt-5">
                    <label for="uname" class="form-label">Tên khách hàng:</label>
                    <input type="text" class="form-control" placeholder="Enter username" name="hovaten" required value="<?php echo $row_up['hovaten'] ?>">
                    <div class=" valid-feedback">
                    </div>
                    <div class="invalid-feedback">Vui lòng nhập tên khách hàng</div>
                </div>
                <div class="mb-5">
                    <label for="uname" class="form-label">Email:</label>
                    <input type="text" class="form-control" placeholder="Enter email" name="email" required value="<?php echo $row_up['email'] ?>">
                    <div class=" valid-feedback">
                    </div>
                    <div class="invalid-feedback">Vui lòng nhập tên email</div>
                </div>
                <div class="mb-5">
                    <label for="uname" class="form-label">Địa chỉ:</label>
                    <input type="text" class="form-control" placeholder="Enter address" name="diachi" required value="<?php echo $row_up['diachi'] ?>">
                    <div class=" valid-feedback">
                    </div>
                    <div class="invalid-feedback">Vui lòng nhập tên địa chỉ</div>
                </div>
                <div class="mb-5">
                    <label for="uname" class="form-label">Số điện thoại:</label>
                    <input type="number" class="form-control" placeholder="Enter phone number" name="dienthoai" required value="<?php echo $row_up['dienthoai'] ?>">
                    <div class=" valid-feedback">
                    </div>
                    <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
                </div>

                <input type="submit" class="btn btn-success" value="Sửa" name="sua"> | <a class="btn btn-dark" href="index.php?quanly=nd">Quay lại</a>
            </form>
        </div>
    </div>
</div>