<?php
    include "../controller/read.inc.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Search Result</h3>
    <?php
        if(empty($hasil)){
            echo "<p>There Were No Result</p>";
        }
        else{
            foreach ($hasil as $row) {
                echo "Username : ".htmlspecialchars($row["akun_pengguna_username"])."<br>";
                echo "Komentar : <br>".htmlspecialchars($row["komentar"])."<br>";
                echo htmlspecialchars($row["waktu"])."<br><br>";
                // var_dump($row);
                // echo "<br>";
                // echo "<br>";
                // var_dump($key);
            }
        }
    ?>
</body>
</html>