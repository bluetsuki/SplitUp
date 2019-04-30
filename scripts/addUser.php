<?php
session_start();
$error = filter_input(INPUT_GET, "error", FILTER_SANITIZE_STRING);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style> textarea{ resize:none;}</style>
    </head>
    <body>
        <?php
        if($error == "number"){
            echo "<span class='alert alert-danger'>Le nombre d'utilisateurs n'est pas suffisant pour créer des groupes avec vos paramètres</span>";
        }
        ?>
        <h2>Ajouter des personnes si vous voulez</h2>
	
        <form method="POST" action="createGroup.php">
            <textarea rows="4" cols="50" name="users" autofocus required >
			 <?php 
                if($error="number"){
                    echo $_SESSION["users"]
                }else{
				$file = fopen($_SESSION["file"], "r+");
				$readfile=file_get_contents($_SESSION["file"]);
			     echo($readfile);
                }
			 ?>
            </textarea>
			<button type="submit" value="Submit">Submit</button>
        </form>
    </body>
</html> 
