				<nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">Split Up</a>
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