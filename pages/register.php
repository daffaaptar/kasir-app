<?php 
require_once('../db/db-connection.php');
require_once('../db/db-register.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contaainer">
        <img style= "width: 100px; margin-bottom 2rem;" src="" alt="">
        <form method="post">
            <?php if (isset($error_massage)) : ?>
                <div class="error-massage"><?php echo $error_message?></div>
                <?php endif; ?>
         <div>
            <label for="nama">Name</label>
            <input id="nama" name="nama" type="text" placeholder="Your Full Name">
         </div>       
         <div>
            <label for="username">Username</label>
            <input id="username" name="username" type="text" placeholder="Username" required>
        </div>
         <div>
             <label for="password">Password</label>
             <input id="password" name="password" type="password" placeholder="Password" required>
         </div>
         <div>
            <button type="submit">Register</button>
         </div>
         <p>Have an account? <a href="login.php"></a></p>
        </form>
    </div>
</body>
</html>