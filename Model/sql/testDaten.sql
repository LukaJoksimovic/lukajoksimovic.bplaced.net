
USE Shop;

insert into ort (postleitzahl, bezeichnung) values
    (8600, 'Dübendorf'),
    (8001, 'Zürich'),
    (8002, 'Zürich'),
    (8048, 'Zürich');

insert into benutzer (id,vorname,nachname,email,passwort) values
    (1,'Luka', 'Joksimovic', 'luka.joksimovic04@gmail.com', 'Test1234'),
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

insert into produkt (id,produktname,beschreibung,preis,produktkategorie_fs,imagePath) values
    (1,'3070 ti','Die 3070 ti ist eine Grafikkarte für den Alltäglichen Gebrauch. Sei es für reine Office-Arbeiten oder Gamen, sie enttäuscht nie.',1050.00,1,"View/content/assets/img/3070ti.jpg"),
    (2,'Intel Prozessor','Test Text für Prozessor',600.00,1,"View/content/assets/img/Intel.png"),
    (3,'Audi RS3','Eine 5 Cylinder Maschine für ein tolles Fahrerlebnis. Alltagstauglich und Famillienfreundlich.',69000.00,2,"View/content/assets/img/audirs3.jpg"),
    (4,'BMW M4','Eine 6 Cylinder Maschine für ein tolles Fahrerlebnis',99000.00,2,"View/content/assets/img/bmwM4.jpg"),
    (5,'Tisch','Ein Tisch für zwei. Trinken auch Sie Ihren Kaffe mit ihren liebsten.',50.00,3,"View/content/assets/img/table.jpg"),
    (6,'Sofa','Ein Sofa mit PLatz für die Ganze Famillie. Angenehmer Stoff für bequeme Zeiten am Feierabend.',799.50,3,"View/content/assets/img/sofa.jpg"),
    (7,'Nike T-Shirt Grau','Nike T-Shirt, für Sport und Eleganz.',40.00,4,"View/content/assets/img/tshirtGrau.jpg"),
    (8,'Trainerhosen','Trainerhosen, für Sport und Eleganz',350.90,4,"View/content/assets/img/trainerhosenGrau.jpg");

insert into bestellung (id,datum,adresse,postleitzahl_fs,benutzer_fs) values
    ();

insert into bestellung_details (id,bestellung_fs,produkt_fs,preis,anzahl) values
    ();

insert into warenkorb (id, benutzer_fs) values
    (1,1),
    (2,2),
    (3,3),
    (4,4);

insert into warenkorb_produkt (id, produkt_fs, warenkorb_fs, anzahl) values
    (1, 1, 1, 2)
    (2, 2, 1, 3);

