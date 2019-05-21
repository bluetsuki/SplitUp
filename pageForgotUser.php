<?php
$group = FILTER_INPUT(INPUT_GET, 'group', FILTER_SANITIZE_NUMBER_INT);
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
        <form action="scripts/forgotUser.php" method="POST">
            <label>Enter le nom de l'élève à ajouter</label>
            <input type="text" name="addStudent">
            <input type="hidden" name="group" value="<?=$group?>">
            <input type="submit">
        </form>
    </div>
</body>

</html>