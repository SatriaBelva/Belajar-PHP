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