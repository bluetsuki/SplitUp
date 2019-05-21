<?php
include('dataBase.php');
$btn = FILTER_INPUT(INPUT_POST, 'submit');
if(isset($btn)){
    $surname = FILTER_INPUT(INPUT_POST, 'surname', FILTER_SANITIZE_STRING);
    $name = FILTER_INPUT(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = FILTER_INPUT(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = FILTER_INPUT(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $password = password_hash($password, PASSWORD_DEFAULT);
    insertProfesseur($surname, $name, $username, $password);
    header('Location: ../login.php');
    exit;
}