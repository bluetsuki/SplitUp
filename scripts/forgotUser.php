<?php
session_start();
$addStudent = FILTER_INPUT(INPUT_POST, 'addStudent', FILTER_SANITIZE_STRING);
$group = FILTER_INPUT(INPUT_POST, 'group', FILTER_SANITIZE_NUMBER_INT);

array_push($_SESSION['groups'][$group], $addStudent);
header("Location: ../groupresult.php");
exit;
