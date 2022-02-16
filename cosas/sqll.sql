create database gps;
use gps;


create table crear(
folio_gps int auto_increment,
nombre varchar(40),
email varchar(50),
celular int(10),
mensaje varchar(80),
compan varchar (15),
constraint primary key(folio_gps)
);
 
 insert into crear  values (null,'dan','da98325658',1234567890,'buenasss','unecom');


