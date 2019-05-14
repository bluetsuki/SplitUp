<?php
session_start();
include('dataBase.php');

$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$pass = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

checkUser($username, $pass);