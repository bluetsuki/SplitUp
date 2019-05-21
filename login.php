<?php
include('scripts/scriptlogin.php');
$err = FILTER_INPUT(INPUT_GET, 'error', FILTER_SANITIZE_STRING);
$username = FILTER_INPUT(INPUT_GET, 'username', FILTER_SANITIZE_STRING);
?>

<!DOCTYPE html>
<html>

<head>
</head>
<meta charset="utf-8" />
<title>Login page</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css">

<body>

</body>
<div class="container">
    <form method="post" action="#">
        <div class="form-group">
            <label>Username</label>
            <input class="form-control" type="text" required name="username" value="<?= $username ?>">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="password" required name="password">
            <?php
            if ($err) {
                echo 'Votre username ou mot de passe est erroné';
            }
            ?>
        </div>
        <input type="submit" required name="envoyer">
    </form>
</div>

</html>