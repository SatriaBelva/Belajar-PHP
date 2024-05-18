<?php
require_once '../../../includes/tes/config_session.inc.php';
require_once '../../../view/V_Login.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OLELO Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h1>Selamat Datang di OLELO!</h1>
            <form action="../../../includes/login.inc.php" method="POST">
                <label for="email">username:</label>
                <input type="text" id="email" name="username" required>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="pwd" required>
                
                <button type="submit">Login</button>
            </form>
            <p>Tidak memiliki akun? <a href="../register/register.php">Register</a></p>
            <?php check_login_errors(); ?>
        </div>
        <div class="illustration">
            <img src="/assets/komputer-login.png" alt="Illustration">
        </div>
    </div>
</body>
</html>
