## myfirstdockerproject met Apache, php, MySQL en phpMyAdmin
Met deze code kun je een redelijk eenvoudige Docker-container aanmaken met de volgende functionaliteiten:
- apache webserver met de recentste versie van php 8
- mysql-database server met MySQLi- en PDO-extensie
- phpMyAdmin

Als je meerdere versies van deze containers wilt maken, dan moet je per versie de volgende namen in de file 'docker-compose.yml' aanpassen:
1. php-environment: container_name (regel 4)
2. db: container_name (regel 15)
3. phpmyadmin: container_name (regel 27)

## Wat je er bij krijgt
De map ***php*** is de root van je webserver; in deze map zit 'als service van de zaak':
- ***index.php*** is een eenvoudig contactformulier
- ***index2.php*** geeft de output-array bij `SELECT * FROM users` request op de database
- ***info.php*** geeft de php-configuratie weer (je kunt kijken of je misschien iets mist)
- ***insert.php*** verwerkt het contactformulier
- de map ***db*** bevat:
  - de nodige ínstellingen om de database te kunnen bevragen met PDO (***dbconnection.class.php***) of msqli (***dbmysqli.php***); de parameters zijn overgenomen uit de ***docker-compose.yml***-file die leidend is
  - de sql-statements die nodig zijn om bij `docker-compose up` de tabel users in de database te vullen met wat data (***init.sql***)

## Hoe te gebruiken
* download de code via de zip-file
* pak de zip-file uit en hernoem de map waarin de file ***docker-compose.yml*** en de map ***php*** zitten; dat wordt nl. ook de naam van de Docker-container
* open de map in je favoriete IDE, bijv. VSC of phpStorm
* open de terminal en geef het commando `docker-compose up`
* de map ***php*** is de root van je website; als je niks wilt met de files in deze map, gooi je ze weg en maak je je eigen files; wil je gebruik maken van de database, dan kun je de db-map laten staan met 1 van de 2 connectie-files, afhankelijk van of je gebruik wilt maken van PDO of mysqli
