<?php

	session_start();

	if (!isset($_SESSION["username"])) {

		header("location:../html/connEtu.php");
	}

	require '../includes/db.php';

	$userid = $_SESSION['id_user'];
	$sql = "SELECT id_user, nom_etu, prenom_etu, email_etu, salle, type_de_problem, sujet, details, date_creation, etat FROM ticket WHERE id_user = $userid ORDER BY date_creation DESC " ;
	$result = $conn-> query($sql);

	if ($result -> num_rows > 0) {

		while ($row = $result-> fetch_assoc() ) {

			echo "<tr>
			<td>".$row['nom_etu']."</td>
			<td>".$row['prenom_etu']."</td>
			<td>".$row['email_etu']."</td>
			<td>".$row['salle']."</td>
			<td>".$row['type_de_problem']."</td>
			<td>".$row['sujet']."</td>
			<td>".$row['details']."</td>
			<td>".$row['date_creation']."</td>
			<td>".$row['etat']."</td>
			</tr>";

			// <td>".$row['id_user']."</td>
			
					
		}
		echo "</table>";

	}
	// else {
	// 	echo "0 result";
	// }

	$conn-> close();
?>