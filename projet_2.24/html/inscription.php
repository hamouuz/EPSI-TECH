<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="icon" type="image/x-icon" href="../images/epsi logo (2).png">
    <link rel="stylesheet" href="../css/inscription.css">
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">
</head>


<body>
   
    <section>
        <div class="imgbx">
        </div>
        <div class="contenu">
            <div class="formu">
                <h2>Inscription</h2>
                <form action="../php/php_inscri.php" method="POST">
                    <div class="inpute">
                       <input type="text" name="username" placeholder="Nom d'utilisateur" pattern = "[A-Za-z]{3,16}" required>
                    </div>

                    <div class="inpute">
                        <input type="password" name="password" placeholder="Mot de passe" pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{3,16}" required>
                    </div>
                    
                    <div class="inpute">
                        <input type="password" name="password_confirm" placeholder="Confirmer le Mot de passe" pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{3,16}" required>
                    </div>

                    <div class="inpute">
                        <input type="submit" name="submit_inscription">
                    </div>
                    <div class="inpute">
                        <p>Vous avez deja un compte? <a href="connEtu.php">connectez-vous</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>

<?php

    include '../php/php_inscri.php';
?>