CREATE DATABASE libsys;

USE libsys;

CREATE TABLE Cliente
(cod_cliente integer NOT NULL AUTO_INCREMENT,
nome_cliente text NOT NULL,
cpf_cliente char(11) NOT NULL,
dt_nasc_cliente date NOT NULL,
primary key (cod_cliente),
unique key (cpf_cliente)
);

CREATE TABLE Usuario(
cod_usuario integer NOT NULL AUTO_INCREMENT,
email text NOT NULL,
username text NOT NULL,
senha text NOT NULL,
primary key (cod_usuario)
);

CREATE TABLE Funcionario
(cod_func integer NOT NULL AUTO_INCREMENT,
cod_usuario integer NOT NULL,
mat_func integer NOT NULL,
nome_func text NOT NULL,
cpf_func char(11) NOT NULL,
dt_nasc_func date NOT NULL,
dt_admissao date NOT NULL,
salario varchar(10),
primary key (cod_func),
foreign key (cod_usuario) references
Usuario(cod_usuario),
unique key (cpf_func)
);

CREATE TABLE Administrador
(id_log integer NOT NULL AUTO_INCREMENT,
cod_usuario integer NOT NULL,
dt_log datetime NOT NULL,
operacao text NOT NULL,
cod_cliente integer NOT NULL,
primary key(id_log),
foreign key (cod_usuario) references
Usuario(cod_usuario),
foreign key (cod_cliente) references
Cliente(cod_cliente)
);

CREATE TABLE Livro
(cod_livro integer NOT NULL AUTO_INCREMENT,
nome_livro text NOT NULL,
autor_livro text NOT NULL,
editora_livro text NOT NULL,
quantidade_livro integer NOT NULL,
cod_usuario integer NOT NULL,
primary key (cod_livro),
foreign key (cod_usuario) references
Usuario(cod_usuario)
);

CREATE TABLE Emprestimo(
cod_emprestimo integer NOT NULL AUTO_INCREMENT,
cod_cliente integer NOT NULL,
dt_retirada date NOT NULL,
dt_entrega date NOT NULL,
primary key (cod_emprestimo),
foreign key (cod_cliente) references
Cliente(cod_cliente)
);

CREATE TABLE Emprestimo_Livro(
cod_emp_livro integer NOT NULL AUTO_INCREMENT,
cod_livro integer NOT NULL,
cod_emprestimo integer NOT NULL,
primary key (cod_emp_livro),
foreign key (cod_livro) references
Livro (cod_livro),
foreign key (cod_emprestimo) references
Emprestimo(cod_emprestimo)
);

CREATE TABLE telefone_func 
(cod_tel_func integer NOT NULL AUTO_INCREMENT,
cod_usuario integer NOT NULL,
tel_func_resid varchar(20) NOT NULL,
tel_func_cel varchar(20) NOT NULL,
primary key (cod_tel_func),
foreign key (cod_usuario) references
Usuario (cod_usuario)
);

CREATE TABLE telefone_cliente (
cod_tel_cliente integer NOT NULL,
cod_cliente integer NOT NULL,
tel_cliente_resid varchar(20) NOT NULL,
tel_cliente_cel varchar(20) NOT NULL,
primary key (cod_tel_cliente),
foreign key (cod_cliente) references
Cliente (cod_cliente)
);
