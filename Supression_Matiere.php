<?php
session_start();
include('connectDB.inc.php');

if (isset($_SESSION['ID_Matiere'])){

//inutile de creer une variable, puisqu'il n'y a aucune donnee a envoyer a la base, il suffit de reprendre l'ID_Matiere et appliquer "0" à celle-ci

	$req = $bdd->prepare('UPDATE matieres SET Statut_Matiere => :Statut_Matiere WHERE ID_Matiere = :ID_Matiere');
	$req->execute(array('Statut_Matiere' => "0" , 'ID_Matiere' => $_SESSION['ID_Matiere']));

header('Location: Page1_1.php');
}

?>
