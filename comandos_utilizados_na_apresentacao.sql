-- CÓDIGOS DE MYSQL UTILIZADOS NA APRESENTAÇÃO POR MEIO DO SGBD PHPMYADMIN
CREATE DATABASE ufrrjfit; -- CRIAÇÃO DO BANCO DE DADOS ufrrjfit

CREATE TABLE instructors (
    id int primary key auto_increment,
    name varchar(100) not null, -- A CHAVE id É A CHAVE PRIMÁRIA DA TABELA instructors
    cpf varchar(14) not null,
    birthdate date not null,
    sex varchar(1) not null,
    phone varchar(15) not null,
    address text not null
); -- CRIAÇÃO DA TABELA instructors, REFERENTE AOS INSTRUTORES QUE SERÃO CADASTRADOS NA ACADEMIA

CREATE TABLE students (
    id int primary key auto_increment, -- A CHAVE id É A CHAVE PRIMÁRIA DA TABELA students
    name varchar(100) not null,
    cpf varchar(14) not null,
    birthdate date not null,
    sex varchar(1) not null,
    phone varchar(15) not null,
    address text not null,
    instructor_id int
); -- CRIAÇÃO DA TABELA students, REFERENTE AOS ALUNOS QUE SERÃO CADASTRADOS NA ACADEMIA

ALTER TABLE students
ADD CONSTRAINT fk_StuInst FOREIGN KEY (instructor_id) REFERENCES instructor (id); -- A CHAVE instructor_id É UMA CHAVE ESTRANGEIRA QUE FAZ REFERÊNCIA AO CAMPO id DE UM INSTRUTOR OU NENHUM

INSERT INTO instructors
    (name, cpf, birthdate, sex, phone, address)
VALUES (
    'Lord Maltar',
    '98765432105',
    '1985-08-11',
    'M',
    '21912345678',
    'Rio de Janeiro'
); -- COMANDO PARA INSERÇÃO DE UM NOVO INSTRUTOR NA ACADEMIA

INSERT INTO students
    (name, cpf, birthdate, sex, phone, address, instructor_id)
VALUES (
    'Amanda da Silva Rodrigues',
    '123.456.789-01',
    '1999-11-28',
    'F',
    '21987654321',
    'Rio de Janeiro',
    1
); -- COMANDO PARA INSERÇÃO DE UM NOVO ALUNO NA ACADEMIA

DELETE FROM students WHERE 1 -- COMANDO QUE DELETA ALUNO NA ACADEMIA (NO CASO, O ALUNO COM id IGUAL A 1)

DELETE FROM instructors WHERE 1 -- COMANDO QUE DELETA INSTRUTOR NA ACADEMIA (NO CASO, O INSTRUTOR COM id IGUAL A 1)