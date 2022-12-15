<?php

	session_start();

	if (!isset($_SESSION["username"])) {

		header("location:../html/connTech.php");
	}

	require '../includes/db.php';

	$userid = $_SESSION['id_user'];
	$sql = "SELECT * FROM ticket ORDER BY date_creation DESC" ;
	$result = $conn-> query($sql);

	if ($result -> num_rows > 0) {
		while ($row = $result-> fetch_assoc() ){

			echo "<tr>
				<td>".$row['id_user']."</td>
				<td>".$row['nom_etu']."</td>
				<td>".$row['prenom_etu']."</td>
				<td>".$row['email_etu']."</td>
				<td>".$row['salle']."</td>
				<td>".$row['type_de_problem']."</td>
				<td>".$row['sujet']."</td>
				<td>".$row['details']."</td>
				<td>".$row['date_creation']."</td>
				<td>".$row['etat']."</td>

				<td><a href='../html/update_ticket.php?selected=".$row['id_ticket']."&nom=".$row['nom_etu']."&prenom=".$row['prenom_etu']."&salle=".$row['salle']."&date_creation=".$row['date_creation']."&email=".$row['email_etu']."&sujet=".$row['sujet']."&radio=".$row['type_de_problem']."'>modifier etat</a></td>
				</tr>";


			// 	<td>".$row['id_ticket']."</td>

		}
		echo "</table>";

	} 
	// else {
	// 	echo "0 result";
	// }

	$conn-> close();		
?>