<?php
include('dataBase.php');
$btn = FILTER_INPUT(INPUT_POST, 'envoyer');
if (isset($btn)) {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $pass = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    checkUser($username, $pass);
}
