create database proyect;
create table ´voluntario´(
	´voluntario_id´ int unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
	´nombre´ varchar(30) NOT NULL,
    ´apellido´ varchar(30)NOT NULL
)ENGINE= InnoDB default CHARSET = utf8;

create table ´donante´(
	´donante_id´ int unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
	´nombre´ varchar(30) NOT NULL,
    ´apellido´ varchar(30)NOT NULL
)ENGINE= InnoDB default CHARSET = utf8;