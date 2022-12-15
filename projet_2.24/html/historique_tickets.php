<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket étudiant</title>
    <link rel="icon" type="image/x-icon" href="../images/epsi logo (2).png">
    <link rel="stylesheet" href="../css/historique_tickets.css">
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">
</head>

<body>

    <navbar>
        <ul class="nav-list">
            <li class="nav-item">
                <h1 href="#"><i class="fas fa-wrench"></i>EPSI TECH</h1>
            </li>
            <li class="nav-item">
                <a href="#"><i class="fas fa-map-marker-alt"></i>Votre technicien de l'EPSI</a>
            </li>
            <li class="nav-item">
                <a href="#"><i class="fas fa-stopwatch"></i>7j/7 de 7h00 à 21h00</a>
            </li>
        </ul>
    </navbar>

    <div class="soushead">
        <a href="connexTECH.html">CONNEXION (technicien)</a>
        <a href="connexETUD.html">SE CONNECTER</a>
        <a href="Inscription.html">S'INSCRIRE</a>
        <a href="Nous contacter.html">NOUS CONTACTER</a> 
    </div>

    <div class="tableau">
        <h2>Vos tickets</h2>
    </div>
       
    <table>
            
        <tr>
            <!-- <th>id utilisateur</th> -->
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Salle</th>
            <th>Type de probleme</th>
            <th>Sujet</th>
            <th>Details</th>
            <th>Date de creation</th>
            <th>état</th>
        </tr>


        <?php

        include '../php/php_his_tickets.php';
        ?>
            
    </table>
    <div class="preced">
            <a href="../html/espace_etu.php"><input type="submit" id="submit" value="Page précédente" ></a><br><br>
    </div>

</body>
</html>