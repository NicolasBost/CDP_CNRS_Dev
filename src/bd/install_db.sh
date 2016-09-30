#!/bin/bash

#USAGE ./install_db.sh MYSQL_HOST MYSQL_USERNAME

db_host=$1
db_user=$2

CREATE_DATABASE="CREATE DATABASE GestionDeProjet;"
CREATE_ATELIER_TABLE="CREATE TABLE Atelier (id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
						title VARCHAR(64) NOT NULL,
						theme VARCHAR(64) NOT NULL,
						type VARCHAR(64) NOT NULL,
						duration INT NOT NULL,
						capacity INT NOT NULL,
						abstract TEXT NOT NULL,
						target VARCHAR(64) NOT NULL);"

echo $CREATE_DATABASE > tmp.sql
echo "USE GestionDeProjet;" >> tmp.sql
echo $CREATE_ATELIER_TABLE >> tmp.sql

mysql -u$db_user -p -h$db_host < tmp.sql

rm tmp.sql