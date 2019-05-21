<?php
session_start();
$error = filter_input(INPUT_GET, "error", FILTER_SANITIZE_STRING);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Aujouter un élève ?</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
        <style> textarea{ resize:none;}</style>
    </head>
    <body>
	<div class="container">
	<?php
	include_once('../nav.php');
	?>
        
        <?php
				$file = fopen($_SESSION["file"], "r+");
				$readfile=file_get_contents($_SESSION["file"]);
        ?>
        <?php
        if($error == "number"){
            echo "<span class='alert alert-danger'>Le nombre d'utilisateurs n'est pas suffisant pour créer des groupes avec vos paramètres</span>";
        }
        ?>
        <h2>Ajouter des personnes si vous voulez</h2>
	
        <form method="POST" action="createGroup.php">
            <textarea rows="4" cols="50" name="users" autofocus required ><?= $readfile ?>
            </textarea>
			<button class="btn btn-dark" type="submit" value="Submit">Submit</button>
        </form>
		<div>
    </body>
</html> 
