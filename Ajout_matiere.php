<!--PHP AJOUT MATIERE-->

<?php
include('connectDB.inc.php');

extract($_POST);

if($_POST["Libelle_Matiere"] == "") {
	echo '<p>'."Le champ est vide".'</p>';
	} //Est ce que le champ a bien ete rempli
else {
//	$bdd = new PDO('mysql:host=localhost;dbname=qcd', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	$requete = $bdd->prepare('INSERT INTO matieres(Libelle_Matiere, Statut_Matiere) VALUES(:Libelle_Matiere, :Statut_Matiere)');//les doubles points permet dindiquer que les valeurs seront initialiser plutard
	$requete->execute(array('Libelle_Matiere' => $_POST['Libelle_Matiere'], 'Statut_Matiere'=> "1"));
	

}

	header('Location: Page1_1.php');

	?>
