# dockersetup_php_mysql_phpmyadmin
Met deze code kun je een redelijk eenvoudige Docker-container aanmaken met de volgende functionaliteiten:
- apache webserver met php 8.2
- mysql-database server met MySQLi extensie
- phpMyAdmin

Als je meerdere versies van deze containers wilt maken, dan moet je per versie de volgende namen in de file docker-compose.yml aanpassen:
- php-environment: container_name
- db: container_name
- phpmyadmin: container_name
