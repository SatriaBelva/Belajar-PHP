<?php

// File untuk menunjukkan atau meng-show informasi ke dalam website
declare(strict_types=1);

function check_login_errors()
{
    if(isset($_SESSION["errors_login"]))
    {
        $errors = $_SESSION["errors_login"];

        echo "<br>";
        foreach($errors as $error){
            echo '<p>'.$error. '</p>';
        }

        unset($_SESSION["errors_login"]);
    }
    elseif(isset($_POST['login']) && $_POST['login'] === 'success')
    {
        echo "<br>";
        echo "<p>Login Succes</p>";
    }
}