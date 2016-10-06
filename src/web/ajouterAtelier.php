<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ajouter Atelier</title>
</head>
<body>
<center>
<form action="sendNewAtelier.php" method="post">
<input type="text" name="title" value="Titre de l'atelier" maxlength="64"/>
<br>
<input type="text" name="theme" value="Thème de l'atelier" maxlength="64"/>
<br>
<input type="text" name="type" value="Type de l'atelier" maxlength="64"/>
<br>
<input type="text" name="duration" value="Durée de l'atelier"/>
<br>
<input type="text" name="capacity" value="Capacité de l'atelier"/>
<br>
<input type="text" name="abstract" value="Résumé de l'atelier"/>
<br>
<input type="text" name="target" value="Cible de l'atelier" maxlength="64"/>
<br>
<input type="submit" value="Créer l'atelier" name="envoyer"/>
</form>
</center>
</body>
</html>
