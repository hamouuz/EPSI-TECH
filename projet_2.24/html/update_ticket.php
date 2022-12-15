<?php

    include '../php/php_update.php';
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" type="image/x-icon" href="../images/epsi logo (2).png">
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">
	<link rel="stylesheet" href="../css/update_ticket.css">
	<title>modifier l'etat du ticket</title>
</head>
<body>
 <section>
        <div class="imgbx">
        </div>

            <div class="contenu">
                <div class="formu">
                    <h2>Etat du probléme</h2>
                    <form action="#" method="POST">
                        <div class="inpute">
                            <input type = "radio" name = "etat" value = "Non traite" required>Non traité
                        </div>
                        <div class="inpute">
                             <input type = "radio" name = "etat" value = "En attente" required>En attente
                        </div>
                        <div class="inpute">
                            <input type = "radio" name = "etat" value = "Resolu" required>Résolu
                        </div>
                        <div class="inpute">
                            <input type = "submit" name = "submit_update" value = "modifier" required>
                        </div>
                    </form>
                </div>
            </div>
	
</body>
</html>