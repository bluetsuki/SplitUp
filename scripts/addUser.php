<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style> textarea{ resize:none;}</style>
    </head>
    <body>
        <h2>Ajouter des personnes si vous voulez</h2>
	
        <form method="POST" action="createGroup.php">
            <textarea rows="4" cols="50" autofocus required >
			 <?php 
				$file = fopen($_SESSION["file"], "r+");
				$readfile=file_get_contents($_SESSION["file"]);
			echo($readfile);
			 ?>
            </textarea>
			<button type="submit" value="Submit">Submit</button>
        </form>
    </body>
</html> 
