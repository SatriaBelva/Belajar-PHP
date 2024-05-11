<?php

$pwd      = "Satria Belva";
$salt     = bin2hex(random_bytes(20)); 
$pepper   = "thisIsAPepperForMyownHashMethod";  
$text     = $pwd.$salt.$pepper;
$a        = hash("sha256", $text);

$storedSalt  = $salt;
$text1       = $pwd.$storedSalt.$pepper;
$b           = hash("sha256", $text1);

// echo $a;
// echo "<br>";
// echo $b;

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