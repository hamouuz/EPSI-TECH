<?php

    include '../php/php_connEtu.php';    
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/connEtu.css">
    <script src="https://kit.fontawesome.com/05f9a6db82.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="../images/epsi logo (2).png">
    
</head>
<body>
 <section>
        <div class="imgbx">
        </div>
        <div class="contenu">
            <div class="formu">
                <h2>Connexion</h2>
                  <form action="../php/php_connEtu.php" method="POST">
                    <div class="inpute">
                        <input type="text" name="username" placeholder="Entrer le nom d'utilisateur" required>

                    </div>
                    <div class="inpute">
                        <input type="password" name="password" placeholder="Mot de passe" required>
                    </div>
                    <div class="inpute">
                        <input type="submit" id="submit" value="LOGIN" >
                    </div>
                    <div class="inpute">
                        <p>Vous n'avez pas de compte? <a href="inscription.php">Inscrivez-vous</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>
</html>