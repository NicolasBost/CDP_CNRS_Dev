<?php 

// On récupère les champs

if(isset($_POST['title']))	$title=$_POST['title'];
else	$title="";

if(isset($_POST['theme']))	$theme=$_POST['theme'];
else	$theme="";

if(isset($_POST['type']))	$type=$_POST['type'];
else	$type="";

if(isset($_POST['duration']))	$duration=$_POST['duration'];
else	$duration="";

if(isset($_POST['capacity']))	$capacity=$_POST['capacity'];
else	$capacity="";

if(isset($_POST['abstract']))	$abstract=$_POST['abstract'];
else	$abstract="";

if(isset($_POST['target']))	$target=$_POST['target'];
else	$target="";

// On vérifie si les champs sont vides 
if(empty($title) OR empty($theme) OR empty($type) OR empty($duration) OR empty($capacity) OR empty($abstract) OR empty($target)) 
    { 
    echo '<font color="red">Attention, champ(s) vide(nt) !</font>'; 
    } 
// Aucun champ n'est vide, on peut enregistrer dans la table 
else      
    { 
    $db = mysql_connect('localhost', 'login', 'password');  // connexion à la base 
    mysql_select_db('GestionDeProjet',$db);                  // sélection de la base 
     $sql = "INSERT INTO Atelier(title, theme, type, duration, capacity, abstract, target) VALUES('$title','$theme','$type','$duration','$capacity','$abstract', '$target')"; 
     mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());  
         
     // on affiche le résultat pour le visiteur 
     echo 'Vos infos on été ajoutées.'; 
        } 
    mysql_close();  // on ferme la connexion 
    }  
?> 
