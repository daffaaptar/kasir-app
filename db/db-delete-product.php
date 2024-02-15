<?php
session_start();
require_once('db-connection.php');

if (isset($_POST['delete_product'])) {
    $id = $_POST['id'];

    // Get product details before deleting
    $stmt = $conn->prepare("SELECT nama_produk FROM products WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($product_name);
    $stmt->fetch();
    $stmt->close();

    // Delete the product
    $delete_stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
    $delete_stmt->bind_param("i", $id);
    if ($delete_stmt->execute()) {
        // Log activity
        $timestamp = date("Y-m-d H:i:s");
        $username = $_SESSION['username'];
        $action = "Delete Product";
        $log_stmt = $conn->prepare("INSERT INTO activity_log (timestamp, username, action, product_id, product_name) VALUES (?, ?, ?, ?, ?)");
        $log_stmt->bind_param("sssis", $timestamp, $username, $action, $id, $product_name);
        $log_stmt->execute();
        $log_stmt->close();

        echo "Product deleted successfully!";
    } else {
        echo "Failed to delete product.";
    }
    
    $delete_stmt->close();
    $conn->close();
    header('location: ../pages/kasir/manage-product.php');
    exit;
}
?>
