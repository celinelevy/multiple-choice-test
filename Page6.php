<?php
session_start();
include('connectDB.inc.php');

if(isset($_SESSION['ID_Matiere'])) { //Si une session matiere existe bien
$request = $bdd->query('SELECT ID_Matiere, Libelle_Matiere FROM matieres WHERE Statut_Matiere="1"'); // Selectionner La matiere correspondante a Session

while ($reponse = $request->fetch()){

if ($reponse['ID_Matiere'] == $_SESSION['ID_Matiere']){

?>


<html>
	<head>
	<meta charset="UTF-8">
	<title>Ajouter un chapitre</title>
	</head>

<body>
<h1>Ajouter un chapitre à la matière : <?php echo $reponse['Libelle_Matiere'];?></h1>

<form method="post" name="Nv_Chapitre" action="Ajout_Chapitres.php">
<textarea name="Nv_Chapitre" cols="80"></textarea>
<input type="submit" name="" value="Ok">
</form>




</body>
</html>

<?php
}
} 
}

?>
