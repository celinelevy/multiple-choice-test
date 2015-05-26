<?php
session_start();
ob_start();

include('connectDB.inc.php');

if(isset($_POST['Nv_Chapitre'])==""){
	echo "Le champ est vide, veillez recommencer";
}


if(isset($_SESSION["ID_Matiere"]) && isset($_POST["Nv_Chapitre"])) {

$Libelle_Chapitre = ($_POST["Nv_Chapitre"]);


$request = $bdd->prepare('INSERT INTO chapitres(Libelle_Chapitre, Statut_Chapitre, ID_Matiere) VALUES(:Libelle_Chapitre, :Statut_Chapitre, :ID_Matiere)');
$request->execute(array('Libelle_Chapitre' => $Libelle_Chapitre, 'Statut_Chapitre' => "1", 'ID_Matiere' => $_SESSION['ID_Matiere']));

header('Location: Page3.php');	
}


	echo 'Ca ne marche pas !'



?>
