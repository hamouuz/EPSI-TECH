<?php 

	session_start();

	if (!isset($_SESSION["username"])) {

			header("location:../html/connTech.php");
	}

	require '../includes/db.php';


	if (isset($_POST['submit_update'])) {

		$userid = $_SESSION['id_user'];
		$etat = $_POST['etat'];

		$selected = $_GET['selected'];
		$nom = $_GET['nom'];
		$prenom = $_GET['prenom'];
		$date_creation = $_GET['date_creation'];
		$salle = $_GET['salle'];
		$email = $_GET['email'];
		$type_de_problem = $_GET['radio'];
		$sujet = $_GET['sujet'];


		$query = "UPDATE ticket SET etat = '$etat' WHERE id_ticket = $selected";
	
		//  envoi du mail dès qu'un ticket est résolu
		$to = 'epsiparisproject@gmail.com';
		$titre = 'EPSI TECH - Votre probléme a été résolu';
    	//$message = 'Le ticket créé par '.$nom.' '.$prenom.' le '.$date_creation.' et qui concerne la salle '.$salle.' a bien été résolu.';
    	$message = 'Bonjour!

    	Le problème posé le '.$date_creation.' par votre ticket enregistré avec les informations suivantes :
    		Nom : '.$nom.'
    		Prénom : '.$prenom.' 
    		Email : '.$email.'
   		Salle : '.$salle.'
   		Type de problème : '.$type_de_problem.'
 		Sujet : '.$sujet.'

    		a été examiner et  Résolue.';

		if ($conn->query($query) === TRUE) {
		
			if ($etat == 'Resolu') {
				// Envoi du mail au etudiant
            	mail($to, $titre, $message);
        	}

			// echo "<script>alert('etat updated successfully')</script>";
			//header("location:../html/aff_tickets.php");
			echo "<script> alert('etat mis à jour avec succès ! '); window.location.href='../html/aff_tickets.php';</script>";

   		}
   		else {
   	    	echo "Error: " . $query . "<br>" . $conn->error;
    	}
      
    $conn->close();
}

?>