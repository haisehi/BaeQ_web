<?php
$id = $_GET['id'];

$sql_brands = "SELECT *FROM brands";
$query_brands = mysqli_query($connect, $sql_brands);

$sql_update = "SELECT * FROM products WHERE product_id = $id ";
$query_update = mysqli_query($connect, $sql_update);
$row_up = mysqli_fetch_assoc($query_update);

if (isset($_POST['sua'])) {
    $name = $_POST['name'];

    if ($_FILES['image']['name'] == '') {
        $image = $row_up['image'];
    } else {
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($image_tmp, 'img/' . $image);
    }

    if ($_FILES['image1']['name'] == '') {
        $image1 = $row_up['image1'];
    } else {
        $image1 = $_FILES['image1']['name'];
        $image_tmp1 = $_FILES['image1']['tmp_name'];
        move_uploaded_file($image_tmp1, 'img/' . $image1);
    }

    if ($_FILES['image2']['name'] == '') {
        $image2 = $row_up['image2'];
    } else {
        $image2 = $_FILES['image2']['name'];
        $image_tmp2 = $_FILES['image2']['tmp_name'];
        move_uploaded_file($image_tmp2, 'img/' . $image2);
    }

    if ($_FILES['image3']['name'] == '') {
        $image3 = $row_up['image3'];
    } else {
        $image3 = $_FILES['image3']['name'];
        $image_tmp3 = $_FILES['image3']['tmp_name'];
        move_uploaded_file($image_tmp3, 'img/' . $image3);
    }

    $price = $_POST['price'];
    $quatity = $_POST['quatity'];
    $decription = $_POST['decription'];
    $brand_id = $_POST['brand_id'];
    $synopsis = $_POST['synopsis'];


    $sql = "UPDATE products SET name ='$name',image = '$image',image1='$image1',image2='$image2',image3='$image3',price = '$price',quatity='$quatity',decription='$decription',brand_id='$brand_id',synopsis='$synopsis' WHERE product_id = $id";
    $query = mysqli_query($connect, $sql);
    header('localhost:index.php?page_layout=danhsach');
}
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa sản phẩm</h2>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="name" required value="<?php echo $row_up['name'] ?>">
                </div>
                <div class=" form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label for="">ảnh 1</label>
                    <input type="file" class="form-control" name="image1">
                </div>
                <div class="form-group">
                    <label for="">ảnh 2</label>
                    <input type="file" class="form-control" name="image2">
                </div>
                <div class="form-group">
                    <label for="">ảnh 3</label>
                    <input type="file" class="form-control" name="image3">
                </div>
                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" class="form-control" name="price" required value="<?php echo $row_up['price'] ?>">
                </div>
                <div class=" form-group">
                    <label for="">Số lượng</label>
                    <input type="number" class="form-control" name="quatity" required value="<?php echo $row_up['quatity'] ?>">
                </div>
                <div class=" form-group">
                    <label for="">Mô tả</label>
                    <!-- <input type="text" class="form-control" name="decription" required value="<?php echo $row_up['decription'] ?>"> -->
                    <textarea name="decription" id="" cols="30" rows="10"></textarea>
                </div>
                <div class=" form-group">
                    <label for="">tóm tắt</label>
                    <!-- <input type="text" class="form-control" name="synopsis" required value="<?php echo $row_up['synopsis'] ?>"> -->
                    <textarea name="synopsis" id="" cols="30" rows="10"></textarea>
                </div>

                <div class=" form-group">
                    <label for="">Danh mục</label>
                    <select class="form-control" name="brand_id" id="">
                        <?php
                        while ($row_brand = mysqli_fetch_assoc($query_brands)) { ?>
                            <option value="<?php echo $row_brand['brand_id'] ?>"><?php echo $row_brand['brand_name'] ?></option>
                        <?php } ?>
                        ?>
                    </select>
                </div>
                <input type="submit" class="btn btn-success" value="Sửa" name="sua"> | <a class="btn btn-dark" href="index.php?page_layout=them">Danh sách</a>
            </form>
        </div>
    </div>
</div>