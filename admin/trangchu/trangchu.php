<?php
require_once('config/db.php');

if (isset($_POST['them'])) {
    if ($_FILES['img1']['name'] == '') {
        $image1 = $row_up['img1'];
    } else {
        $image1 = $_FILES['img1']['name'];
        $image_tmp1 = $_FILES['img1']['tmp_name'];
        move_uploaded_file($image_tmp1, 'img/' . $image1);
    }

    if ($_FILES['img2']['name'] == '') {
        $image2 = $row_up['img2'];
    } else {
        $image2 = $_FILES['img2']['name'];
        $image_tmp2 = $_FILES['img2']['tmp_name'];
        move_uploaded_file($image_tmp2, 'img/' . $image2);
    }

    if ($_FILES['img3']['name'] == '') {
        $image3 = $row_up['img3'];
    } else {
        $image3 = $_FILES['img3']['name'];
        $image_tmp3 = $_FILES['img3']['tmp_name'];
        move_uploaded_file($image_tmp3, 'img/' . $image3);
    }

    if ($_FILES['img4']['name'] == '') {
        $image4 = $row_up['img4'];
    } else {
        $image4 = $_FILES['img4']['name'];
        $image_tmp4 = $_FILES['img4']['tmp_name'];
        move_uploaded_file($image_tmp4, 'img/' . $image4);
    }
    if ($_FILES['img5']['name'] == '') {
        $image5 = $row_up['img5'];
    } else {
        $image5 = $_FILES['img5']['name'];
        $image_tmp5 = $_FILES['img5']['tmp_name'];
        move_uploaded_file($image_tmp5, 'img/' . $image5);
    }

    if ($_FILES['img6']['name'] == '') {
        $image6 = $row_up['img6'];
    } else {
        $image6 = $_FILES['img6']['name'];
        $image_tmp6 = $_FILES['img6']['tmp_name'];
        move_uploaded_file($image_tmp6, 'img/' . $image6);
    }

    if ($_FILES['img7']['name'] == '') {
        $image7 = $row_up['img7'];
    } else {
        $image7 = $_FILES['img7']['name'];
        $image_tmp7 = $_FILES['img7']['tmp_name'];
        move_uploaded_file($image_tmp7, 'img/' . $image7);
    }

    $sql = "UPDATE trangchu SET img1='$image1',img2='$image2',img3='$image3',img4='$image4',img5='$image5',img6='$image6',img7='$image7' WHERE id_img='1'";
    $query = mysqli_query($connect, $sql);


    header('localhost:index.php?page_layout=danhsach');
}
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Quản lý banner</h2>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Ảnh nam</label>
                    <input type="file" class="form-control" name="img1">
                </div>
                <div class="form-group">
                    <label for="">ảnh nữ</label>
                    <input type="file" class="form-control" name="img2" required>
                </div>
                <div class="form-group">
                    <label for="">ảnh 3</label>
                    <input type="file" class="form-control" name="img3" required>
                </div>
                <div class="form-group">
                    <label for="">ảnh slide 1</label>
                    <input type="file" class="form-control" name="img4" required>
                </div>
                <div class="form-group">
                    <label for="">ảnh slide 2</label>
                    <input type="file" class="form-control" name="img5" required>
                </div>
                <div class="form-group">
                    <label for="">ảnh slide 3</label>
                    <input type="file" class="form-control" name="img6" required>
                </div>
                <div class="form-group">
                    <label for="">Video</label>
                    <input type="file" class="form-control" name="img7" required>
                </div>
                <input type="submit" class="btn btn-success" value="thêm" name="them">
            </form>
        </div>
        <?php
        ?>
    </div>
</div>
<?php
$sql = "SELECT * FROM trangchu";
$query = mysqli_query($connect, $sql);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách sản phẩm</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="bg-dark text-light">
                    <tr>
                        <th>#</th>
                        <th>Ảnh sản phẩm 1</th>
                        <th>Ảnh sản phẩm 2</th>
                        <th>Ảnh sản phẩm 3</th>
                        <th>Ảnh sản phẩm 4</th>
                        <th>Ảnh sản phẩm 5</th>
                        <th>Ảnh sản phẩm 6</th>
                        <th>Ảnh sản phẩm 7</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td>
                                <img src="img/<?php echo $row['img1'] ?>" alt="" width="100px" height="150px">
                            </td>
                            <td>
                                <img src="img/<?php echo $row['img2'] ?>" alt="" width="100px" height="150px">
                            </td>
                            <td>
                                <img src="img/<?php echo $row['img3'] ?>" alt="" width="100px" height="150px">
                            </td>
                            <td>
                                <img src="img/<?php echo $row['img4'] ?>" alt="" width="100px" height="150px">
                            </td>
                            <td>
                                <img src="img/<?php echo $row['img5'] ?>" alt="" width="100px" height="150px">
                            </td>
                            <td>
                                <img src="img/<?php echo $row['img6'] ?>" alt="" width="100px" height="150px">
                            </td>
                            <td>
                                <img src="img/<?php echo $row['img7'] ?>" alt="" width="100px" height="150px">
                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>