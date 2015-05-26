<?php
session_start();
ob_start();

include('connectDB.inc.php');


$Libelle_Chapitre = htmlspecialchars($_POST['Libelle_Chapitre']);

$request = $bdd->query("SELECT ID_Chapitre, ID_Matiere FROM chapitres WHERE Libelle_Chapitre = '$Libelle_Chapitre'");
$res = $request->fetch();

$_SESSION['ID_Chapitre'] = $res['ID_Chapitre'];

if (isset($_POST['Modif_Chapitre'])){
	header('Location: page8.php');
}
elseif (isset($_POST['Suppr_Chapitre'])){
	header('Location:page9.php');
}
elseif (isset($_POST['Liste_Questions'])) {
	header('Location:page10.php');
}
else if (isset($_POST['Nv_Question'])){
	header('Location:Nv_Question.php');
}
else {
	echo 'Ca ne marche pas....';
}


?>
