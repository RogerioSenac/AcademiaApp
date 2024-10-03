create database if not exists academia;
use academia;

create table alunos
(
id int auto_increment primary key,
nome varchar(100),
email varchar(100),
telefone varchar(20),
data_nascimento date,
genero enum('Masculino', 'Feminino', 'Outros'),
data_cadastro timestamp default current_timestamp
);

create table professores
(
id int auto_increment primary key,
nome varchar(100),
email varchar(100),
telefone varchar(20),
especialidade varchar(100),
data_contratação timestamp default current_timestamp
);

Create table treinos
(
id int auto_increment primary key,
descricao varchar(255),
aluno_id int,
professor_id int,
data date,
foreign key (aluno_id) references alunos(id),
foreign key (professor_id) references professores(id)
);

select * from alunos;
select * from professores;
select * from treinos;

alter table treinos modify data timestamp default current_timestamp;