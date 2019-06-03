<?php
session_start();
$idGroup = FILTER_INPUT(INPUT_GET, 'group', FILTER_SANITIZE_NUMBER_INT);
$studentId = FILTER_INPUT(INPUT_GET, 'studentId', FILTER_SANITIZE_NUMBER_INT);
$studentName = FILTER_INPUT(INPUT_GET, 'studentName', FILTER_SANITIZE_STRING);
$user = $_SESSION['users'];
$groups = $_SESSION['groups'];
$txtUser = '';
$user = explode(';', $user);
foreach($user as $key => $value){
    if(trim($value) != $studentName){
        $txtUser .= $value.';';
    }
}
$txtUser = rtrim($txtUser, ';');
array_splice($groups[$idGroup], $studentId, 1);
$_SESSION['groups'] = $groups;
$_SESSION['users'] = $txtUser;
echo $txtUser;
header("Location: ../groupresult.php");