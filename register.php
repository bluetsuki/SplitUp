<!DOCTYPE html>
<html>

<head>
    <title>Split Up - Register</title>
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
            <form action="scripts/createAccount.php" method="POST">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" name="surname" placeholder="Entrer votre nom" rerquired>
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" name="name" placeholder="Entrer votre prénom" rerquired>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Entrer votre username" rerquired>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Entrer votre mot de Passe" rerquired>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
    </div>
</body>

</html>