<!DOCTYPE html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Liste Atelier</title>
 
<link href="CSS/bootstrap.min.css" rel="stylesheet">
<body>

<center><h2>Lister les ateliers</h2></center>
<table class="table table-hover" >
	<tr class="danger">

	<td><div style="width : 200px; overflow:auto;">Titre de l'atelier</div></td>
	<td><div style="width : 200px; overflow:auto;">Thème de l'atelier </div></td>
    <td><div style="width : 200px; overflow:auto;">Type de l'atelier</div></td>
	<td><div style="width : 200px; overflow:auto;">Durée de l'atelier</div></td>
	<td><div style="width : 200px; overflow:auto;">Capacité de l'atelier</div></td>
	<td><div style="width : 200px; overflow:auto;">Résumé de l'atelier</div></td>
    <td><div style="width : 100px; overflow:auto;">Cible de l'atelier </div></td>
	</tr>
							
	<?php
	require_once("Login.php");
	$resultat = RecupererDesDonnees("select title,theme,type,duration,capacity,abstract,target from atelier ",NULL);
	foreach($resultat as $row)
	{?>
	<tr class='active'>
	<td><?php echo $row['title']; ?></td>
	<td><?php echo $row['theme']; ?></td>
	<td><?php echo $row['type']; ?></td>
	<td><?php echo $row['duration']; ?></td>
	<td><?php echo $row['capacity']; ?></td>
	<td><?php echo $row['abstract']; ?></td>
	<td><?php echo $row['target']; ?></td>
    </tr>
    <?php	} ?>
								
</table>
							
</body>