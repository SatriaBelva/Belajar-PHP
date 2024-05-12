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
    }
}
