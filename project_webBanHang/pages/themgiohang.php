<?php
session_start();
include("../admin/config/db.php");
//kick thuoc

// them so luong
if (isset($_GET['cong'])) {
    $id = $_GET['cong'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array(
                'name' => $cart_item['name'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'price' => $cart_item['price'], 'image' => $cart_item['image'], 'product_id' => $cart_item['product_id'], 'size' => $cart_item['size']
            );
            $_SESSION['cart'] = $product;
        } else {
            $tangsoluong = $cart_item['soluong'] + 1;
            if ($cart_item['soluong'] <= 9) {
                $product[] = array(
                    'name' => $cart_item['name'], 'id' => $cart_item['id'], 'soluong' => $tangsoluong, 'price' => $cart_item['price'], 'image' => $cart_item['image'], 'product_id' => $cart_item['product_id'], 'size' => $cart_item['size']
                );
            } else {
                $product[] = array(
                    'name' => $cart_item['name'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'price' => $cart_item['price'], 'image' => $cart_item['image'], 'product_id' => $cart_item['product_id'], 'size' => $cart_item['size']
                );
            }
            $_SESSION['cart'] = $product;
        }
    }
    header('location:../index.php?quanly=giohang');
}
// tru so luong
if (isset($_GET['tru'])) {
    $id = $_GET['tru'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array(
                'name' => $cart_item['name'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'price' => $cart_item['price'], 'image' => $cart_item['image'], 'product_id' => $cart_item['product_id'], 'size' => $cart_item['size']
            );
            $_SESSION['cart'] = $product;
        } else {
            $tangsoluong = $cart_item['soluong'] - 1;
            if ($cart_item['soluong'] > 1) {
                $product[] = array(
                    'name' => $cart_item['name'], 'id' => $cart_item['id'], 'soluong' => $tangsoluong, 'price' => $cart_item['price'], 'image' => $cart_item['image'], 'product_id' => $cart_item['product_id'], 'size' => $cart_item['size']
                );
            } else {
                $product[] = array(
                    'name' => $cart_item['name'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'price' => $cart_item['price'], 'image' => $cart_item['image'], 'product_id' => $cart_item['product_id'], 'size' => $cart_item['size']
                );
            }
            $_SESSION['cart'] = $product;
        }
    }
    header('location:../index.php?quanly=giohang');
}
// xoa san pham
if (isset($_SESSION['cart']) && isset($_GET['xoa'])) {
    $id = $_GET['xoa'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array(
                'name' => $cart_item['name'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'price' => $cart_item['price'], 'image' => $cart_item['image'], 'product_id' => $cart_item['product_id'], 'size' => $cart_item['size']
            );
        }
        $_SESSION['cart'] = $product;
        header('location:../index.php?quanly=giohang');
    }
}
// xoa tat ca
if (isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1) {
    unset($_SESSION['cart']);
    header('location:../index.php?quanly=giohang');
}
// them san pham vao gio hang

if (isset($_POST['themsp'])) {
    // session_destroy();
    // them kich thuoc
    $id = $_GET['idsanpham'];
    $size = $_POST['size'];
    $sql_insert_size = "UPDATE products SET size='$size' WHERE product_id = $id";
    $query_size = mysqli_query($connect, $sql_insert_size);
    // select

    $soluong = 1;
    $sql = "SELECT * FROM products WHERE product_id = $id LIMIT 1";
    $query = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($query);
    if ($row) {
        $new_product[] = array('name' => $row['name'], 'id' => $id, 'soluong' => $soluong, 'price' => $row['price'], 'image' => $row['image'], 'product_id' => $row['product_id'], 'size' => $size);
        // kiem tra session gio hang
        if (isset($_SESSION['cart'])) {
            $found = false;
            foreach ($_SESSION['cart'] as $cart_item) {
                if ($cart_item['id'] == $id) {
                    $product[] = array(
                        'name' => $cart_item['name'], 'id' => $cart_item['id'], 'soluong' => $soluong + 1, 'price' => $cart_item['price'], 'image' => $cart_item['image'], 'product_id' => $cart_item['product_id'], 'size' => $cart_item['size']
                    );
                    $found = true;
                } else {
                    $product[] = array(
                        'name' => $cart_item['name'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'price' => $cart_item['price'], 'image' => $cart_item['image'], 'product_id' => $cart_item['product_id'], 'size' => $cart_item['size']
                    );
                }
            }
            if ($found == false) {
                $_SESSION['cart'] = array_merge($product, $new_product);
            } else {
                $_SESSION['cart'] = $product;
            }
        } else {
            $_SESSION['cart'] = $new_product;
        }
    }
    header('location:../index.php?quanly=giohang');
}
