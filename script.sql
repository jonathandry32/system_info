use examen48h_base;

create table genre(
    idGenre int auto_increment primary key,
    nom varchar(15)
);
insert into genre(nom) values('Homme');
insert into genre(nom) values('Femme');

create table utilisateur(
	idUtilisateur int auto_increment primary key,
	email varchar(50),
    passwrd varchar(20),
	username varchar(20),
    idGenre int,
	numero varchar(20),
	adresse varchar(60),
    dtn Date,
	isAdmin int,
	foreign key (idGenre) references genre(idGenre)
);

-- admin 1 oui 0 non
insert into utilisateur(email,passwrd,username,idGenre,numero,adresse,isAdmin) values ('Admin@admin.net','root','Administrateur',1,'+261 20 22 456 12','Local',1);
insert into utilisateur(email,passwrd,username,idGenre,numero,adresse,isAdmin) values ('lol@bot.io','lol','Bot',2,'+261 34 52 558 91','Lot Iv 7 Ivato',0);
insert into utilisateur(email,passwrd,username,idGenre,numero,adresse,isAdmin) values ('jonathan@gmail.com','jonathan','Jonathandry32',1,'+261 33 125 78','Lot II C 1AC Manjakaray',0);
insert into utilisateur(email,passwrd,username,idGenre,numero,adresse,isAdmin) values ('koloina@gmail.com','koloina','Koloina06',2,'+261 32 54 789 12','Lot Ter Ambohijanaka',0);
insert into utilisateur(email,passwrd,username,idGenre,numero,adresse,isAdmin) values ('johary@gmail.com','johary','Johary17',1,'+261 34 78 546 12','Lot domaine Ampefiloha',0);

create table detail_utilisateur(
    idUtilisateur int,
    taille double,
    poids double,
    daty Date,
	foreign key (idUtilisateur) references utilisateur(idUtilisateur)
);

create table type_objectif(
    idTypeObjectif int auto_increment primary key,
    nom varchar(50)
);
insert into type_objectif(nom) values('Perdre du poids');
insert into type_objectif(nom) values('Gagner du poids');

create table regime(
    idRegime int auto_increment primary key,
    nom varchar(50),
    duree double,
    prix double
);
insert into regime(nom,duree) values('Startup',7);
insert into regime(nom,duree) values('Basique',14);
insert into regime(nom,duree) values('Rapide',30);

create table unite(
    idUnite int auto_increment primary key,
    nom varchar(50)
);
insert into unite(nom) values('Minutes');
insert into unite(nom) values('Quantites');

create table activite(
    idActivite int auto_increment primary key,
    nom varchar(50),
    quantite double,
    unite int,
	foreign key (unite) references unite(idUnite)
);
insert into activite(nom,quantite,unite) values('Corde a saute',10,1);
insert into activite(nom,quantite,unite) values('Footing',30,1);
insert into activite(nom,quantite,unite) values('Yoga',15,1);
insert into activite(nom,quantite,unite) values('Pompe',50,2);
insert into activite(nom,quantite,unite) values('Abdo',50,2);
insert into activite(nom,quantite,unite) values('Squat',50,2);

create table detail_regime(
    idRegime int,
    idPlat int,
    idActivite int,
	foreign key (idRegime) references regime(idRegime)
);

create table repartition_regime(
    idRegime int,
    idCatPlat int,
    valeur double,
    foreign key (idRegime) references regime(idRegime),
    foreign key (idCatPlat) references cat_plat(idCatPlat)
);

insert into detail_regime(idRegime,idPlat,idActivite) values (1,1,0);
insert into detail_regime(idRegime,idPlat,idActivite) values (1,2,0);
insert into detail_regime(idRegime,idPlat,idActivite) values (1,0,1);
insert into detail_regime(idRegime,idPlat,idActivite) values (1,0,2);
insert into detail_regime(idRegime,idPlat,idActivite) values (1,0,3);

create table type_plat(
    idTypePlat int auto_increment primary key,
    nom varchar(50)
);
insert into type_plat(nom) values ('PetitDej');
insert into type_plat(nom) values ('Dejeuner');
insert into type_plat(nom) values ('Gouter');
insert into type_plat(nom) values ('Diner');

create table cat_plat(
    idCatPlat int auto_increment primary key,
    nom varchar(50)
);

insert into cat_plat(nom) values('Viande');
insert into cat_plat(nom) values('Poisson');
insert into cat_plat(nom) values('Volaille');

create table plat(
    idPlat int auto_increment primary key,
    nom varchar(50),
    idTypePlat int,
    prix double,
    picture varchar(255),
	foreign key (idTypePlat) references type_plat(idTypePlat)
);

insert into plat(nom,idTypePlat,prix) values ('salade',2,12000);
insert into plat(nom,idTypePlat,prix) values ('croissant',1,3000);
insert into plat(nom,idTypePlat,prix) values ('soupe',4,15000);
insert into plat(nom,idTypePlat,prix) values ('brownies',3,6000);

create table detail_plat(
    idPlat int,
    idCatPlat int,
	foreign key (idPlat) references plat(idPlat),
	foreign key (idCatPlat) references cat_plat(idCatPlat)
);

insert into detail_plat(idPlat,idCatPlat) values (1,2);
insert into detail_plat(idPlat,idCatPlat) values (2,1);
insert into detail_plat(idPlat,idCatPlat) values (3,2);
insert into detail_plat(idPlat,idCatPlat) values (4,1);

create table objectif_utilisateur(
    idObjectif int auto_increment primary key,
    type_objectif int,
    minvaleur double,
    maxvaleur double,
    poidsmin double,
    poidsmax double,
    taillemin double,
    taillemax double,
    idRegime int,
	foreign key (idRegime) references regime(idRegime)
);

create table parametre(
    idParametre int auto_increment primary key,
    nom varchar(50)
);

create table detail_parametre(
    idParametre int,
    idActivite int,
    idCatPlat int,
	foreign key (idParametre) references parametre(idParametre)
);

create table parametre_utilisateur(
    idUtilisateur int,
    idParametre int,
	foreign key (idUtilisateur) references utilisateur(idUtilisateur),
	foreign key (idParametre) references parametre(idParametre)
);

create table regime_utilisateur(
    idRegimeUtilisateur int auto_increment primary key,
    idUtilisateur int,
    idRegime int,
    debut Date,
    fin Date,
	foreign key (idUtilisateur) references utilisateur(idUtilisateur)
);

-- 1 oui 11 non
create table code(
    idCode int auto_increment primary key,
    code varchar(10),
    valeur double,
    utilisable int
);

create table validation_code(
    idCode int,
    idUtilisateur int,
    daty date,
	foreign key (idUtilisateur) references utilisateur(idUtilisateur)
);

create table caisse(
    idCaisse int auto_increment primary key,
    idUtilisateur int,
    valeur int,
    types varchar(10),
    daty Date,
	foreign key (idUtilisateur) references utilisateur(idUtilisateur)
);

create table imc(
    idIMC int auto_increment primary key,
    minvaleur double,
    maxvaleur double,
    libelle varchar(50)
);
insert into imc(minvaleur,maxvaleur,libelle) values(0,18.5,'Insuffisance ponderale(maigreur)');
insert into imc(minvaleur,maxvaleur,libelle) values(18.5,25,'Corpulence normale');
insert into imc(minvaleur,maxvaleur,libelle) values(25,30,'Surpoids');
insert into imc(minvaleur,maxvaleur,libelle) values(30,35,'Obesite moderee');
insert into imc(minvaleur,maxvaleur,libelle) values(35,40,'Obesite severe');
insert into imc(minvaleur,maxvaleur,libelle) values(40,100,'Obesite morbide ou massive');
