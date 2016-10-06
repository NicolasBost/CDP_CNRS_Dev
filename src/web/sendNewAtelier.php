<html>
<body>

titre <?php echo $_POST["title"]; ?><br>
theme <?php echo $_POST["theme"]; ?>

</body>
</html>
<?php
	$con = mysqli_connect("localhost","root","root","GestionDeProjet");
	if (!$con){
		die("Pas de connexion" . $con->connect_error);
	}
	echo "Connexion effectuée"

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
