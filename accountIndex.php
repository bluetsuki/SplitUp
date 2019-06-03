<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Split Up</title>
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
            Rang: <?= $_SESSION['logInfo']['admin']=='1'?'Admin':'Enseignant' ?>
        </div>
    </div>
</body>

</html>
