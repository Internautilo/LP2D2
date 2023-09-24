create database Projeto_Renato;

use Projeto_Renato;

create table users (
    id int auto_increment primary key,
    name varchar(255),
    email varchar(255),
    pwdHash varchar(255)
);

create table clients (
    client_id int auto_increment primary key,
    user_id int,
    name varchar(255),
    email varchar(255),
    contact varchar(255),
    plan enum('free', 'pro', 'enterprise'),
    foreign key (user_id) references users(id)
);