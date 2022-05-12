create table doctrine_migration_versions
(
    version        VARCHAR(191) not null
        primary key,
    executed_at    DATETIME default NULL,
    execution_time INTEGER  default NULL
);

INSERT INTO doctrine_migration_versions (version, executed_at, execution_time) VALUES ('DoctrineMigrations\Version20220427182442', '2022-04-27 18:24:59', 43);


create table im22_panier
(
    id         INTEGER not null
        primary key autoincrement,
    quantite   INTEGER not null,
    User_id    INTEGER not null,
    Produit_Id INTEGER not null
);

create index IDX_E3BB1FCA68D3EA09
    on im22_panier (User_id);

create index IDX_E3BB1FCAD5ED5989
    on im22_panier (Produit_Id);

INSERT INTO im22_panier (id, quantite, User_id, Produit_Id) VALUES (67, 5, 18, 1);
INSERT INTO im22_panier (id, quantite, User_id, Produit_Id) VALUES (68, 9, 18, 2);
INSERT INTO im22_panier (id, quantite, User_id, Produit_Id) VALUES (69, 5, 18, 4);
INSERT INTO im22_panier (id, quantite, User_id, Produit_Id) VALUES (70, 5, 18, 9);
INSERT INTO im22_panier (id, quantite, User_id, Produit_Id) VALUES (71, 3, 18, 12);
INSERT INTO im22_panier (id, quantite, User_id, Produit_Id) VALUES (72, 9, 18, 13);
INSERT INTO im22_panier (id, quantite, User_id, Produit_Id) VALUES (73, 26, 18, 16);
INSERT INTO im22_panier (id, quantite, User_id, Produit_Id) VALUES (74, 11, 18, 18);
INSERT INTO im22_panier (id, quantite, User_id, Produit_Id) VALUES (75, 11, 18, 19);
INSERT INTO im22_panier (id, quantite, User_id, Produit_Id) VALUES (76, 6, 18, 20);


create table im22_produit
(
    id       INTEGER          not null
        primary key autoincrement,
    libelle  VARCHAR(50)      not null,
    prix     DOUBLE PRECISION not null,
    quantite INTEGER          not null
);

INSERT INTO im22_produit (id, libelle, prix, quantite) VALUES (1, 'NVIDIA GeForce RTX 3090', 1319, 62);
INSERT INTO im22_produit (id, libelle, prix, quantite) VALUES (2, 'AMD Radeon RX 6900 XT', 879, 54);
INSERT INTO im22_produit (id, libelle, prix, quantite) VALUES (3, 'NVIDIA GeForce RTX 3080 Ti', 703, 59);
INSERT INTO im22_produit (id, libelle, prix, quantite) VALUES (4, 'AMD Radeon RX 6800 XT', 571, 13);
INSERT INTO im22_produit (id, libelle, prix, quantite) VALUES (5, 'NVIDIA GeForce RTX 3080', 615, 45);
INSERT INTO im22_produit (id, libelle, prix, quantite) VALUES (6, 'AMD Radeon RX 6800', 509, 1);
INSERT INTO im22_produit (id, libelle, prix, quantite) VALUES (7, 'NVIDIA GeForce RTX 3070 Ti', 527, 35);
INSERT INTO im22_produit (id, libelle, prix, quantite) VALUES (8, 'NVIDIA TITAN RTX', 2200, 1);
INSERT INTO im22_produit (id, libelle, prix, quantite) VALUES (9, 'NVIDIA GeForce RTX 3070', 440, 55);
INSERT INTO im22_produit (id, libelle, prix, quantite) VALUES (10, 'NVIDIA GeForce RTX 2080 Ti', 1045, 40);
INSERT INTO im22_produit (id, libelle, prix, quantite) VALUES (11, 'AMD Radeon RX 6700 XT', 420, 55);
INSERT INTO im22_produit (id, libelle, prix, quantite) VALUES (12, 'NVIDIA GeForce RTX 3060 Ti', 350, 2);
INSERT INTO im22_produit (id, libelle, prix, quantite) VALUES (13, 'NVIDIA GeForce RTX 2080 SUPER', 615, 28);
INSERT INTO im22_produit (id, libelle, prix, quantite) VALUES (14, 'NVIDIA TITAN V', 2640, 55);
INSERT INTO im22_produit (id, libelle, prix, quantite) VALUES (15, 'NVIDIA GeForce RTX 2080', 610, 25);
INSERT INTO im22_produit (id, libelle, prix, quantite) VALUES (16, 'AMD Radeon RX 6600 XT', 333, 38);
INSERT INTO im22_produit (id, libelle, prix, quantite) VALUES (17, 'NVIDIA GeForce RTX 2070 SUPER', 439, 75);
INSERT INTO im22_produit (id, libelle, prix, quantite) VALUES (18, 'NVIDIA GeForce GTX 1080 Ti', 710, 75);
INSERT INTO im22_produit (id, libelle, prix, quantite) VALUES (19, 'NVIDIA TITAN Xp', 1055, 37);
INSERT INTO im22_produit (id, libelle, prix, quantite) VALUES (20, 'AMD Radeon VII', 585, 41);



create table im22_user
(
    pk       INTEGER     not null
        primary key autoincrement,
    nom      VARCHAR(30) default '1' not null,
    prenom   VARCHAR(30) default '1' not null,
    username VARCHAR(64) not null,
    roles    CLOB        not null,
    password VARCHAR(64) not null,
    birthday DATE        default NULL
);

create unique index UNIQ_3DFDD5A9F85E0677
    on im22_user (username);

INSERT INTO im22_user (pk, nom, prenom, username, roles, password, birthday) VALUES (1, 'sadmin', 'sadmin', 'sadmin', '["ROLE_SUPER_ADMIN"]', '$2y$13$g1llppDlZ0SOmELnaJL3Geg1oN..N1Fona/fZf/WbOu0cU7RZ.1CO', '2022-04-27');
INSERT INTO im22_user (pk, nom, prenom, username, roles, password, birthday) VALUES (2, 'Subrenat', 'Gilles', 'gilles', '["ROLE_ADMIN"]', '$2y$13$5AbFb6XRrsux/Xx5d10Fsus2Gn/PV3GYyIRMURgGp430LpX3xmSDW', '1970-09-24');
INSERT INTO im22_user (pk, nom, prenom, username, roles, password, birthday) VALUES (3, 'Zrour', 'Rita', 'rita', '["ROLE_CLIENT"]', '$2y$13$95ljQwQRhR2uF.mV7bb7G.cdwkJjTmyd4uhFXue.y8CbteV9nNHd2', '1975-02-18');
INSERT INTO im22_user (pk, nom, prenom, username, roles, password, birthday) VALUES (4, 'Gautier', 'Simon', 'simon', '["ROLE_CLIENT"]', '$2y$13$3Jcu0FYSQ8k.TKygi2IUFepNOM8ZDFDbEb7T7mpDJpq8Fr.DunIWG', '1988-06-07');
INSERT INTO im22_user (pk, nom, prenom, username, roles, password, birthday) VALUES (5, 'Salihi', 'Valdrin', 'valdrin', '["ROLE_ADMIN"]', '$2y$13$781numK4FdpXNyjsp1ZBQOZIw7T7tpQEcrqGuFluaeUP6M6a6iI1a', '1999-03-05');
INSERT INTO im22_user (pk, nom, prenom, username, roles, password, birthday) VALUES (6, 'Saint-Léger', 'Baptiste', 'baptiste', '["ROLE_ADMIN"]', '$2y$13$lziVigBcOEPKiRBpZJ8QI.nkYtfqsnlg2lWhMA0D6RIoEC3JNQQSG', '1999-11-15');
INSERT INTO im22_user (pk, nom, prenom, username, roles, password, birthday) VALUES (7, 'testAdmin', 'testAdmin', 'testAdmin', '["ROLE_ADMIN"]', '$2y$13$fMZbLYCUYo09DX9923e7nOG7OvlK.x4RMFWiPCzXKwrPzGVNDfEnO', '1902-01-01');
INSERT INTO im22_user (pk, nom, prenom, username, roles, password, birthday) VALUES (8, 'testSuperAdmin', 'testSuperAdmin', 'testSuperAdmin', '["ROLE_SUPER_ADMIN"]', '$2y$13$VbgrnSTEUx2eQXsQjjRNL.X0NX73p70M.0SSE6bINDV2HOffAziSi', '1902-01-01');
INSERT INTO im22_user (pk, nom, prenom, username, roles, password, birthday) VALUES (18, 'testClient1', 'testClient1', 'testClient1', '["ROLE_CLIENT"]', '$2y$13$Ed2jk4psTb601lv1B5giqOYHYJ1Y1wtlePW0UdeFKUJEUsBPjH7oq', '1902-01-01');
INSERT INTO im22_user (pk, nom, prenom, username, roles, password, birthday) VALUES (19, 'testClient2', 'testClient2', 'testClient2', '["ROLE_CLIENT"]', '$2y$13$z8Aj5CxeMYOcgOqf/uAM1.lFcMX01Fxf2KXcomkLiWWAGv..3Yq/C', '1902-01-01');
INSERT INTO im22_user (pk, nom, prenom, username, roles, password, birthday) VALUES (20, 'testClient3', 'testClient3', 'testClient3', '["ROLE_CLIENT"]', '$2y$13$8xqRbZVqAbOz29lVOibAOu01smTnc9LgzXTvIzIVqB7IbEMqgNKbS', '1902-01-01');



create table sqlite_master
(
    type     text,
    name     text,
    tbl_name text,
    rootpage int,
    sql      text
);

INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('table', 'doctrine_migration_versions', 'doctrine_migration_versions', 2, 'CREATE TABLE doctrine_migration_versions (version VARCHAR(191) NOT NULL, executed_at DATETIME DEFAULT NULL, execution_time INTEGER DEFAULT NULL, PRIMARY KEY(version))');
INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('index', 'sqlite_autoindex_doctrine_migration_versions_1', 'doctrine_migration_versions', 3, null);
INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('table', 'im22_panier', 'im22_panier', 4, 'CREATE TABLE im22_panier (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, quantite INTEGER NOT NULL, User_id INTEGER NOT NULL, Produit_Id INTEGER NOT NULL)');
INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('table', 'sqlite_sequence', 'sqlite_sequence', 5, 'CREATE TABLE sqlite_sequence(name,seq)');
INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('index', 'IDX_E3BB1FCA68D3EA09', 'im22_panier', 6, 'CREATE INDEX IDX_E3BB1FCA68D3EA09 ON im22_panier (User_id)');
INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('index', 'IDX_E3BB1FCAD5ED5989', 'im22_panier', 7, 'CREATE INDEX IDX_E3BB1FCAD5ED5989 ON im22_panier (Produit_Id)');
INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('table', 'im22_produit', 'im22_produit', 8, 'CREATE TABLE im22_produit (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, prix DOUBLE PRECISION NOT NULL, quantite INTEGER NOT NULL)');
INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('table', 'im22_user', 'im22_user', 9, 'CREATE TABLE im22_user (pk INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(30) DEFAULT ''1'' NOT NULL, prenom VARCHAR(30) DEFAULT ''1'' NOT NULL, username VARCHAR(64) NOT NULL --Set de login doit être unique
        , roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(64) NOT NULL --mot de passe crypté : il faut une taille assez grande pour ne pas le tronquer
        , birthday DATE DEFAULT NULL)');
INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('index', 'UNIQ_3DFDD5A9F85E0677', 'im22_user', 10, 'CREATE UNIQUE INDEX UNIQ_3DFDD5A9F85E0677 ON im22_user (username)');



create table sqlite_sequence
(
    name,
    seq
);

INSERT INTO sqlite_sequence (name, seq) VALUES ('im22_user', 20);
INSERT INTO sqlite_sequence (name, seq) VALUES ('im22_produit', 30);
INSERT INTO sqlite_sequence (name, seq) VALUES ('im22_panier', 76);