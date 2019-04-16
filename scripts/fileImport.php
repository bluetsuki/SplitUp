<?php

var_dump($_FILES);

$_FILES['CSV']['name'];
$_FILES['CSV']['type'];
$_FILES['CSV']['size'];
$_FILES['CSV']['tmp_name'];
$_FILES['CSV']['error'];

$file=$_FILES['CSV']['name'];

$ext = explode('.',$file);

if($ext[1]=="csv"||$ext[1]=="xls"||$ext[1]=="xlsx"){
    echo "ok";
}else{
    header("Location:../ImportBase.php?error=ext&file=$file");
    exit();
}

$lengthFileName=count($ext);

$fileName = md5(uniqid(rand(), true));

$filePath="../files/".$fileName.".".$ext[1];
$result=move_uploaded_file($_FILES['CSV']['tmp_name'], $filePath);

makeGroup($filePath, "file");