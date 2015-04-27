<?php
session_start();
include("connectDB.inc.php");
//on commence par la requete sql qui va nous permettre de selectionner les donnees concernees par les changements
	if (isset($_SESSION['ID_Matiere'])){
		$req = $bdd->query('SELECT ID_Matiere, Libelle_Matiere FROM matieres WHERE Statut_Matiere = "1"');
		while ($donnees = $req->fetch()){
			if ($donnees['ID_Matiere'] == $_SESSION['ID_Matiere'])//est-ce que la matiere selectionnee existe bien dans la base, condition necessaire pour selectionner uniquement la matiere selectionnee precedemment
{
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Modifier une matiere</title>
	</head>

<body>
<h1>Modifier une matière</h1>
<br />
<h2>Vous avez sélectionné cette matière : <?php echo $donnees['Libelle_Matiere']?></h2>
<br />
<br />
	<form name="" method="post" action="Modifier_matiere.php">
		Entrez le nouveau nom de la matière : <br /><textarea name="Libelle_Matiere" cols="80"></textarea>
		<input type="submit" name="" value="Ok"/>
	</form>
<br />
<!--RETOUR-->
	<form name="Retour" method="post" action="page1_1.php">
		<input type="submit" name="" value="Annuler">
	</form>
</body>
</html>
<?php
				}
			}
				$req->closeCursor();
			}
?>

