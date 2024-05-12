<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $nama     = $_POST["nama"];      
    $username = $_POST["username"];  
    $pwd      = $_POST["pwd"];       
    $email    = $_POST["email"];     

    try {
        require_once "dbh.inc.php";
        require_once "../model/register.model.php";
        require_once "../controller/register.contr.php";
        
        // Error Handling
        $errors = [];
        
        if(isInputEmpty($nama, $email, $username, $pwd)){
            $errors["empty_input"]    = "Mohon Isi Seluruh Data!";
        }
        if(is_Email_Invalid($email)){
            $errors["email_invalid"]  = "Email tidak Valid!";
        }
        if(is_username_taken($pdo, $username)){
            $errors["username_taken"] = "Username telah digunakan";
        }
        if(is_email_taken($pdo, $email)){
            $errors["email_taken"]    = "Email Telah Digunakan";
        }
        
        require_once 'config_session.inc.php';
        
        if($errors){ 
            $_SESSION["errors_register"] = $errors;
            
            $data_register = [
                "nama"     => $nama,
                "username" => $username,
                "email"    => $email
            ];
            $_SESSION["data_register"] = $data_register;

            header("Location: ../index.php");
            die(); 
        }

        create_user ($pdo, $nama, $email, $username, $pwd);

        header("Location: ../index.php?Register=sukses"); 

        $pdo  = null;
        $stmt = null;
        
        die(); 
    }catch (PDOException $e) {
        die("Query Failed : " . $e->getMessage());
    }
}
else{
    header("Location: ../index.php"); 
}
