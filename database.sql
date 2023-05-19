CREATE DATABASE ATIVIDADE;

USE ATIVIDADE;

CREATE TABLE ALUNOS(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(200) NOT NULL,
    IDADE INT(3) NOT NULL
);

CREATE TABLE CURSOS(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(200) NOT NULL
);

CREATE TABLE MATRICULAS(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    ID_ALUNO INT,
    ID_CURSO INT,
    FOREIGN KEY(ID_ALUNO) REFERENCES ALUNOS(ID),
    FOREIGN KEY(ID_CURSO) REFERENCES CURSOS(ID)
);