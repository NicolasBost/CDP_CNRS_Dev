<?php // login.php
	 function RecupererDesDonnees($requette,$arguments)//arguments associative array
	 {
		 try{
			 $cnx = new PDO("mysql:host=localhost;dbname=GestionDeProjet",'login','password');
			 $cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			 $stmt = $cnx->prepare($requette);
			 $stmt->execute($arguments);
			 $resultat= $stmt->fetchAll();
			 return $resultat;//retourne tous les enregistrements
		 }catch(PDOException $ex)
		 {
			 echo $ex;
		 }
	 }
?>