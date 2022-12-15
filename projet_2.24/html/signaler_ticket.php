<?php

    include '../php/php_ticket.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <link rel="icon" type="image/x-icon" href="../images/epsi logo (2).png">
    <link rel="stylesheet" href="../css/ticket.css">
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">
</head>

<body>

    <navbar>
        <ul class="nav-list">
           <li class="nav-item">
                <h1 href="acceuil.php"><i class="fas fa-wrench"></i>EPSI TECH</h1>
            </li>
            <li class="nav-item">
                <a href="contact.php"><i class="fas fa-map-marker-alt"></i>Votre technicien de l'EPSI</a>
            </li>
            <li class="nav-item">
                <a href="#"><i class="fas fa-stopwatch"></i>7j/7 de 7h00 à 21h00</a>
            </li>
        </ul>
    </navbar>
    <div class="soushead">
        <a href="../html/connTech.php">CONNEXION (technicien)</a>
        <a href="../html/connEtu.php">SE CONNECTER</a>
        <a href="../html/inscription.php">S'INSCRIRE</a>
        <a href="../html/contact.php">NOUS CONTACTER</a>
    </div>

    <section>
        <div class="contenu">
            <h1>Formulaire ticket</h1> 
    
            <div class="formu">
                <br><br><br><br><br><br>
                <h4>Saisir vos coordonnées</h4>

                <form action="../php/php_ticket.php" method="POST">
                

                    <div class="inpute">
                        <input type = "text" name = "nom" size = "40" maxlength = "256" placeholder="nom" required><br><br>
                        <input type = "text" name = "prenom" size = "40" maxlength = "256" placeholder="Prénom" required><br><br>
                        <input type = "email" name = "email" placeholder="email" pattern = "(^[a-z0-9]+)@([a-z0-9])+(\.)([a-z]{2,4})" required><br><br>
                        <input type = "text" name = "salle" placeholder="salle" pattern = "(^[a-Z0-999])" required><br><br>
                    </div>




                    <h4>Description du probléme</h4>
                    <div class="inpute">
                          <input type = "radio" name = "radio" value = "Reparation" required>Réparation
                    </div>
                    <div class="inpute">
                    <input type = "radio" name = "radio" value = "Installation" required>Installation<br>

                    </div>
                    <div class="inpute">
                        <input type="radio" name="radio" value="Autre" required>Autre
                    </div><br><br><br>

                    <div class="inpute">
                        <label>Sujet: </label><br><br><input type = "text" name = "sujet" size = "40" maxlength = "256"  placeholder="Préciser" required>
                    </div>
                    
                    <h4>Détails du probléme</h4>
                    <div class="inpute">
                        <textarea name = "details" cols = "50" rows = "10" onclick = "this.value = '' " required>Expliquez nous plus votre probléme</textarea>
                    </div>
                    <div class="inpute">
                        <input type = "submit" name = "submit_ticket" value = "Signaler le ticket" required>

                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>