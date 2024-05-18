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
        echo '<label for="nama">Nama:</label> <input type="text" id="nama" name="nama" placeholder="Masukkan Nama ..." value="'.$_SESSION["data_register"]["nama"].'">';
    }
    else
    {
        echo '<label for="nama">Nama:</label> <input type="text" id="nama" name="nama" placeholder="Masukkan Nama ...">';
    }


    if(isset($_SESSION["data_register"]["username"]) && !isset($_SESSION["errors_register"]["Username telah digunakan"]))
    {
        echo '<label for="username">Username:</label> <input type="text" name="username" placeholder="Masukkan username ..." value="'. $_SESSION["data_register"]["username"].'">';
    }
    else
    {
        echo '<label for="username">Username:</label> <input type="text" name="username" placeholder="Masukkan username ...">';
    }


    if(isset($_SESSION["data_register"]["email"]) && !isset($_SESSION["errors_register"]["Email Telah Digunakan"]) && !isset($_SESSION["errors_register"]["Email tidak Valid!"]))
    {
        echo '<label for="email">email:</label> <input type="text"     name="email"     placeholder="Masukkan email ..." value="'.$_SESSION["data_register"]["email"].'">';
    }
    else
    {
        echo '<label for="email">email:</label> <input type="text"     name="email"     placeholder="Masukkan email ...">';
    }

    
    echo '<label for="no_hp">No Handphone:</label> <input type="no_hp" id="no_hp" name="no_hp" placeholder="Masukkan Nomor HP ..." required>';
    echo '<label for="pwd">Password:</label> <input type="password" name="pwd" placeholder="Masukkan password ...">';
    echo '<label for="konfirmasi_pass">Konfirmasi Password:</label> <input type="konfirmasi_pass" id="konfirmasi_pass" name="konfirmasi_pass" placeholder="Konfirmasi Password" required>';
}

