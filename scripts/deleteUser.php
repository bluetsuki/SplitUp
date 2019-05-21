<?php
session_start();
echo '<pre>';
$idGroup = FILTER_INPUT(INPUT_GET, 'group', FILTER_SANITIZE_NUMBER_INT);
$studentId = FILTER_INPUT(INPUT_GET, 'studentId', FILTER_SANITIZE_NUMBER_INT);
$studentName = FILTER_INPUT(INPUT_GET, 'studentName', FILTER_SANITIZE_STRING);

var_dump( $_SESSION['groups']);
var_dump( $_SESSION['users']);
// $_SESSION['groups']
// $_SESSION['users'] ceci n'est pas un tableau