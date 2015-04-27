<?php
session_start();

//include("verifacces.inc.php");

//Connecto to DB
//$bdd = new PDO('mysql:host=localhost;dbname=qcd', 'root', 'motdepasse', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

//pour test local en root, sans mdp
$bdd = new PDO('mysql:host=localhost;dbname=qcd', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

?>
<!--PAGE D ACCUEIL-->


<!doctype html>

<html>
	<head>
	<meta charset="UTF-8">
		<title>Page principale</title>
	</head>
<body>

<h1>Bienvenue, enseignant(-e).</h1>
<br />
<!--AJOUTER UNE MATIERE-->
	<form name="Ajouter_matiere" method="post" action="Page4.php">
		<input type="submit" value="Ajouter une matiere"/>
<br />
<br />
<br />	
	
	</form>




	<!--SELECTIONNER UNE MATIERE-->
	<form name="Option_matiere" method="post" action="Traitement_matiere.php">
		<?php
				$reponse = $bdd->query('SELECT Libelle_Matiere FROM matieres WHERE Statut_Matiere="1"');
			?>
		<select name="Libelle_Matiere" style="width: 300px">
			<option value="">Selectionnez votre matière</option>

			<?php
			while ($donnees = $reponse->fetch()){
					echo '<option value="' . $donnees['Libelle_Matiere'] . '">' . $donnees['Libelle_Matiere'] . '</option>';	
				}
			?>

		</select>
	<!--TRAITEMENTS POSSIBLES AVEC LA MATIERE SELECTIONNEE-->
	<input type="submit" name="Voir_Chapitres" value="Afficher les chapitres"> <br /><br />
	<input type="submit" name="Modif_Matiere" value="Modifier cette matiere">
	<input type="submit" name="Suppr_Matiere" value="Supprimer cette matiere">
	</form>


	
	
		

</body>
</html>
