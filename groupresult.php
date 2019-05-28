<?php
$error = filter_input(INPUT_GET, 'error', FILTER_SANITIZE_STRING);
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
        <?= $error=='notEmpty'?'<div class="alert alert-danger alert-dismissible fade show">Le groupe doit être vide pour être supprimé<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>':''; ?>
        <div class="row">
            <div class="col-9">
                <h2>Groupes crées selon vos paramètres</h2>
            </div>
            <div>
                <a href="saveGrps.php"><button class="btn btn-success">Enregistrer les groupes</button></a>
            </div>
        </div>
        <?php
        foreach ($groups as $key => $value) {
            echo '<table class="table"> <thead class="thead-dark"> <tr> <th colspan="2"> Groupe ';
            echo $key + 1;
            echo '<th><a href="scripts/editgroup.php?delGrp=true&idGrp=' . $key . '"><button class="btn btn-warning">Supprimer le groupe</button></a><a href="pageForgotUser.php?group=' . $key . '"><button class="btn btn-success">+</button></a></th> </tr> </thead> <tbody> ';
            foreach ($value as $id => $membre) {
                echo '<tr><form method="post" action="scripts/editGroup.php"><td>';
                echo "<input type='hidden' value='$key' name='baseGrp'>";
                echo "<input type='hidden' value='$id' name='userId'>";
                echo "<input type='hidden' value='true' name='moveUser'>";
                echo $id + 1 . '</td><td>' . $membre . '</td><td><input type="submit" value="Déplacer dans le groupe" name="move" class="btn btn-primary">';
                echo '<select name="destGrp">';

                foreach ($groups as $i => $v) {
                    if($i!=$key){
                        echo "<option value='$i'>";
                        echo $i + 1 . '</option>';
                    }
                }
                echo '</select><a href="scripts/deleteUser.php?group='.$key.'&studentId='.$id.'&studentName='.$membre.'"><button class="btn btn-danger" type="button">Supprimer L\'élève</button></a></td></form></tr>';
            }
            echo '</tbody></table><br/>';
        }
        ?><a href="scripts/createGroup.php?remake=true"><button class="btn btn-dark">Refaire les groupes</button></a>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
