drop database org;
create database org;
use org;

create table organizacao(
  id int primary key auto_increment,
  name varchar(50) not null,
  cnpj varchar(30) not null,
  ie varchar(30) not null,
  juridicalType varchar(30) not null,
  adress varchar(30) not null,
  obs varchar(50) not null,
  ended varchar(30) not null,
  ended_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
