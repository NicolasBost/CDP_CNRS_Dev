<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>send data</title>
</head>
<body>
<?php
	$title=$_POST['title'];
	$theme=$_POST["theme"];
	$type=$_POST["type"];
	$duration=$_POST["duration"];
	$capacity=$_POST["capacity"];
	$abstract=$_POST["abstract"];
	$target=$_POST["target"];
	$servername="localhost";
	$username="root";
	$password="root";
	$base="GestionDeProjet";
	$con = mysqli_connect($servername,$username,$password,$base);
	if (!$con){
		die("Pas de connexion" . mysqli_connect_error());
	}
	echo "Connexion effectuée";
	
	$query="INSERT INTO Atelier(title,theme,type,duration,capacity,abstract,target)
VALUES('$title','$theme','$type',$duration,$capacity,'$abstract','$target');";
	if ($con->query($query) === TRUE){
    		echo "New record created successfully";
	}
	else{
    		echo "Error: " . $sql . "<br>" . $con->error;
	}


	
?>
</body>
</html>
