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
insert into utilisateur(email,passwrd,username,idGenre,numero,adresse,dtn,isAdmin) values ('Admin@admin.net','root','Administrateur',1,'+261 20 22 456 12','Local','2000-10-10',1);

create table detail_utilisateur(
    idUtilisateur int,
    taille double,
    poids double,
    daty Date,
	foreign key (idUtilisateur) references utilisateur(idUtilisateur)
);
insert into detail_utilisateur values(1,170,60,now());

create table type_objectif(
    idTypeObjectif int auto_increment primary key,
    nom varchar(50)
);
insert into type_objectif(nom) values('Perdre du poids');
insert into type_objectif(nom) values('Gagner du poids');
insert into type_objectif(nom) values('Atteindre son IMC');

create table regime(
    idRegime int auto_increment primary key,
    nom varchar(50),
    duree double,
    prix double
);

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

create table detail_plat(
    idPlat int,
    idCatPlat int,
	foreign key (idPlat) references plat(idPlat),
	foreign key (idCatPlat) references cat_plat(idCatPlat)
);

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

create table gold(
    idGold int auto_increment primary key,
    remise double,
    prix double
);

insert into gold(remise,prix) values (15,200000);

create table utilisateur_gold(
    idGold int,
    idUtilisateur int,
    foreign key(idGold) references gold(idGold),
    foreign key (idUtilisateur) references utilisateur(idUtilisateur)
);

create table repartition_regime(
    idRegime int,
    idCatPlat int,
    valeur double,
    foreign key (idRegime) references regime(idRegime),
    foreign key (idCatPlat) references cat_plat(idCatPlat)
);