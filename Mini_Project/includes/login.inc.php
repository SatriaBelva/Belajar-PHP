<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $username = $_POST["username"];  
    $pwd      = $_POST["pwd"]; 

    try {
        require_once "tes/dbh.inc.php";
        require_once "../model/M_login.php";
        require_once "../controller/C_login.php";

        // Error Handling
        $errors = [];
        
        if(is_Input_Empty($username, $pwd)){
            $errors["empty_input"]       = "Mohon Isi Seluruh Data!";
        }
        
        $result = getUser($pdo, $username);
        
        if (is_username_wrong($result))
        {
            $errors["login_incorrect"]  = "Data Login Salah";
        }
        if (!is_username_wrong($result) && is_password_wrong($pwd, $result["pwd"]))
        {
            $errors["login_incorrect"]  = "Data Login Salah";
        }
        
        require_once 'tes/config_session.inc.php';
        
        if($errors){ 
            $_SESSION["errors_login"] = $errors;

            header("Location: ../index.php");
            die(); 
        }

        $newSessionID = session_create_id();
        $SessionID    = $newSessionID."_".$result["id"];
        session_id($SessionID);

        $_SESSION["user_id"]  = $result["id"];
        $_SESSION["username"] = htmlspecialchars($result["username"]);
        $_SESSION['last_regeneration'] = time();

        header("Location: ../index.php?login=success"); 
        die();
    } catch (PDOException $e) {
        die("Query Failed : " . $e->getMessage());
    }
}
else{
    header("Location: ../index.php"); 
    die();
}
