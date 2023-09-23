create database Projeto_Renato;

use Projeto_Renato;

create table users (
    id int auto_increment primary key,
    name varchar(255),
    email varchar(255),
    pwdHash varchar(255)
);

create table clients (
    id int auto_increment,
    name varchar(255),
    email varchar(255),
    contact varchar(255),
    plan enum('free', 'pro', 'enterprise'),
    foreign key (id) references users(id)
);