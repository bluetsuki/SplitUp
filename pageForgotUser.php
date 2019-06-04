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
		<div class="form-group">
            <h2><label>Enter le nom de l'élève à ajouter</label></h2>	
            <input class="form-control" type="text" name="addStudent">
			</div>
			<div class="form-group">
            <input class="form-control" type="hidden" name="group" value="<?=$group?>">
			</div>
			<div class="form-group">
            <input class="btn btn-dark" type="submit">
			</div>
        </form>
    </div>
</body>

</html>