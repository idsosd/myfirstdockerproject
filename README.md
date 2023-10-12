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
index.php is een eenvoudig contactformulier
insert.php verwerkt het contactformulier
index2.html

## Hoe te gebruiken
* download de code via de zip-file
* pak de zip-file uit en hernoem de map waarin de file 'docker-compose.yml' en de map 'php' zitten; dat wordt nl. ook de naam van de Docker-container
* open de map in je favoriete IDE, bijv. VSC of phpStorm
* open de terminal en geef het commando `docker-compose up`
* de map 'php' is de root van je website
