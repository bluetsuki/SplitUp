<?php
session_start();
$logout = filter_input(INPUT_GET, 'logout', FILTER_SANITIZE_STRING);

if($logout == 'yes'){
    session_destroy();
    header('Location: ../../index.php');   
    exit;
}