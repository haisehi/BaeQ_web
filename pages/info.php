<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        /* border: 1px solid #dddddd; */
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    tr:hover {
        background-color: #D6EEEE;
    }
</style>
<?php
include("admin/config/db.php");
if (isset($_GET['logout']) && $_GET['logout'] == 1) {
    unset($_SESSION['login1']);
    header("Location:pages/dangnhap.php");
}
if (isset($_SESSION['login1'])) {
    $id = $_SESSION['login1'];
    $sql_info = "SELECT * FROM tbl_dangky WHERE tenkhachhang	= '$id'";
    $query_info = mysqli_query($connect, $sql_info);
?>
    <table>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_info)) {
            $i++;
        ?>
            <tbody>
                <tr aria-rowspan="1">
                    <td>
                        <img style="border-radius: 20%;" src="img/<?php echo $row['image_info'] ?>" alt="" width="100px" height="150px">
                    </td>
                </tr>
                <!-- <td><?php echo $i ?></td> -->
                <tr>
                    <th>Tên Nguời dùng : </th>
                    <td><?php echo $row['hovaten'] ?></td>
                </tr>
                <tr>
                    <th>Tên tài khoản : </th>
                    <td><?php echo $row['tenkhachhang'] ?></td>
                </tr>
                <tr>
                    <th>Mật khẩu :</th>
                    <td><?php echo $row['matkhau'] ?></td>
                </tr>
                <tr>
                    <th>Email :</th>
                    <td><?php echo $row['email'] ?></td>
                </tr>
                <tr>
                    <th>Địa chỉ</th>
                    <td><?php echo $row['diachi'] ?></td>
                </tr>
                <tr>
                    <th>Số điện thoại</th>
                    <td><?php echo $row['dienthoai'] ?></td>
                </tr>
                <td><button class="btn btn-success"><a style="text-decoration: none;color: black;" href="index.php?quanly=chinhsuainfo&id=<?php echo $row['tenkhachhang']; ?>">Chỉnh sửa</a></button></td>
                <td><button class="btn btn-success"><a style="text-decoration: none;color: black;" href="index.php?quanly=donhangdadat">Lịch sử mua hàng</a></button></td>

            </tbody>
        <?php
        }
        ?>
    </table>
<?php
}
