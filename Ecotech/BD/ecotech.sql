CREATE DATABASE Ecotech;
USE Ecotech;

CREATE TABLE Usuario(
	id_usuario INT NOT NULL AUTO_INCREMENT,
    nome_usuario VARCHAR(100) NOT NULL,
    email_usuario VARCHAR(120) NOT NULL,
    senha_usuario VARCHAR(80) NOT NULL,
    UNIQUE(email_usuario),
    PRIMARY KEY(id_usuario)
);

CREATE TABLE Dispositivo(
	id_dispositivo INT NOT NULL AUTO_INCREMENT,
    nome_dispositivo VARCHAR(50) NOT NULL,
    id_usuario INT DEFAULT NULL,
    PRIMARY KEY(id_dispositivo),
    FOREIGN KEY(id_usuario) REFERENCES Usuario(id_usuario)
);


CREATE TABLE Leitura(
	id_leitura INT NOT NULL AUTO_INCREMENT,
    temperatura FLOAT NOT NULL,
    umidade FLOAT NOT NULL,
    nivel_agua INT NOT NULL,
    umidade_solo INT NOT NULL,
    data_coleta TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    id_dispositivo INT NOT NULL,
    PRIMARY KEY(id_leitura),
    FOREIGN KEY(id_dispositivo) REFERENCES Dispositivo(id_dispositivo)
);

CREATE TABLE Token(
	id_token INT NOT NULL AUTO_INCREMENT,
    codigo_token VARCHAR(80) NOT NULL,
    status_token VARCHAR(50) NOT NULL DEFAULT "Ativo",
    data_token TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    id_usuario INT NOT NULL,
    UNIQUE(codigo_token),
    PRIMARY KEY(id_token),
    FOREIGN KEY(id_usuario) REFERENCES Usuario(id_usuario)
);

SELECT * FROM Usuario;
SELECT * FROM Dispositivo;
SELECT * FROM Leitura;
SELECT * FROM Token;
SELECT * FROM Dispositivo WHERE id_usuario IS NULL;
