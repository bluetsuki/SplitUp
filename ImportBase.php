<?php
$error = filter_input(INPUT_GET, "error", FILTER_SANITIZE_STRING);
$file = filter_input(INPUT_GET, "file", FILTER_SANITIZE_STRING);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Slip Up - Import</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <h2>Choisissez la base de type csv pour votre liste de personnes</h2>
        <?php
        if ($error == "ext") {
            echo "<span class='alert alert-danger'>L'extenssion du fichier que vous avez fournis ($file) n'est pas valide</span>";
        }
        ?>
        <div id="interface" class="mx-auto" style="width: 500px; height: 200px;">
            <form method="POST" action="scripts/fileImport.php" enctype="multipart/form-data">
                <div class="row">
                    <input type="hidden" name="MAX_FILE_SIZE" value="52428800" />
                    <label class="col">Importer un fichier</label>
                    <input class="col" type="file" id="FichierCSV" name="CSV" accept=".csv">
                </div>
                <div class="row">
                    <form action="" method="POST">
                        <input type="radio" name="group" value="groups">Groupes<br>
                        <div class="w-100"></div>
                        <input type="radio" name="group" value="memberspergroup">Membres par groupe<br>
                    </form>
                </div>
                <div class="row">
                    <input class="col" type="checkbox" name="options" value="advance">
                    <label>options avancées</label>
                    <div class="w-100"></div>
                    <button class="col" type="submit" value="Submit" class="btn btn-outline-dark">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>