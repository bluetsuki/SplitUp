<!DOCTYPE html>
<html>

<head>
    <title>Slip Up - Register</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">Slip Up</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href=""><button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Login</button></a>
                <a href=""><button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Register</button></a>
            </nav>
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