<?php
session_start();
require_once('../../db/db-connection.php');

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: ../index.php');
    exit;
}

// Ambil data log aktivitas dari database
$query = "SELECT * FROM activity_log ORDER BY timestamp DESC";
$result = $conn->query($query);

if ($result === false) {
    // Menangani kesalahan saat eksekusi query
    die("Error fetching activity log: " . $conn->error);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../../Assets/style/activity_log.css'>
    <title>Activity Log</title>
</head>

<body>
    <h1>Activity Log</h1>
    <table>
        <tr>
            <th>Timestamp</th>
            <th>User</th>
            <th>Action</th>
            <th>Product ID</th>
            <th>Product Name</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['timestamp']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['action']; ?></td>
                <td><?php echo $row['product_id']; ?></td>
                <td><?php echo $row['product_name']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>
