CREATE DATABASE gestion_etudiants;
USE gestion_etudiants;

CREATE TABLE etudiants (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NULL,
  filiere VARCHAR(100) NOT NULL
);

INSERT INTO etudiants (nom, filiere) VALUES ('Abibata Doucoure', 'L3 IDA');
