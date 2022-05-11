
DROP DATABASE IF EXISTS Shop;
CREATE DATABASE Shop;
USE Shop;

CREATE TABLE ort (
    postleitzahl INT NOT NULL UNIQUE,
    bezeichnung VARCHAR(255) NOT NULL,
    PRIMARY KEY (postleitzahl)
);

CREATE TABLE benutzer (
    id INT NOT NULL AUTO_INCREMENT UNIQUE,
    vorname VARCHAR(255) NOT NULL, 
    nachname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    passwort VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE adminBenutzer (
    id INT NOT NULL AUTO_INCREMENT UNIQUE,
    benutzer_fs INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (benutzer_fs) REFERENCES benutzer(id) ON DELETE CASCADE
);

CREATE TABLE produktkategorie (
    id INT NOT NULL AUTO_INCREMENT UNIQUE,
    kategoriename VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE produkt (
    id INT NOT NULL AUTO_INCREMENT UNIQUE,
    produktname VARCHAR(255) NOT NULL,
    beschreibung VARCHAR(255) NOT NULL,
    preis DECIMAL(10,2) NOT NULL,
    produktkategorie_fs INT NOT NULL,
    imagePath VARCHAR(255) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (produktkategorie_fs) REFERENCES produktkategorie(id) ON DELETE CASCADE
);

CREATE TABLE bestellung (
    id INT NOT NULL AUTO_INCREMENT UNIQUE,
    datum DATETIME NOT NULL DEFAULT NOW(),
    adresse VARCHAR(255) NOT NULL,
    benutzer_fs INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (benutzer_fs) REFERENCES benutzer(id) ON DELETE CASCADE
);

CREATE TABLE bestellung_details (
    id INT NOT NULL AUTO_INCREMENT UNIQUE,
    bestellung_fs INT NOT NULL,
    produkt_fs INT NOT NULL,
    preis DECIMAL(5,2) NOT NULL,
    anzahl INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (bestellung_fs) REFERENCES bestellung(id) ON DELETE CASCADE,
    FOREIGN KEY (produkt_fs) REFERENCES produkt(id) ON DELETE CASCADE
);

CREATE TABLE warenkorb (
    id INT NOT NULL AUTO_INCREMENT UNIQUE,
    benutzer_fs INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(benutzer_fs) REFERENCES benutzer(id) ON DELETE CASCADE
);

CREATE TABLE warenkorb_produkt (
    id INT NOT NULL AUTO_INCREMENT UNIQUE,
    produkt_fs INT NOT NULL,
    warenkorb_fs INT NOT NULL,
    anzahl INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY(produkt_fs) REFERENCES produkt(id) ON DELETE CASCADE,
    FOREIGN KEY(warenkorb_fs) REFERENCES warenkorb(id) ON DELETE CASCADE
);
