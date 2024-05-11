<?php

    // $pwd = "Satria Belva";
    // $opt = [
    //     'cost' => 12
    // ];

    // $hashedPWD = password_hash($pwd, PASSWORD_BCRYPT, $opt);
    // echo $hashedPWD;
    
    // $pwdLogin = "Satria Belva";
    // echo "<br>";
    
    // if(password_verify($pwdLogin, $hashedPWD)){
    //     echo "berhasil";
    // }
    // else{
    //     echo "gagal";
    // }

    $Truepwd = "12345";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $pwd = htmlspecialchars($_POST['passwordss']);
        $opt = [
            'cost' => 12
        ];
        $hashedPWD = password_hash($pwd, PASSWORD_BCRYPT, $opt);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(password_verify($Truepwd, $hashedPWD)){
            echo "Password Sama";
            echo "<div> password yang telah dienkripsi : $hashedPWD </div>";
        }
        else{
            echo "Password Tidak Sama";
            echo "<div> password yang dimasukkan : $pwd <br>password yang benar : $Truepwd</div>";
        }
    ?>
</body>
</html>