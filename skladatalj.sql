DROP DATABASE IF EXISTS SKLADATALJ;
CREATE DATABASE SKLADATALJ;
USE SKLADATALJ;


CREATE TABLE odgovori(
    ID_osebe INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    odgovor1 VARCHAR(45),
    odgovor2 VARCHAR(45),
    odgovor3 VARCHAR(45),
    odgovor4 VARCHAR(45),
    odgovor5 VARCHAR(45),
    odgovor6 VARCHAR(200)
);
