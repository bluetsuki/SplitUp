<?php
include('scripts/scriptlogin.php');
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
            <input class="form-control" type="text" required name="username">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="password" required name="password">
        </div>
        <input type="submit" required name="envoyer">
    </form>
</div>

</html>