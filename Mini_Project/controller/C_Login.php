<?php

function is_Input_Empty(string $username, string $pwd){
    if(empty($username) || empty($pwd)){
        return true;
    }
    else{
        return false;
    }
}

function is_username_wrong(bool|array $result)
{
    if(!$result){
        return true;
    }
    else{
        return false;
    }
}

function is_password_wrong(string $pwd, string $hashedPWD)
{
    if(!password_verify($pwd, $hashedPWD)){
        return true;
    }
    else{
        return false;
    }
}