<?php
require_once 'includes/tes/config_session.inc.php';
require_once 'view/V_Register.php';
require_once 'view/V_Login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="background-color: rgb(220, 226, 232);
                width: 500px;
                height: 500px;
                margin-left: auto;
                margin-right: auto;
                font-family: poppins;
                padding-left: 5px;
                border-radius: 10px;
                display: flex;
                flex-direction : column;
                justify-content: center;
                align-items: flex-start;">
        <form action="includes/login.inc.php" method="POST">
            <h1 style="font-family: poppins">Login</h1>
            <input type="text" name="username" placeholder="Masukkan username ...">
            <input type="password" name="pwd" placeholder="Masukkan password ...">
            <button>Login</button>
        </form>

        <?php
            check_login_errors();
        ?>
    
    
        <form action="includes/register.inc.php" method="POST">
            <h1 style="font-family: poppins">Register</h1>
            <?php register_input();
            ?>
            <button>Register</button>
        </form>
    </div>

    <?php
        check_signup_errors();
    ?>
    
</body>
</html>