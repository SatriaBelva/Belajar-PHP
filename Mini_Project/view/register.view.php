<?php
// File untuk menunjukkan atau meng-show informasi ke dalam website
declare(strict_types=1);

function check_signup_errors(){
    if(isset($_SESSION["errors_register"])){
        $errors = $_SESSION["errors_register"];

        echo "<br>";
        foreach($errors as $error){
            echo '<p>'.$error. '</p>';
        }

        unset($_SESSION["errors_register"]);
    } elseif(isset($_GET['Register']) and $_GET['Register'] === "sukses"){
        echo "<br>";
        echo "<p>Register Sukses</p>";
    }
}

function register_input()
{
    if(isset($_SESSION["data_register"]["nama"]))
    {
        echo '<input type="text"     name="nama"     placeholder="Masukkan Nama ..." value="'.$_SESSION["data_register"]["nama"].'">';
    }
    else
    {
        echo '<input type="text"     name="nama"     placeholder="Masukkan Nama ...">';
    }

    if(isset($_SESSION["data_register"]["username"]) && !isset($_SESSION["errors_register"]["Username telah digunakan"]))
    {
        echo '<input type="text"     name="username"     placeholder="Masukkan username ..." value="'. $_SESSION["data_register"]["username"].'">';
    }
    else
    {
        echo '<input type="text"     name="username"     placeholder="Masukkan username ...">';
    }

    if(isset($_SESSION["data_register"]["email"]) && !isset($_SESSION["errors_register"]["Email Telah Digunakan"]) && !isset($_SESSION["errors_register"]["Email tidak Valid!"]))
    {
        echo '<input type="text"     name="email"     placeholder="Masukkan email ..." value="'.$_SESSION["data_register"]["email"].'">';
    }
    else
    {
        echo '<input type="text"     name="email"     placeholder="Masukkan email ...">';
    }
    echo '<input type="password" name="pwd"      placeholder="Masukkan password ...">';
}

