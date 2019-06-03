<?php
session_start();

$baseGrp = filter_input(INPUT_POST, 'baseGrp', FILTER_SANITIZE_NUMBER_INT);
$userId = filter_input(INPUT_POST, 'userId', FILTER_SANITIZE_NUMBER_INT);
$destGrp = filter_input(INPUT_POST, 'destGrp', FILTER_SANITIZE_NUMBER_INT);
$groups = $_SESSION['groups'];

$moveUser = filter_input(INPUT_POST, 'moveUser', FILTER_SANITIZE_STRING);
$delGrp = filter_input(INPUT_GET, 'delGrp', FILTER_SANITIZE_STRING);
$idGrp = filter_input(INPUT_GET, 'idGrp', FILTER_SANITIZE_NUMBER_INT);


if($moveUser){
    $user = $groups[$baseGrp][$userId];
    array_splice($groups[$baseGrp], $userId, 1);
    array_push($groups[$destGrp], $user);
    $_SESSION['groups'] = $groups;
    header("Location: ../groupresult.php");
}elseif($delGrp){
    if(count($groups[$idGrp])==0){
        array_splice($groups, $idGrp, 1);
        $_SESSION['groups'] = $groups;
        header("Location: ../groupresult.php");
    }else{
        header("Location: ../groupresult.php?error=notEmpty");        
    }
}