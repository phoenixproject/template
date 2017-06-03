CREATE SCHEMA IF NOT EXISTS `viagemestelar`;
USE `viagemestelar`;

CREATE TABLE IF NOT EXISTS  Tipo_Usuario (
	tp_usuario          integer not null AUTO_INCREMENT,
	ds_tp_usuario       varchar(30) not null,
	PRIMARY KEY(tp_usuario)
);

CREATE TABLE IF NOT EXISTS Secretaria (
    cd_sec              integer not null AUTO_INCREMENT,
    ds_sec              varchar(80) not null,
    sigla               varchar(15),
	PRIMARY KEY(cd_sec)
);

CREATE TABLE IF NOT EXISTS Setor (
    cd_setor            integer not null AUTO_INCREMENT,
    cd_sec              integer not null,
    ds_setor            varchar(80) not null,
	PRIMARY KEY(cd_setor)
);

CREATE TABLE IF NOT EXISTS Usuario (
    cd_usuario          integer not null AUTO_INCREMENT,
    tp_usuario          integer not null,
    cd_setor            integer not null,
    us_mat              integer not null,
    us_nome             varchar(50) not null,
    senha               varchar(80) not null,
    dt_expira           date not null,    
    email               varchar(80) not null,
	PRIMARY KEY(cd_usuario)
);

CREATE TABLE IF NOT EXISTS Unidade (
    cd_unidade          integer not null AUTO_INCREMENT,
    ds_unidade          varchar(30) not null,
	PRIMARY KEY(cd_unidade)
);

CREATE TABLE IF NOT EXISTS Pagamento (
    cd_pagamento        integer not null AUTO_INCREMENT,
    cd_usuario          integer not null,
    cd_unidade          integer not null,
    processo_num        integer not null,
    processo_ano        integer not null,
    val_total           numeric(16,4) not null,
    dt_registro         date not null,
	PRIMARY KEY(cd_pagamento)
);

CREATE TABLE IF NOT EXISTS Conta (
    cd_conta            integer not null AUTO_INCREMENT,
    cd_infconta         integer not null,
    dt_venc             date not null,
    vl_conta            numeric(16,4) not null,
    encargo             numeric(16,4),
    consumo             numeric(16,4),
    ref_mes             integer not null,
    ref_ano             integer not null,
	PRIMARY KEY(cd_conta)
);

CREATE TABLE IF NOT EXISTS Item_Pgto (
    cd_itempgto         integer not null AUTO_INCREMENT,
    cd_pagamento        integer not null,
    cd_conta            integer not null,    
	PRIMARY KEY(cd_itempgto)
);

CREATE TABLE IF NOT EXISTS Unidade_Medida (
    cd_unimedida        integer not null AUTO_INCREMENT,
    ds_unimedida        varchar(15) not null,
	PRIMARY KEY(cd_unimedida)
);

CREATE TABLE IF NOT EXISTS Categoria (
    cd_categoria        integer not null AUTO_INCREMENT,
    ds_categoria        varchar(80) not null,
	PRIMARY KEY(cd_categoria)
);

CREATE TABLE IF NOT EXISTS Inf_Conta (
    cd_infconta         integer not null AUTO_INCREMENT,
    cd_categoria        integer not null,
    cd_setor            integer not null,
    cd_unimedida        integer not null,
    identificacao       varchar(30) not null,
	PRIMARY KEY(cd_infconta)
);

CREATE TABLE IF NOT EXISTS Celular_Tipo (
    cd_celulartipo      integer not null AUTO_INCREMENT,
    cd_infconta         integer not null,
    prop_mat            integer not null,
    prop_tel            varchar(80) not null,
    vl_limite           numeric(16,4) not null,
	PRIMARY KEY(cd_celulartipo)
);


ALTER TABLE Atividade ADD CONSTRAINT FK_Setor_Secretaria_cd_sec FOREIGN KEY (cd_sec) REFERENCES Secretaria(cd_sec);

ALTER TABLE Usuario ADD CONSTRAINT FK_Usuario_Tipo_Usuario_tp_usuario FOREIGN KEY (tp_usuario) REFERENCES Tipo_Usuario(tp_usuario);
ALTER TABLE Usuario ADD CONSTRAINT FK_Usuario_Setor_cd_setor FOREIGN KEY (cd_setor) REFERENCES Setor(cd_setor);

ALTER TABLE Pagamento ADD CONSTRAINT FK_Pagamento_Usuario_cd_usuario FOREIGN KEY (cd_usuario) REFERENCES Usuario(cd_usuario);
ALTER TABLE Pagamento ADD CONSTRAINT FK_Pagamento_Unidade_cd_unidade FOREIGN KEY (cd_unidade) REFERENCES Unidade(cd_unidade);

ALTER TABLE Item_Pgto ADD CONSTRAINT FK_Item_Pgto_Pagamento_cd_pagamento FOREIGN KEY (cd_pagamento) REFERENCES Pagamento(cd_pagamento);
ALTER TABLE Item_Pgto ADD CONSTRAINT FK_Item_Pgto_Conta_cd_conta FOREIGN KEY (cd_conta) REFERENCES Conta(cd_conta);

ALTER TABLE Inf_Conta ADD CONSTRAINT FK_Inf_Conta_Categoria_cd_categoria FOREIGN KEY (cd_categoria) REFERENCES Categoria(cd_categoria);
ALTER TABLE Inf_Conta ADD CONSTRAINT FK_Inf_Conta_Setor_cd_setor FOREIGN KEY (cd_setor) REFERENCES Setor(cd_setor);
ALTER TABLE Inf_Conta ADD CONSTRAINT FK_Inf_Conta_Unidade_Medida_cd_unimedida FOREIGN KEY (cd_unimedida) REFERENCES Unidade_Medida(cd_unimedida);

ALTER TABLE Celular_Tipo ADD CONSTRAINT FK_Celular_Tipo_Inf_Conta_cd_infconta FOREIGN KEY (cd_infconta) REFERENCES Inf_Conta(cd_infconta);