DROP DATABASE IF EXISTS projetoPW3;

/* Criar o Banco*/
CREATE DATABASE projetoPW3;

USE projetoPW3;
create table TB_Usuarios(
idUsuario int not null primary key auto_increment,
userName varchar(50) not null,
email varchar(100) not null,
senha varchar (50) not null,
tipo varchar(50),
ativo bool
);

insert into TB_Usuarios values (1,'Leonardo','leonardo@teste.com','123','adm',1);
insert into TB_Usuarios values (2,'Doria','doria@teste.com','123','user',1);

CREATE TABLE IF NOT EXISTS produtos (
  id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nome varchar(255) NOT NULL,
  preco varchar(50) NOT NULL,
  peso varchar(20) NOT NULL
) ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO produtos (id, nome, preco, peso) VALUES
(1, 'LARANJA', '2,99', 1),
(2, 'MANGA', '5,99', 2),
(5, 'MACA', '4,99', 1),
(6, 'ABACAXI', '3,99', 1);
select * from produtos;
