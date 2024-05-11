<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){ // Mengecek apakah halaman ini diakses menggunakan method "POST"
    $search = $_POST["search"];  // Mengambil data pada elemen input yg bernama "username"

    try {
        require_once "../model/dbh.inc.php"; // require_once akan menghubungkan dengan file "dbh.inc.php"
                                             // Sama saja dengan mengcopy seluruh kode yang ada pada file "dbh.inc.php" di kode ini
        $insert_query = "SELECT * FROM komentar WHERE akun_pengguna_username = :search ;"; // variabel $insert_query untuk memasukan data ke database
                                                                                           // tanda tanya digunakan untuk mencegah SQL Injection

        $stmt = $pdo->prepare($insert_query);  // Mempersiapkan statement SQL untuk dieksekusi dengan PDO. Metode prepare() digunakan untuk melakukan ini. 
        $stmt ->bindParam(":search", $search);       
        $stmt ->execute();

        $hasil = $stmt->fetchAll(PDO::FETCH_ASSOC); 

        $pdo  = null; // Ini adalah langkah pembersihan setelah query dieksekusi.
        $stmt = null; // Ini adalah langkah pembersihan setelah query dieksekusi.

    }catch (PDOException $e) {
        die("Query Failed : " . $e->getMessage());
    }
}
else{
    header("Location: ..view/index.php"); // Apabila halaman ini tidak diakses menggunakan method "POST" maka akan diarahkan kembali ke file index.php
}

?>