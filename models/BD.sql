mysql -u root -p

DROP DATABASE IF EXISTS registro_conductor;
CREATE DATABASE registro_conductor;

USE registro_conductor;


create table usuario(
id_user int unsigned not null auto_increment primary key,
nombre varchar(15) not null,
apellido varchar(15) not null,
nombre_usuario varchar(15) not null,
password varchar(20) not null);

create table conductor(
id_conductor int unsigned not null auto_increment primary key,
primer_nombre varchar(15)not null,
segundo_nombre varchar(15) null,
apellido_paterno varchar (15) not null,
apellido_materno varchar (15) null,
fecha_nacimiento date not null,
numero_documento varchar (15) not null,
telefono int not null,
direccion varchar (20) not null,
referencia_direccion varchar (50) null,
tipo_sangre varchar(3) not null,
curso varchar(10) not  null,
turno varchar (20) not null,
poto varchar (60) not null);

INSERT INTO usuario(nombre,apellido,nombre_usuario,password) VALUES ("user","user","admin","admin");

INSERT INTO conductor(primer_nombre,segundo_nombre,apellido_paterno,apellido_materno,numero_documento) VALUES("Juan","Jose","Choque","Mamani","LP 1723469"),
("Juan1","Jose","Choque","Mamani","LP 173423469"),
("Juan2","Jose","Choque","Mamani","LP 134649"),
("Juan3","Jose","Choque","Mamani","LP 1723469"),
("Juan4","Jose","Choque","Mamani","LP 1723469"),
("Juan5","Jose","Choque","Mamani","LP 172332469"),
("Juan6","Jose","Choque","Mamani","LP 17233469"),
("Juan7","Jose","Choque","Mamani","LP 1723469"),
("Juan8","Jose","Choque","Mamani","LP 17232343469"),
("Juan9","Jose","Choque","Mamani","LP 1723469"),
("Juan10","Jose","Choque","Mamani","LP 1723469"),
("Juan11","Jose","Choque","Mamani","LP 1723469"),
("Juan12","Jose","Choque","Mamani","LP 1723469"),
("Juan13","Jose","Choque","Mamani","LP 1117234269"),
("Juan14","Jose","Choque","Mamani","LP 17123423469"),
("Juan15","Jose","Choque","Mamani","LP 17234223469"),
("Juan16","Jose","Choque","Mamani","LP 172323469"),
("Juan17","Jose","Choque","Mamani","LP 14234723469"),
("Juan18","Jose","Choque","Mamani","LP 1234723469"),
("Juan19","Jose","Choque","Mamani","LP 17223433469"),
("Juan20","Jose","Choque","Mamani","LP 2342343"),
("Juan22","Jose","Choque","Mamani","LP 17123469"),
("Juan23","Jose","Choque","Mamani","LP 1723323469"),
("Juan25","Jose","Choque","Mamani","LP 172433469"),
("Juan26","Jose","Choque","Mamani","LP 1722343469");

