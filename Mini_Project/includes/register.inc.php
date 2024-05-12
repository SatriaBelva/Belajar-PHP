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
        
        if($errors){ // Akan return True apabila terdapat data dalam array errors dan sebaliknya
            $_SESSION["errors_register"] = $errors;
            header("Location: ../index.php");
        }


        // $insert_query = "INSERT INTO akun_pengguna (nama, username, passwords, email) 
        //                  VALUES (:nama, :username, :pwd, :email);"; 
                                                                    

        // $stmt = $pdo->prepare($insert_query);       
        // $stmt ->bindParam(":nama", $nama);          
        // $stmt ->bindParam(":username", $username);            
        // $stmt ->bindParam(":pwd", $pwd);             
        // $stmt ->bindParam(":email", $email);           
        // $stmt ->execute();

        // $pdo  = null; 
        // $stmt = null; 

        header("Location: ../index.php"); 

        die(); 
    }catch (PDOException $e) {
        die("Query Failed : " . $e->getMessage());
    }
}
else{
    header("Location: ../index.php"); // Apabila halaman ini tidak diakses menggunakan method "POST" maka akan diarahkan kembali ke file index.php
}

// Menggunakan Named Parameter (Recommended)