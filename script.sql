drop database system_info;
create database system_info;
use system_info;

create table genre(
    idGenre int auto_increment primary_key,
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
insert into utilisateur(email,passwrd,username,numero,adresse,isAdmin) values ('Admin@admin.net','root','Administrateur','+261 20 22 456 12','Local',1);
insert into utilisateur(email,passwrd,username,numero,adresse,isAdmin) values ('lol@bot.io','lol','Bot','+261 34 52 558 91','Lot Iv 7 Ivato',0);
insert into utilisateur(email,passwrd,username,numero,adresse,isAdmin) values ('jonathan@gmail.com','jonathan','Jonathandry32','+261 33 125 78','Lot II C 1AC Manjakaray',0);
insert into utilisateur(email,passwrd,username,numero,adresse,isAdmin) values ('koloina@gmail.com','koloina','Koloina06','+261 32 54 789 12','Lot Ter Ambohijanaka',0);
insert into utilisateur(email,passwrd,username,numero,adresse,isAdmin) values ('johary@gmail.com','johary','Johary17','+261 34 78 546 12','Lot domaine Ampefiloha',0);

create table detail_utilisateur(
    idUtilisateur int,
    taille double,
    poids double,
    daty Date,
	foreign key (idUtilisateur) references utilisateur(idUtilisateur)
);

create table objet (
	idobjet int auto_increment primary key,
	idcategorie int,
	name varchar(30),
	proprietaire int,
	prix double,
	description varchar(50),
	foreign key (idcategorie) references categorie(idcategorie),
	foreign key (proprietaire) references membre(idmembre)
);
