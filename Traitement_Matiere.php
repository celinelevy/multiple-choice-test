<?php
session_start();
ob_start();
include("connectDB.inc.php"); //appelle des elements de connexion

$Libelle_Matiere = htmlspecialchars($_POST['Libelle_Matiere']);//recupere les donnees de POST pour les transformer en variable
//htmlspecialchars est un parametre de securite, qui empeche les injections SQL
$req = $bdd->query("SELECT ID_Matiere FROM matieres WHERE Libelle_Matiere = '$Libelle_Matiere'");//selectionne dans la matiere correspondante
$res = $req->fetch();//execution de l objet $req
$_SESSION['ID_Matiere'] = $res['ID_Matiere'];//creation de la SESSION 'ID_Matiere' grace aux donnees de la query, à reprendre pour les traitements des chapitres


if (isset($_POST['Voir_Chapitres'])){ //si input "Voir_Chapitres" a ete transmit POST
	header('Location: page3.php'); 
}
else if (isset($_POST['Modif_Matiere'])){ //si input"Modif_Matiere" a ete transmit par POST
	header('Location: page2.php');
} 
else if (isset($_POST['Suppr_Matiere'])){
	header('Location: Supression_Matiere.php');
}
else {
	echo "Ca marche pas";
}

?>
