<?php

		$dbServername = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "epsi_projet";

		$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

		if ($conn === false) {
			die("CONNEXION ERREUR");
		}
?>