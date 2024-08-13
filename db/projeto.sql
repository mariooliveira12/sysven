create database sysven;

use sysven;

create table usuario(
nome varchar(60),
email varchar(60),
senha varchar(20),
primary key(email));

select * from usuario;

truncate table usuario;

drop table usuario;