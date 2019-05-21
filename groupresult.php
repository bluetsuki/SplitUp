<?php
session_start();
$groups = $_SESSION["groups"];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Split Up - Resultat</title>
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
        <h2>Groupes crées selon vos paramètres</h2>

        <?php
        foreach ($groups as $key => $value) {
            echo '<table class="table"> <thead class="thead-dark"> <tr> <th colspan="2"> Groupe ';
            echo $key + 1;
            echo '<th><a href="scripts/editgroup.php?deletegrp=' . $key . '"><button class="btn btn-primary">Supprimer le groupe</button></a><a href="pageForgotUser.php?group=' . $key . '"><button class="btn btn-success">+</button></a></th> </tr> </thead> <tbody> ';
            foreach ($value as $id => $membre) {
                echo '<tr><form method="post" action="scripts/editgroup.php?moveuser=true&userid=' . $id . '&basegrp=' . $key . '"><td>';
                echo $id + 1 . '</td><td>' . $membre . '</td><td><a href="scripts/editgroup.php?moveuser=true&userid=' . $id . '&basegrp=' . $key . '"><button class="btn btn-primary">Déplacer dans le groupe </button></a>';
                echo '<select>';
                foreach ($groups as $i => $v) {
                    echo '<option>';
                    echo $i + 1 . '</value>';
                }
                echo '</select><a href="scripts/deleteUser.php?group='.$key.'&studentId='.$id.'&studentName='.$membre.'"><button class="btn btn-danger" type="button">X</button></a></td></form></tr>';
            }
            echo '</tbody></table><br/>';
        }
        ?><a href="scripts/createGroup.php?remake=true"><button class="btn btn-dark">Refaire les groupes</button></a>
        </div>
    </div>
</body>

</html>