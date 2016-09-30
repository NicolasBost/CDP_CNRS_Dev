#Le symbole "<?>" représente les informations à compléter avant d'exécuter la requête.


#Requête de creation de la base de donnée
CREATE DATABASE GestionDeProjet;

#Requête de création de la table Atelier
CREATE TABLE Atelier (id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
						title VARCHAR(64) NOT NULL,
						theme VARCHAR(64) NOT NULL,
						type VARCHAR(64) NOT NULL,
						duration INT NOT NULL,
						capacity INT NOT NULL,
						abstract TEXT NOT NULL,
						target VARCHAR(64) NOT NULL);

#Requête qui récupère toutes les informations de tous les ateliers
SELECT * FROM Atelier;

#Requête qui récupère tous les id/titre de tous les ateliers
SELECT id,title FROM Atelier;

#Requête qui récupère toutes les informations d'un atelier par son id
SELECT * FROM Atelier WHERE Atelier.id=<?>;

#Requête qui crée un Atelier
INSERT INTO Atelier(title,theme,type,duration,capacity,abstract,target)
	VALUES(<?>,<?>,<?>,<?>,<?>,<?>,<?>);

#Requête qui modifie un Atelier par son id
UPDATE Atelier SET title=<?>,
	theme=<?>, type=<?> ,duration=<?> ,capacity=<?> ,
	abstract=<?> ,target=<?> WHERE Atelier.id=<?>;

#Requête qui supprime un Atelier par son id
DELETE FROM Atelier WHERE Atelier.id=<?>;
