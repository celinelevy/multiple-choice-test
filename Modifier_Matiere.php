<?php
session_start();
include('connectDB.inc.php');

if(isset($_SESSION['ID_Matiere'])){
	$Libelle_Matiere = $_POST['Libelle_Matiere'];

	$req = $bdd->prepare('UPDATE  matieres SET Libelle_Matiere = :Libelle_Matiere WHERE ID_Matiere = :ID_Matiere');
	$req -> execute(array('Libelle_Matiere' => $Libelle_Matiere , 'ID_Matiere' => $_SESSION['ID_Matiere']));

header('Location: Page1_1.php');
}

?>
