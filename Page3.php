<?php
session_start();
include("connectDB.inc.php");

if (isset($_SESSION['ID_Matiere'])) //est ce que la session "ID_Matiere" a bien été créee
{
	$req = $bdd->query('SELECT ID_Matiere,Libelle_Matiere FROM matieres WHERE Statut_Matiere = "1"');//Statut défini à "1" pour pouvoir rappeler cette matiere plus tard
 
while ($donnees = $req->fetch())
{
if ($_SESSION['ID_Matiere']==$donnees['ID_Matiere'])// Si l'ID de la matiere selectionnee tantot correspond a un ID dans la BDD
{//ALORS ouverture de la page
?>

<!doctype html>

<html>
	<head>
	<meta charset="UTF-8">
		<title>Chapitres de la matiere</title>
	</head>
<body>


<h1>Liste des chapitres</h1>


		<h2>Vous avez sélectionné la matière : <?php echo $donnees['Libelle_Matiere'];?></h2>


		<form name="" method="post" action="Page6.php">
		<input type="submit" name="" value="Ajoutez un chapitre">
		</form>
<br /><br />

	<form name="" method="post" action="Traitement_Chapitre.php">
	<?php
		$res = $bdd->query("SELECT Libelle_Chapitre FROM chapitres WHERE ID_Matiere =" . $_SESSION['ID_Matiere'] );
	?>
		<select name="Libelle_Chapitre" style="width:300px">
		<option value="">Sélectionner un chapitre</option>
			<?php
				while ($reponse = $res->fetch()){
				echo '<option value"' . $reponse['Libelle_Chapitre'] . '">' . $reponse['Libelle_Chapitre'] . '</option>';
				}
			?>

		</select>
		<input type="submit" name="Nv_Question" value="Ajouter une question">
<br /><br />
		<input type="submit" name="Modif_Chapitre" value="Modifier ce chapitre">
		<input type="submit" name="Suppr_Chapitre" value="Supprimer ce chapitre">
		<input type="submit" name="Liste_Questions" value="Liste des questions">
	</form>

<br /><br />
		<form name="" method="post" action="page1_1.php">
		<input type="submit" name="" value="ACCUEIL">
		</form>

</body>
</html>

<?php
	}

	}
		$req->closeCursor();

	}
?>
