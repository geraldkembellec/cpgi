CREATE TABLE Conduire (
  PRIMARY KEY (id_Personne, id_Voiture),
  id_Personne INT NOT NULL,
  id_Voiture  VARCHAR(9) NOT NULL
);

CREATE TABLE Personne (
  PRIMARY KEY (id_Personne),
  id_Personne INT NOT NULL,
  nom         VARCHAR(32),
  prenom      VARCHAR(32)
);

CREATE TABLE Voiture (
  PRIMARY KEY (id_Voiture),
  id_Voiture VARCHAR(9) NOT NULL,
  marque     ENUM('Peugeot','Citroen','Autre'),
  modele     VARCHAR(16),
  annee      YEAR
);

ALTER TABLE Conduire ADD FOREIGN KEY (id_Voiture) REFERENCES Voiture (id_Voiture);
ALTER TABLE Conduire ADD FOREIGN KEY (id_Personne) REFERENCES Personne (id_Personne);
