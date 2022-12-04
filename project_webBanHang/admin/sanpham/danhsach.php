<?php
$sql = "SELECT * FROM products inner join brands ON products.brand_id = brands.brand_id";
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
                        <th>tên sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng sản phẩm</th>
                        <th>Mô tả</th>
                        <th>Tóm tắt</th>
                        <th>Danh mục</th>
                        <th>Sửa</th>
                        <th>Xoá</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td>
                                <img src="img/<?php echo $row['image'] ?>" alt="" width="100px" height="150px">
                            </td>
                            <td><?php echo $row['price'] ?></td>
                            <td><?php echo $row['quatity'] ?></td>
                            <td><?php echo $row['decription'] ?></td>
                            <td><?php echo $row['synopsis'] ?></td>
                            <td><?php echo $row['brand_name'] ?></td>
                            <td><a style="text-decoration: none;" href="index.php?page_layout=sua&id=<?php echo $row['product_id']; ?>">Sửa</a></td>
                            <td><a onclick="return Del('<?php echo $row['name']; ?>')" style="text-decoration: none;" href="index.php?page_layout=xoa&id=<?php echo $row['product_id']; ?>">Xoá</a></td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function Del(name) {
        return confirm("Bạn có chắc muốn xoá sản phẩm : " + name + " không ?");
    }
</script>