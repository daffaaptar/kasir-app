<?php
require_once('../db/db-connection.php');
require_once('../db/db-login.php')

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jouvnie | Login</title>
    <link rel="stylesheet" href="../assets/style/login.css">
</head>

<body>

<div class="container">
    <img style="width: 100px; margin-bottom: 2rem;" src="./assets/images/logo.png" alt="Jouvnie Logo">

    <form method="POST">
        <?php if (isset($error_message)): ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <div>
            <label for="username">Username</label>
            <input id="username" name="username" type="text" placeholder="Username" required>
        </div>

        <div>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" placeholder="***" required>
        </div>

        <div>
            <button type="submit">Sign In</button>
        </div>

        <div class="text-center mt-4">
            <p>Don't have an account? <a href="register.php">Register here</a></p>
        </div>
    </form>
</div>

</body>

</html>