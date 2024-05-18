<?php
require_once '../../../includes/tes/config_session.inc.php';
require_once '../../../view/V_Register.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OLELO Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="container">
        <div class="illustration">
            <img src="/assets/komputer-regist.png" alt="Illustration">
        </div>
        <div class="register-form">
            <h1>Silakan Isi formulir untuk Mendaftar!</h1>
            <form action="../../../includes/register.inc.php" method="POST">

                <?php register_input();?>

                <button type="submit">Register</button>
            </form>
            <p>Sudah memiliki akun?<a href="../login/login.php"><b>Login</b></a></p>
        </div>
    </div>
    <?php check_signup_errors(); ?>
</body>
</html>
