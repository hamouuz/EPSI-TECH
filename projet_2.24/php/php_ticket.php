<?php 

session_start();

if (!isset($_SESSION["username"])) {

        header("location:../html/connEtu.php");
}

require '../includes/db.php';



//if the form is cliked on submit or not
if (isset($_POST['submit_ticket'])){
    // to see results of our POST
    // print_r($_POST);

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $salle = $_POST['salle'];
    $type = $_POST['radio'];
    $sujet = $_POST['sujet'];
    $details = $_POST['details'];
    $userid = $_SESSION['id_user'];

    

    // Dans le cas où les mails de la base de données sont valides (existent bien), on doit remplacer dans la fonction mail() la var $to par $email. 
    $to = 'epsiparisproject@gmail.com';
    $message = 'Un nouveau ticket a été créé par '.$nom.' '.$prenom.' .
    Voici un récapitulatif :
        Salle : '.$salle.'
        Type : '.$type.' 
        Sujet : '.$sujet.' 
        Details : '.$details.' 
        ';


    $query = "INSERT INTO ticket(id_user, nom_etu, prenom_etu, email_etu, salle, type_de_problem, sujet, details, date_creation) VALUES($userid, '$nom', '$prenom', '$email', '$salle', '$type', '$sujet', '$details', now())";

    if ($conn->query($query) === TRUE) {
        
        echo "<script> alert('L\'enregistrement a été créé avec succès ! Un mail a été envoyé au technicien'); window.location.href='../html/espace_etu.php';</script>";
        // Envoi du mail au technicien
        mail($to, $sujet, $message);

    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>