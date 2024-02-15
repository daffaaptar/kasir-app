<?php
session_start();
require_once('db-connection.php');

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: ../index.php');
    exit;
}

if(isset($_POST['update_product'])) {
    $id = $_POST['id'];
    $nama_produk = $_POST['nama_produk'];
    $harga_produk = $_POST['harga_produk'];

    $stmt = $conn->prepare("UPDATE products SET nama_produk = ?, harga_produk = ? WHERE id = ?");
    $stmt->bind_param("sii", $nama_produk, $harga_produk, $id);

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            // Log activity
            $timestamp = date("Y-m-d H:i:s");
            $username = $_SESSION['username'];
            $action = "Update Product";
            $product_id = $id;
            $product_name = $nama_produk;
            $log_stmt = $conn->prepare("INSERT INTO activity_log (timestamp, username, action, product_id, product_name) VALUES (?, ?, ?, ?, ?)");
            $log_stmt->bind_param("sssis", $timestamp, $username, $action, $product_id, $product_name);
            $log_stmt->execute();
            $log_stmt->close();

            echo "Product updated successfully!";
        } else {
            echo "No changes made to the product";
        }
    } else {
        echo "Failed to update product.";
    }
    
    $stmt->close();
    header('location: ../pages/kasir/manage-product.php');
    exit;
}
?>
