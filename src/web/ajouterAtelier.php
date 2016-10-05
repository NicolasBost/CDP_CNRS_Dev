<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ajouter Atelier</title>
</head>
<body>
<center>
<input type="text" name="title" size="20" value="Titre de l'atelier" maxlength="35"/>
<br>
<input type="text" name="theme" size="20" value="Thème de l'atelier" maxlength="35"/>
<br>
<input type="text" name="type" size="20" value="Type de l'atelier" maxlength="35"/>
<br>
<input type="text" name="duration" size="20" value="Durée de l'atelier" maxlength="35"/>
<br>
<input type="text" name="capacity" size="20" value="Capacité de l'atelier" maxlength="35"/>
<br>
<input type="text" name="abstract" size="20" value="Résumé de l'atelier" maxlength="35"/>
<br>
<input type="text" name="target" size="20" value="Cible de l'atelier" maxlength="35"/>
<br>
<input type="submit" value="Créer l'atelier" name="envoyer"/>
</center>
</form>
</body>
</html>
<?php
	$con = mysqli("localhost","root","root","GestionDeProjet");
	if ($con->connect_error){
		die("Pas de connection" . $con->connect_error);
	}
	echo "Connection effectuée"

	$title = $_POST['title'];
	$theme = $_POST['theme'];
	$type = $_POST['type'];
	$duration = $_POST['duration'];
	$capacity = $_POST['capacity'];
	$abstract = $_POST['abstract'];
	$target = $_POST['target'];

	$title = mysql_real_escape_string($title);
	$theme = mysql_real_escape_string($theme);
	$type = mysql_real_escape_string($type);
	$duration = mysql_real_escape_string($duration);
	$capacity = mysql_real_escape_string($capacity);
	$abstract = mysql_real_escape_string($abstract);
	$target = mysql_real_escape_string($target);

	$query = "
	INSERT INTO Atelier(title,theme,type,duration,capacity,abstract,target)
	VALUES('$title','$theme','$type','$duration','$capacity','$abstract','$target');";

	if ($con->query($query) === TRUE){
    		echo "New record created successfully";
	}
	else{
    		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$con->close();

?>
