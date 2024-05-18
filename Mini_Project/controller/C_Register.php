<?php
// File untuk 
declare(strict_types=1);

function isInputEmpty(string $nama, string $email, string $username, string $pwd){
    if(empty($nama) || empty($email) or empty($username) or empty($pwd)){
        return true;
    }
    else{
        return false;
    }
}

function is_Email_Invalid(string $email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }
    else{
        return false;
    }
}

function is_username_taken(object $pdo, string $username){
    if(getUsername($pdo, $username)){
        return true;  // Error apabila username sudah ada
    }
    else{
        return false; // !Error apabila username belum ada
    }
}

function is_email_taken(object $pdo, string $email){
    if(getEmail($pdo, $email)){
        return true;  // Error apabila email sudah ada
    }
    else{
        return false; // !Error apabila email belum ada
    }
}

function create_user(object $pdo, string $nama, string $email, string $username, string $pwd, string $no_hp)
{
    setUser($pdo, $nama, $email, $username, $pwd, $no_hp);
}