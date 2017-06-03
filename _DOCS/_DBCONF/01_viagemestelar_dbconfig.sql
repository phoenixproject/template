CREATE SCHEMA IF NOT EXISTS `viagemestelar`;
USE `viagemestelar`;

CREATE TABLE IF NOT EXISTS  Tipo_Usuario (
	tp_usuario          integer not null AUTO_INCREMENT,
	ds_tp_usuario       varchar(30) not null,
	PRIMARY KEY(tp_usuario)
);

CREATE TABLE IF NOT EXISTS  Tipo_Nave (
	tp_nave		        integer not null AUTO_INCREMENT,
	ds_tp_nave          varchar(30) not null,
	PRIMARY KEY(tp_nave)
);

CREATE TABLE IF NOT EXISTS  Tipo_Arma (
	tp_arma	            integer not null AUTO_INCREMENT,
	ds_tp_arma	        varchar(30) not null,
	PRIMARY KEY(tp_arma)
);

CREATE TABLE IF NOT EXISTS  Tipo_Atividade (
	tp_atividade        integer not null AUTO_INCREMENT,
	ds_tp_atividade     varchar(30) not null,
	PRIMARY KEY(tp_atividade)
);

CREATE TABLE IF NOT EXISTS  Configuracao (
	cd_configuracao     integer not null AUTO_INCREMENT,
	ds_configuracao     varchar(50) not null,
	nivel_dificuldade 	integer not null,
	PRIMARY KEY(cd_configuracao)
);

CREATE TABLE IF NOT EXISTS Combinacao (
    cd_combinacao       integer not null AUTO_INCREMENT,
    ds_combianacao      varchar(30) not null,
    tp_nave             integer not null,
	tp_arma             integer not null,
	PRIMARY KEY(cd_combinacao)
);

CREATE TABLE IF NOT EXISTS Atividade (
    cd_atividade        integer not null AUTO_INCREMENT,
    dt_atividade        datetime not null,
	cd_usuario			integer not null,
    tp_atividade        integer not null,
	PRIMARY KEY(cd_atividade)
);

CREATE TABLE IF NOT EXISTS Partida (
    cd_partida	        integer not null AUTO_INCREMENT,
	pontos				integer not null,
	cd_combinacao		integer not null,
	cd_atividade		integer not null,    
	PRIMARY KEY(cd_partida)
);

CREATE TABLE IF NOT EXISTS Usuario (
    cd_usuario          integer not null AUTO_INCREMENT,
    tp_usuario          integer not null,
	email               varchar(70) not null,
	password            varchar(30) not null,
	dt_criacao          date not null, 
	PRIMARY KEY(cd_usuario)
);

ALTER TABLE Combinacao ADD CONSTRAINT FK_Combinacao_Tipo_Nave_tp_nave FOREIGN KEY (tp_nave) REFERENCES Tipo_Nave(tp_nave);
ALTER TABLE Combinacao ADD CONSTRAINT FK_Combinacao_Tipo_Arma_tp_arma FOREIGN KEY (tp_arma) REFERENCES Tipo_Arma(tp_arma);

ALTER TABLE Usuario ADD CONSTRAINT FK_Usuario_Tipo_Usuario_tp_usuario FOREIGN KEY (tp_usuario) REFERENCES Tipo_Usuario(tp_usuario);

ALTER TABLE Atividade ADD CONSTRAINT FK_Atividade_Tipo_Atividade_tp_atividade FOREIGN KEY (tp_atividade) REFERENCES Tipo_Atividade(tp_atividade);
ALTER TABLE Atividade ADD CONSTRAINT FK_Atividade_Usuario_cd_usuario FOREIGN KEY (cd_usuario) REFERENCES Usuario(cd_usuario);

ALTER TABLE Partida ADD CONSTRAINT FK_Partida_Atividade_cd_atividade FOREIGN KEY (cd_atividade) REFERENCES Atividade(cd_atividade);
ALTER TABLE Partida ADD CONSTRAINT FK_Partida_Combinacao_cd_combinacao FOREIGN KEY (cd_combinacao) REFERENCES Combinacao(cd_combinacao);
ALTER TABLE Partida ADD CONSTRAINT FK_Partida_Configuracao_cd_configuracao FOREIGN KEY (cd_configuracao) REFERENCES Configuracao(cd_configuracao);