<?php
    session_start();

    $nama = "bejo";
    $_SESSION["nama"] = $nama;
    $_SESSION["username"] = "Satria Belva";

    function testing($a){
        if (isset($a)){
            return "Data telah terdefinisi";
        }
        else{
            return "Data belum terdifinisi";
        }
    }


    unset($_SESSION["username"]); // Menghapus Nilai 1 Session saja yaitu session "Username"
    session_unset();              // Menghapus Nilai seluruh Session
    session_destroy();            // Mengakhiri Seluruh Session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Session Testing</h1>
    <p><?php echo $_SESSION["username"]; ?></p>
    <p><?php echo $_SESSION["nama"]; ?></p>
    <p><?php echo testing($nama) ?></p>
</body>
</html>