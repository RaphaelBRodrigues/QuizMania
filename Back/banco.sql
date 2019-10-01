
SET SQL_SAFE_UPDATES = 0;
create database quizmania DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
use quizmania;
CREATE TABLE usuario (
    usuario_ID INT PRIMARY KEY auto_increment,
    usuario_Nome VARCHAR(40) NOT NULL UNIQUE,
    usuario_Senha VARCHAR(40) NOT NULL,
    usuario_Turma VARCHAR(40),
    usuario_Rank INT(3)  DEFAULT 0,
    usuario_pontBio INT(2) DEFAULT 0,
    usuario_pontGeo INT(2) DEFAULT 0
);
select * from usuario;


create table Biologia(
ID int primary key auto_increment,
pergunta varchar(1500),
r1 varchar(400),
r2 varchar(400),
r3 varchar(400),
r4 varchar(400),
certo varchar(200)
)ENGINE=MyISAM AUTO_INCREMENT=214 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




create table Geografia(
ID int primary key auto_increment,
pergunta varchar(1000),
r1 varchar(400),
r2 varchar(400),
r3 varchar(400),
r4 varchar(400),
certo varchar(200)
)ENGINE=MyISAM AUTO_INCREMENT=214 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


