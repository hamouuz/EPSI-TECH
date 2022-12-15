 <?php 

session_start();

require '../includes/db.php';

if (isset($_POST['submit_inscription'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	$repass = $_POST['password_confirm'];
   

	$query = "INSERT INTO users( utilisateur, motdepasse) VALUES('$username', '$password')";


	if ($password !== $repass) {
   		//die ('Le mot de passe et le mot de passe de confirmation doivent être identiques !');
   		echo "<script> alert('Le mot de passe et le mot de passe de confirmation doivent être identiques !'); window.location.href='../html/inscription.php';</script>";
   		die();
	}

    if ($conn->query($query) === TRUE) {
        
        echo "<script> alert('Votre compte a été créé avec succès! Veuillez vous connecter!'); window.location.href='../html/connEtu.php';</script>";

    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    
    $conn->close();
}