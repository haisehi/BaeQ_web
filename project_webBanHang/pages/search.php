<?php
include('admin/config/db.php');
if (isset($_POST['timkiem'])) {
    $tukhoa = $_POST['tukhoa'];
} else {
    $tukhoa = '';
}

$sql_chitiet = "SELECT * FROM products WHERE products.name LIKE '%" . $tukhoa . "%'";
$query = mysqli_query($connect, $sql_chitiet);
?>
<h3 style="text-align: center;font-family: monospace;">Kết quả nhận được : <?php $_POST['tukhoa'] ?></h3>
<ul class="product_list">
    <?php
    while ($row_pro = mysqli_fetch_array($query)) {
    ?>
        <a href="index.php?quanly=products&id=<?php echo $row_pro['product_id']; ?>">
            <li>
                <div class="img_product">
                    <img width="100% " height=100% src="admin/img/<?php echo $row_pro['image']; ?>" alt="">

                </div>
                <p class="title_product">tên sản phẩm : <?php echo $row_pro['name']; ?></p>
                <p class="price_product">Giá : <?php echo number_format($row_pro['price']) . 'vnd'; ?></p>
                <p class="title_product">Số lượng : <?php echo $row_pro['quatity']; ?></p>
            </li>
        </a>
    <?php
    }
    ?>

</ul>