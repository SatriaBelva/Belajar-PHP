<?php

ini_set('session.use_only_cookies',1);
ini_set('session.use_strict_mode',1);

session_set_cookie_params([
    'lifetime' => 1800,
    'path'     => '/',
    'domain'   => 'localhost', 
    'secure'   => true,
    'httponly' => true
]);

session_start();

if (!isset($_SESSION['last_regeneration'])){    // Mengecek Apakah session tsb belum terdifinisi dan kalo belum, maka akan menjalankan blok kode di bawah
    session_regenerate_id(true);                // Mengupdate id session yang telah ada dengan id session yang baru
    $_SESSION['last_regeneration'] = time();    // Membuat session bernilai current time
}
else{
    $interval = 60 * 30;
    if (time() - $_SESSION['last_regeneration'] >= $interval){   // Mengecek apakah current time dikurangi dengan nilai session lebih dari sama dengan 30 menit
        session_regenerate_id(true);                             // Mengupdate id session yang telah ada dengan id session yang baru
        $_SESSION['last_regeneration'] = time();                 // Membuat session bernilai current time   
    }
}