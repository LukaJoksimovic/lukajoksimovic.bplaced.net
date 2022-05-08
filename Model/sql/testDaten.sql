
USE Shop;

insert into ort (postleitzahl, bezeichnung) values
    (8600, 'Dübendorf'),
    (8001, 'Zürich'),
    (8002, 'Zürich'),
    (8048, 'Zürich');

insert into benutzer (id,vorname,nachname,email,passwort) values
    (2,'Max', 'Mustermann', 'max.mustermann@gmail.com', 'Test123'),
    (3,'Joe', 'Stoppelmaier', 'joe.stoppelmaier@gmail.com', 'Test123'),
    (4,'Britney', 'Stalking', 'britney.stalking@gmail.com', 'Test123');

insert into adminBenutzer (id,benutzer_fs) values
    (1,1);
    
insert into produktkategorie (id, kategoriename) values
    (1,'Technik'),
    (2,'Fahrzeug'),
    (3,'Möbel'),
    (4,'Bekleidung');

insert into produkt (id,produktname,beschreibung,preis,produktkategorie_fs) values
    (1,'3070 ti','Die 3070 ti ist eine Grafikkarte für den Alltäglichen Gebrauch. Sei es Office-Arbeiten oder Gamen',1050.00,1),
    (2,'Intel Prozessor','Test Text für Prozessor',600.00,1),
    (3,'Audi RS3','Eine 5 Cylinder Maschine für ein tolles Erlebnis',59000.00,2),
    (4,'BMW M4','Eine 6 Cylinder Maschine für ein tolles Erlebnis',89000.00,2),
    (5,'Tisch','Ein Tisch mit grosser Fläche',550.00,3),
    (6,'Sofa','Ein Sofa mit so viel Platz für die Ganze Famillie',799.50,3),
    (7,'Nike T-Shirt Grau','Nike T-Shirt, für Sport und Eleganz',40.00,4),
    (8,'Nike Trainerhosen','Nike Trainerhosen, für Sport und Eleganz',70.90,4);

insert into bestellung (id,datum,adresse,postleitzahl_fs,benutzer_fs) values
    ();

insert into bestellung_details (id,bestellung_fs,produkt_fs,preis,anzahl) values
    ();
