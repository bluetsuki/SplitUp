<?php
$surname = FILTER_INPUT(INPUT_POST, 'surname', FILTER_SANITIZE_STRING);
$name = FILTER_INPUT(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$username = FILTER_INPUT(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = FILTER_INPUT(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$user = 'root';

$db = new PDO('mysql:host=localhost;dbname=slipupdb', $user, '');

$sql = "INSERT INTO professeurs (nomPrefesseur, prenomProfesseur, username, mdp) VALUES ($surname, $name, $username, $password)";
$db->exec($sql);
$db = null;
header('Location: ../index.php');