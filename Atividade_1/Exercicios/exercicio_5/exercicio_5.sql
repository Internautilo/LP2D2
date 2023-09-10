create database exercicio_5;

use exercicio_5;

create table users (
    id int auto_increment primary key,
    nome varchar(255),
    email varchar(255),
    pwdHash varchar(255)
);