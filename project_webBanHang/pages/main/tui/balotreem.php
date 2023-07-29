<?php
require_once('../project_webBanHang/admin/config/db.php');
if (isset($_GET['trang'])) {
    $page = $_GET['trang'];
} else {
    $page = 1;
}
if ($page == '' || $page == 1) {
    $begin = 0;
} else {
    $begin = ($page * 12) - 12;
}
$id = $_GET['id'];
$sql = "SELECT * FROM products,brands WHERE products.brand_id = brands.brand_id AND products.brand_id=$id ORDER BY `products`.`product_id` DESC LIMIT $begin,12";
$query = mysqli_query($connect, $sql);
?>
<ul class="product_list ">
    <?php
    while ($row_pro = mysqli_fetch_array($query)) {
    ?>
        <a href="index.php?quanly=products&id=<?php echo $row_pro['product_id']; ?>">
            <li class="col">
                <div class="img_product">
                    <img class="imgmain" width="100% " height=100% src="admin/img/<?php echo $row_pro['image']; ?>" alt="">
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
<div style="clear: both;"></div>
<?php
$sql_trang = mysqli_query($connect, "SELECT * FROM products");
$row_count = mysqli_num_rows($sql_trang);
$trang = ceil($row_count / 7);

?>
<ul class="list_trang">
    <?php
    // echo $page;
    for ($i = 1; $i <= $trang; $i++) {
    ?>
        <li <?php if ($i == $page) {
                echo 'style = "background-color: #6c6b74;"';
            } else {
                echo '';
            } ?>><a style="text-decoration: none;color: black;" href="index.php?quanly=balotreem&id=15&trang=<?php echo $i ?>"><?php echo $i ?></a></li>
    <?php
    }
    ?>
</ul>