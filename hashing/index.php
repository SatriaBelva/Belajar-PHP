<?php

$pwd         = "Satria Belva";                      // pwd merupakan variabel yang menyimpan Text yang ingin dihashing
$salt        = bin2hex(random_bytes(20));           // Salt merupakan variabel yang menyimpan string random berukuran 20 byte
$pepper      = "thisIsAPepperForMyownHashMethod";   // Pepper merupakan variavel yang menyimpan string tetap
$text        = $pwd.$salt.$pepper;                  // text merupakan variabel yang mengconcat variabel pwd, salt, dan pepper
$a           = hash("sha256", $text);               // a merupakan variabel yang menyimpan method untuk menghashing variabel text

$storedSalt  = $salt;                               // 
$text1       = $pwd.$storedSalt.$pepper;
$b           = hash("sha256", $text1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="passwordHash.php" method="POST">
        <input type="text" name="passwordss" placeholder="Masukkan Password yang Sesuai...">
        <button>Submit</button>
    </form>
</body>
</html>