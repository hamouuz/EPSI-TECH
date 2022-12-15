<?php

    include '../php/php_connTech.php'; 
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/connTech.css">
    <link rel="icon" type="image/x-icon" href="../images/epsi logo (2).png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Connexion tech</title>
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">

</head>
<body>

      <section>
        <div class="imgbx">
        </div>
        <div class="contenu">
            <div class="formu">
                <h2>Connexion</h2>
                <form action="../php/php_connTech.php" method="POST">
                    <div class="inpute">
                        <input type="text" name="username" placeholder="Entrer le nom d'utilisateur" required>
                    </div>
                    <div class="inpute">
                        <input type="password" name="password" placeholder="Entrer le mot de passe" required>
                    </div>
                    <div class="inpute">
                         <input type="submit" id="submit" value="LOGIN" >
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>
</html>