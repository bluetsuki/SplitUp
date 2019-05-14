<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>split Up</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">split Up</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="login.php"><button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Login</button></a>
                <a href="register.php"><button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Register</button></a>
                <?php
                if (isset($_SESSION['username'])) {
                    echo '<a href="scripts/logout.php/?logout=yes"><button class="btn btn-outline-primary my-2 my-2 sm-0" type= "submit">Déconnexion</button></a>';
                }
                ?>
            </nav>
        </div>
        <div>
            <h2><?= isset($_SESSION['username']) ? 'Bienvenu ' . $_SESSION['username'] : '' ?></h2>
        </div>
        <div class="row row justify-content-center" id="index">
            <a href="ImportBase.php"><button class="btn btn-dark">Importation une liste</button></a>
            <a href="FaitMain.php"><button class="btn btn-dark">Écrire les noms</button></a>
        </div>
    </div>
</body>

</html>