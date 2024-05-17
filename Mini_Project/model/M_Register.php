<?php
// File yang berisi function untuk meng-query CRUD dan berinteraksi tanpa database 

declare(strict_types=1);

function getUsername(object $pdo, string $username)
{
    $query = "SELECT username FROM akun WHERE username = :username;";
    $stmt  = $pdo->prepare($query) ;

    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    return $result;
}

function getEmail(object $pdo, string $email)
{
    $query = "SELECT email FROM akun WHERE email = :email;";
    $stmt  = $pdo->prepare($query) ;

    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    return $result;
}

function setUser(object $pdo, string $nama, string $email, string $username, string $pwd)
{
    $query = "INSERT INTO akun (nama, email, username, pwd) VALUES (:nama, :email, :username, :pwd);";
    $stmt  = $pdo->prepare($query) ;

    $opt = [
        'cost' => 12
    ];
    $hashedPWD = password_hash($pwd, PASSWORD_BCRYPT, $opt);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":pwd", $hashedPWD);
    $stmt->bindParam(":nama", $nama);


    $stmt->execute();
}