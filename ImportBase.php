<?php
$error=filter_input(INPUT_GET, "error", FILTER_SANITIZE_STRING);
$file=filter_input(INPUT_GET, "file", FILTER_SANITIZE_STRING);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Slip Up - Import</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

    <h2>Choisissez la base de type csv pour votre liste de personnes</h2>

<body>
    <?php
        if($error=="ext"){
            echo "<span class='alert alert-danger'>L'extenssion du fichier que vous avez fournis ($file) n'est pas valide</span>";
        }
    ?>
    <form method="POST" action="scripts/fileImport.php" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="52428800" />
        <input type="file" id="FichierCSV" name="CSV" accept=".csv">
        <button type="submit" value="Submit">Submit</button>
    </form>
</body>

</html>