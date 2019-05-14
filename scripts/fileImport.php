<?php
session_start();
var_dump($_FILES);

$settings = filter_input(INPUT_POST, "group", FILTER_SANITIZE_STRING);
$number = filter_input(INPUT_POST, "number", FILTER_SANITIZE_NUMBER_INT);

$_SESSION["settings"]=$settings;
$_SESSION["number"]=$number;

$_FILES['CSV']['name'];
$_FILES['CSV']['type'];
$_FILES['CSV']['size'];
$_FILES['CSV']['tmp_name'];
$_FILES['CSV']['error'];

$file=$_FILES['CSV']['name'];

$ext = explode('.',$file);

if($ext[1]!="csv"){
    header("Location:../ImportBase.php?error=ext&file=$ext[1]");
    exit();
}

$file = fopen($file, "r+");
$readfile=file_get_contents($file);
$numberUser=explode(";", $readfile);

if($number > count($numberUser)){
     header("Location:../ImportBase.php?error=number");
}

$lengthFileName=count($ext);

$fileName = md5(uniqid(rand(), true));

$filePath="../files/".$fileName.".".$ext[1];
$result=move_uploaded_file($_FILES['CSV']['tmp_name'], $filePath);

$_SESSION["file"]=$filePath;

header("Location: addUser.php");