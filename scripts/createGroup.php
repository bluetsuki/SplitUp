<?php
session_start();

$users = filter_input(INPUT_POST, "users", FILTER_SANITIZE_STRING);
$settings = $_SESSION["settings"];
$number = $_SESSION["number"];

$_SESSION["users"]=$users;

$tabUsers=explode(".", $users);

if(count($users) < $number){
    if($settings="groups"){
        
    }else{
        
    }
}else{
    header("Location: addUser.php?error=number")
}
