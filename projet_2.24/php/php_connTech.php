<?php

session_start();

require '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	$query = "SELECT * FROM users WHERE utilisateur = '".$username."' AND motdepasse = '".$password."' ";

	$sql = mysqli_query($conn,$query) or die(mysqli_error($conn));
	$count = mysqli_num_rows($sql);

	if ($count == 1) {

		$row = mysqli_fetch_array($sql);
		$userid = $row['id_user'];

		$_SESSION['username'] = $username;
		// store the user ID in the session
		$_SESSION['id_user'] = $userid;

		if ($row ["role"] == "admin") {

			$_SESSION["username"] = $username;
			header("location:../html/espace_tech.php");
		
		} else {
			echo "<script>alert('username et mot de passe sont incorrect'); window.location.href='../html/connTech.php';</script>";
		}
	}
	else {
		//echo "error";
		//echo "<script>alert('Connectez vous autant que technicien !'); window.location.href='../html/connTech.php';</script>";
		echo "<script>alert('username et mot de passe sont incorrect'); window.location.href='../html/connEtu.php';</script>";
	}
}
