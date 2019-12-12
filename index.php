<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>BONJOUR - FORK</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div>
            <?php
	include_once('nav.php');
	?>
        </div>
        <div>
            <h2><?= isset($_SESSION['log']) ? 'Bienvenue ' . $_SESSION['log'] : '' ?></h2>
        </div>
        <div>
            <img src="img/decision-512.png" style="width:380px;margin-left:30%;" />
        </div>
        <div class="row row justify-content-center" id="index">
            <a href="ImportBase.php"><button class="btn btn-dark">Importation une liste</button></a>
            <a href="FaitMain.php"><button style="margin-left:10px;" class="btn btn-dark">Écrire les noms</button></a>
        </div>
    </div>
</body>

</html>
