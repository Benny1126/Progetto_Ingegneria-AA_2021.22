drop database yii2basic;
create database yii2basic;
use yii2basic;

create table Caregiver(
cf varchar(17) primary key ,
nome varchar(255),
cognome varchar(255),
email varchar(255),
ruolo int, 
pass char (255),
authKey varchar(255),
accessToken varchar(255)
);

create table Pazienti(
username varchar(255),
email varchar(255),
nome varchar(255),
cognome varchar(255),
cf varchar(17) primary key,
ruolo int, 
pass char (255),
authKey varchar(255),
accessToken varchar(255),
diagnosi varchar(1000),
cf_care varchar(17),
premi_bronzo int,
premi_argento int,
premi_oro int,
premi_platino int,
foto varchar(50),
FOREIGN KEY (cf_care) REFERENCES Caregiver (cf) 
);


create table logopedisti(
cf varchar(17) primary key,
nome varchar(255),
cognome varchar(255),
email varchar(255),
ruolo int,  
pass char (255),
authKey varchar(255),
accessToken varchar(255)
);

create table utenti(
username varchar(255),
email varchar(255),
cf varchar(17) primary key,
nome varchar(255),
cognome varchar(255),
ruolo int, 
pass char (255),
authKey varchar(255),
accessToken varchar(255)
);


create table terapia(
id_terapia int auto_increment primary key ,
nome varchar(255),
cf_paziente varchar(17),
FOREIGN KEY (cf_paziente) REFERENCES Pazienti (cf)
);

create table esercizio(
id_esercizio varchar(255) primary key,
nome varchar(255)
);

create table esercizio_terapia(
codice_esercizio varchar(255),
codice_terapia int,
valutazione int,
attivita_svolta int,
risposta1 varchar(50),
risposta2 varchar(50),
risposta3 varchar(50),
risposta4 varchar(50),
risposta5 varchar(50),
risposta6 varchar(50),
risposta7 varchar(50),
risposta8 varchar(50),
primary key(codice_esercizio,codice_terapia),
FOREIGN KEY (codice_terapia) REFERENCES terapia (id_terapia),
FOREIGN KEY (codice_esercizio) REFERENCES esercizio (id_esercizio)
);

create table prenotazioni(
id int auto_increment primary key ,
titolo varchar(255),
descrizione varchar(500),
data_prenotazione date,
cf_c varchar(17), 
FOREIGN KEY (cf_c) REFERENCES caregiver (cf)
);




select * from utenti;
select * from Caregiver;
select * from logopedisti;
select * from pazienti;
select * from terapia;
select * from esercizio;
select * from esercizio_terapia;
select * from prenotazioni;
