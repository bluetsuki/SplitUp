<?php
session_start();
$error = filter_input(INPUT_GET, "error", FILTER_SANITIZE_STRING);
$file = filter_input(INPUT_GET, "file", FILTER_SANITIZE_STRING);
?>
<!DOCTYPE html>
<html>

<head>
    <title>split Up - Import</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
	<?php
	include_once('nav.php');
	?>
        <h2>Choisissez la base de type csv pour votre liste de personnes</h2>
        <?php
        if ($error == "ext") {
            echo "<span class='alert alert-danger'>L'extenssion du fichier que vous avez fournis ($file) n'est pas valide</span>";
        }elseif($error == "number"){
            echo "<span class='alert alert-danger'>Le nombre d'utilisateurs n'est pas suffisant pour créer des groupes avec vos paramètres</span>";
        }
        ?>
		
        <div id="interface" class="mx-auto" style="width:600px; height:200px;float:left;">
            <form method="POST" action="scripts/fileImport.php" enctype="multipart/form-data">
                <div class="row">
                    <input type="hidden" name="MAX_FILE_SIZE" value="52428800" />
                    <label class="col">Importer un fichier</label>
                    <input class="" type="file" id="FichierCSV" name="CSV" accept=".csv" required>
                </div>
                <div style="margin-left:1px;"class="row">                    
                    <label for="groups"><input type="radio" name="group"  id="groups" value="groups" required>Groupes<br></label>
                    <label for="memberspergroup"><input style="margin-left:5px;"type="radio" name="group" id="memberspergroup" value="memberspergroup">Membres par groupe<br></label>
                    <input required class="col" type="text" name="number" placeholder="Nombre de groupes/membres" style="margin-left:5px;"><br/>
                </div>
                <div style="margin-left:1px;" class="row">
                    <input type="checkbox" name="options" id="options" value="advance" onclick="hideShow()">Options Avancées
                    
                </div>
                <div style="margin-left:1px;" class="row">
                    <div id="advanceDisplay"></div>
                </div>
                <div style="margin-left:1px;" class="row">
                    <button  style="margin-bottom: 10px;margin-top: 10px;"class="btn btn-dark btn-lg btn-block" type="submit" value="Submit" >Envoyer</button>
					
                </div >
                <div class="row">
                    <a style="margin-left:15px;" href="index.php"><button class="btn btn-dark" type="button" >Home</button></a>
                </div>
            </form> 
        </div>
        <script src="script.js"></script>
    </div>
</body>

</html>