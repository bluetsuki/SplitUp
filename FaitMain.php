<?php
session_start();
$error = filter_input(INPUT_GET, "error", FILTER_SANITIZE_STRING);
$file = filter_input(INPUT_GET, "file", FILTER_SANITIZE_STRING);
?>
<!DOCTYPE html>
<html>

<head>
    <title>split Up - Input Name</title>
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
        <h2>Ecrivez les noms des personnes que vous voulez (avec des points virgules)</h2>
        <form method="POST" action="scripts/createGroup.php">
		<?php
        if ($error == "ext") {
            echo "<span class='alert alert-danger'>L'extenssion du fichier que vous avez fournis ($file) n'est pas valide</span>";
        }elseif($error == "number"){
            echo "<span class='alert alert-danger'>Le nombre d'utilisateurs n'est pas suffisant pour créer des groupes avec vos paramètres</span>";
        }
        ?>
		
        <div id="interface" class="mx-auto" style="width:600px; height:200px;float:left;">
            
                <div style="margin-left:1px;"class="row">                    
                    <label for="groups"><input type="radio" name="group"  id="groups" value="groups" required>Groupes<br></label>
                    <label for="memberspergroup"><input type="radio" name="group" id="memberspergroup" style="margin-left:5px;" value="memberspergroup">Membres par groupe<br></label>
                    <input style="margin-left:5px;" class="col" type="text" name="number" id="number" placeholder="Nombre de groupes/membres"><br/>
                </div>
<!--
                <div style="margin-left:1px;" class="row">
                    <input type="checkbox" name="options" id="options" value="advance" onclick="hideShow()"><label for='options'>Options Avancées</label>
                    
                </div>
-->
				<textarea rows="4" cols="50" name="users" autofocus required></textarea>
                <div style="margin-left:1px;" class="row">
                    <div id="advanceDisplay"></div>
                </div>
                <div style="margin-left:1px;" class="row">
                    <button  style="margin-bottom: 10px;margin-top: 10px;"class="btn btn-dark btn-lg btn-block" type="submit" value="Submit" >Envoyer</button>
					
                </div >
                <div class="row">
                    <a style="margin-left:15px;" href="index.php"><button class="btn btn-dark" type="button" >Home</button></a>
                </div>
				
			            
			
            
            
        </div>
        <script src="script.js"></script>
    </div>
		
            
			
        </form>
    </div>
</body>

</html>