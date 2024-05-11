<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){ // Mengecek apakah halaman ini diakses menggunakan method "POST"
    $nama     = $_POST["nama"];      // Mengambil data pada elemen input yg bernama "nama"
    $username = $_POST["username"];  // Mengambil data pada elemen input yg bernama "username"
    $pwd      = $_POST["pwd"];       // Mengambil data pada elemen input yg bernama "pwd"
    $email    = $_POST["email"];     // Mengambil data pada elemen input yg bernama "emai;"

    try {
        require_once "../model/dbh.inc.php"; // require_once akan menghubungkan dengan file "dbh.inc.php"
                                    // Sama saja dengan mengcopy seluruh kode yang ada pada file "dbh.inc.php" di kode ini
        $insert_query = "INSERT INTO akun_pengguna (nama, username, passwords, email) 
                         VALUES (?,?,?,?);"; // variabel $insert_query untuk memasukan data ke database
                                             // tanda tanya digunakan untuk mencegah SQL Injection

        $stmt = $pdo->prepare($insert_query);                // Mempersiapkan statement SQL untuk dieksekusi dengan PDO. Metode prepare() digunakan untuk melakukan ini. 
        $stmt ->execute([$nama, $username, $pwd, $email]);   // Urutan harus sama dengan urutan kolom pada query dalam variabel $inser_query

        $pdo  = null; // Ini adalah langkah pembersihan setelah query dieksekusi.
        $stmt = null; // Ini adalah langkah pembersihan setelah query dieksekusi.

        header("Location: ../view/index.php"); // Setelah data telah disubmit ke dalam database maka tampilan akan kembali ke file index.php

        die(); // Digunakan untuk mengakhiri eksekusi skrip dan mencetak pesan yang diberikan sebagai argumen
    }catch (PDOException $e) {
        die("Query Failed : " . $e->getMessage());
    }
}
else{
    header("Location: ../view/index.php"); // Apabila halaman ini tidak diakses menggunakan method "POST" maka akan diarahkan kembali ke file index.php
}

// Menggunakan Non-Named Parameter