<?php
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'slipupdb');
DEFINE('DB_USER', 'root');
DEFINE('DB_PASS', '');

function getConnexion()
{
    static $db = null;

    if ($db === null) {
        try {
            $connexionString = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . '';
            $db = new PDO($connexionString, DB_USER, DB_PASS);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    return $db;
}

function insertProfesseur($surname, $name, $username, $password)
{
    $connexion = getConnexion();
    $req = $connexion->prepare("INSERT INTO professeurs (nomProfesseur, prenomProfesseur, username, mdp) VALUES (:surname, :name, :username, :password)");
    $req->bindParam("surname", $surname, PDO::PARAM_STR);
    $req->bindParam("name", $name, PDO::PARAM_STR);
    $req->bindParam("username", $username, PDO::PARAM_STR);
    $req->bindParam("password", $password, PDO::PARAM_STR);
    $req->execute();
}

function checkUser($user, $pass)
{
    $check = getConnexion();
    $req = $check->prepare("SELECT username, mdp FROM professeurs WHERE username = '$user'");
    $res = $req->fetchAll(PDO::FETCH_ASSOC);
    var_dump($res);
    foreach($res as $key => $value){
        echo $value;
    }
}