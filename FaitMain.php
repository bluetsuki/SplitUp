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
        <h2>Ecrivez les noms des personnes que vous voulez (avec des points virgules)</h2>
        <form method="POST" action="createGroup.php">
            <textarea rows="4" cols="50" autofocus required></textarea>
            <input type="submit" value="Envoyer">
            <div class="row">
                <a href="index.php"><button type="button" class="btn btn-dark">Home</button></a>
            </div>
        </form>
    </div>
</body>

</html>