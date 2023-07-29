<?php
require_once('config/db.php');
$sql_brands = "SELECT *FROM brands";
$query_brands = mysqli_query($connect, $sql_brands);

if (isset($_POST['them'])) {
    $name = $_POST['name'];

    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];


    $image1 = $_FILES['image1']['name'];
    $image_tmp1 = $_FILES['image1']['tmp_name'];

    $image2 = $_FILES['image2']['name'];
    $image_tmp2 = $_FILES['image2']['tmp_name'];

    $image3 = $_FILES['image3']['name'];
    $image_tmp3 = $_FILES['image3']['tmp_name'];

    $price = $_POST['price'];
    $quatity = $_POST['quatity'];
    $decription = $_POST['decription'];
    $brand_id = $_POST['brand_id'];
    $synopsis = $_POST['synopsis'];

    $sql = "INSERT INTO products(name,image,price,quatity,decription,brand_id,synopsis,image1,image2,image3) 
    VALUES('$name','$image','$price','$quatity','$decription','$brand_id','$synopsis','$image1','$image2','$image3')";
    $query = mysqli_query($connect, $sql);
    move_uploaded_file($image_tmp, 'img/' . $image);
    move_uploaded_file($image_tmp1, 'img/' . $image1);
    move_uploaded_file($image_tmp2, 'img/' . $image2);
    move_uploaded_file($image_tmp3, 'img/' . $image3);

    header('localhost:index.php?page_layout=danhsach');
}
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>thêm sản phẩm</h2>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label for="">ảnh 1</label>
                    <input type="file" class="form-control" name="image1" required>
                </div>
                <div class="form-group">
                    <label for="">ảnh 2</label>
                    <input type="file" class="form-control" name="image2" required>
                </div>
                <div class="form-group">
                    <label for="">ảnh 3</label>
                    <input type="file" class="form-control" name="image3" required>
                </div>
                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" class="form-control" name="price" required>
                </div>
                <div class="form-group">
                    <label for="">Số lượng</label>
                    <input type="number" class="form-control" name="quatity" required>
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <!-- <input type="text" class="form-control" name="decription" required> -->
                    <textarea name="decription" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="">tóm tắt</label>
                    <!-- <input type="text" class="form-control" name="synopsis" required> -->
                    <textarea name="synopsis" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select class="form-control" name="brand_id" id="">
                        <?php
                        while ($row_brand = mysqli_fetch_assoc($query_brands)) { ?>
                            <option value="<?php echo $row_brand['brand_id'] ?>"><?php echo $row_brand['brand_name'] ?></option>
                        <?php } ?>
                        ?>
                    </select>
                </div>
                <input type="submit" class="btn btn-success" value="thêm" name="them">
            </form>
        </div>
        <?php
        require_once 'danhsach.php';
        ?>
    </div>
</div>