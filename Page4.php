<?php
session_start();


?>
<!doctype html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Ajouter une matiere</title>
	</head>
<body>

<h1>Ajouter une matiere a la base de donnees</h1>
	<!--AJOUT-->
	<form name="Ajout" method="post" action="Ajout_matiere.php">
	<textarea name="Libelle_Matiere" cols="80"></textarea>
	<input type="submit" name="" value="Ok">
	</form>
	
	
	
<!--RETOUR-->
	<form name="retour" method="post" action="page1_1.php">
		<input type="submit" name="" value="Cancel">
	</form>
</body>
</html>
