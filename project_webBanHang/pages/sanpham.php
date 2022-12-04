<?php
include('admin/config/db.php');

$id = $_GET['id'];
$sql_chitiet = "SELECT * FROM products,brands WHERE products.brand_id = brands.brand_id  AND products.product_id=$id ORDER BY `products`.`product_id` LIMIT 1";
$query = mysqli_query($connect, $sql_chitiet);
// $sql_size = "SELECT *FROM size ORDER BY size_id DESC";
// $query_size = mysqli_query($connect, $sql_size);
while ($row_sp = mysqli_fetch_array($query)) {
?>
    <div class="chitiet">
        <div class="tabs">
            <!-- END tabs-nav -->
            <div id="tabs-content">
                <div id="tab1" class="tab-content">
                    <div class="hinhanh_sanpham">
                        <img style="width: 100%;height: 100%;" src="admin/img/<?php echo $row_sp['image']; ?>" alt="">
                    </div>
                </div>
                <div id="tab2" class="tab-content">
                    <div class="hinhanh_sanpham">
                        <img style="width: 100%;height: 100%;" src="admin/img/<?php echo $row_sp['image1']; ?>" alt="">
                    </div>
                </div>
                <div id="tab3" class="tab-content">
                    <div class="hinhanh_sanpham">
                        <img style="width: 100%;height: 100%;" src="admin/img/<?php echo $row_sp['image2']; ?>" alt="">
                    </div>
                </div>
                <div id="tab4" class="tab-content">
                    <div class="hinhanh_sanpham">
                        <img style="width: 100%;height: 100%;" src="admin/img/<?php echo $row_sp['image3']; ?>" alt="">
                    </div>
                </div>
            </div> <!-- END tabs-content -->
            <div style="clear: both;"></div>
            <ul id="tabs-nav">
                <li><a href="#tab1"> <img style="width: 100px;height: 150px" src="admin/img/<?php echo $row_sp['image']; ?>" alt="">
                    </a></li>
                <li><a href="#tab2"> <img style="width: 100px;height: 150px" src="admin/img/<?php echo $row_sp['image1']; ?>" alt="">
                    </a></li>
                <li><a href="#tab3"> <img style="width: 100px;height: 150px" src="admin/img/<?php echo $row_sp['image2']; ?>" alt="">
                    </a></li>
                <li><a href="#tab4"> <img style="width: 100px;height: 150px" src="admin/img/<?php echo $row_sp['image3']; ?>" alt="">
                    </a></li>
            </ul>
        </div> <!-- END tabs -->
        <form action="pages/themgiohang.php?idsanpham=<?php echo $row_sp['product_id'] ?>" method="POST">
            <div class="chitiet_sanpham">
                <h3 class="chitiet_name"> <?php echo $row_sp['name']; ?></h3>
                <h5 class="chitiet_nd_header">Nội dung:</h5>
                <p class="chitiet_noidung"> <?php echo $row_sp['decription']; ?></p>
                <style>
                    .kickthuoc {
                        display: flex;
                        margin: 0 10px;
                    }

                    .kickthuoc .form-check label {
                        margin: 0 10px;
                    }
                </style>
                <div class="kickthuoc">
                    <div class="form-check">
                        <label class="form-check-label" for="exampleRadios1">
                            M
                        </label>
                        <input class="form-check-input" type="radio" name="size" id="exampleRadios1" value="M" checked>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="exampleRadios2">
                            S
                        </label>
                        <input class="form-check-input" type="radio" name="size" id="exampleRadios2" value="S">

                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="exampleRadios3">
                            L
                        </label>
                        <input class="form-check-input" type="radio" name="size" id="exampleRadios3" value="L">

                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="exampleRadios4">
                            XL
                        </label>
                        <input class="form-check-input" type="radio" name="size" id="exampleRadios4" value="XL">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="exampleRadios5">
                            XXL
                        </label>
                        <input class="form-check-input" type="radio" name="size" id="exampleRadios5" value="XXL">

                    </div>
                </div>

                <h5 class="chitiet_nd_header">Thông tin thêm:</h5>
                <p class="chitiet_noidung"> <?php echo $row_sp['synopsis']; ?></p><br>
                <p class="chitiet_noidung">Mã sản phẩm : <?php echo $row_sp['product_id']; ?></p>
                <p class="chitiet_gia"> <?php echo number_format($row_sp['price']) . "VND"; ?></p>
                <button class="btn btn-success" name="themsp">Thêm vào giỏ hàng</button>

            </div>
        </form>
    </div>
    <div style="clear: both;"></div>

<?php } ?>