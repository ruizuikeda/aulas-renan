CREATE TABLE IF NOT EXISTS `Projeto` (
    `nroProj` int(255) NOT NULL,
    `nome` varchar(512) NOT NULL,
    `nroDep` int(255) NOT NULL,
    `custo` int(255) NOT NULL,
    PRIMARY KEY (`nroProj`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `Projeto`
--

INSERT INTO `Projeto` (`nroProj`, `nome`, `nroDep`, `custo`) VALUES
(1, 'Novas fontes de energia', 3, 300000),
(2, 'RaioX', 1, 12000),
(3, 'Melhorias', 5, 25000),
(4, 'ABC', 3, 150000),
(5, 'Otimizacao', 2, 17000),
(6, 'Melhorias no Trabalho', 1, 9000);


______________________________________________________________________



CREATE TABLE IF NOT EXISTS `Departamento` (
    `nro` int(254) NOT NULL,
    `nome` varchar(512) NOT NULL,
    `telefone` int(254) NOT NULL,
    `cpfGer` int(254) NOT NULL,
    PRIMARY KEY (`nro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `Departamento`
--

INSERT INTO `Departamento` (`nro`, `nome`, `telefone`, `cpfGer`) VALUES
(1, 'Administracao', 98765432, 876543210),
(2, 'Estoque', 96543210, 345678901),
(3, 'Pesquisa', 56785678, 234321123),
(4, 'Manutencao', 45677654, 987456432),
(5, 'Producao', 5678901, 765432123);


______________________________________________________________________

CREATE TABLE IF NOT EXISTS `Dependente` (
    `nome` varchar(512) NOT NULL,
    `cpfEmp` int(30) NOT NULL,
    `dataNasc` datetime NOT NULL,
    `sexo` varchar(512) NOT NULL,
    `relacao` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `Dependente`
--

INSERT INTO `Dependente` (`nome`, `cpfEmp`, `dataNasc`, `sexo`, `relacao`) VALUES
('Ana Claudia', 654321098, '2001-04-30 00:00:00', 'F', 'filho'),
('Augusto Pena ', 987654321, '1996-01-31 00:00:00', 'M', 'neto'),
('Carlos Eduardo', 345678901, '1989-12-17 00:00:00', 'M', 'filho'),
('Ives', 876543345, '2005-01-20 00:00:00', 'F', 'filho'),
('Jose Augusto', 876543345, '1998-08-09 00:00:00', 'M', 'filho'),
('Julia Maria ', 654321098, '1993-05-16 00:00:00', 'F', 'filho');

______________________________________________________________________

CREATE TABLE IF NOT EXISTS `Empregado` (
    `cpf` int(30) NOT NULL,
    `nome` varchar(512) NOT NULL,
    `telefone` int(30) DEFAULT NULL,
    `sexo` varchar(155) NOT NULL,
    `nroDep` int(11) NOT NULL,
    PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `Empregado`
--

INSERT INTO `Empregado` (`cpf`, `nome`, `telefone`, `sexo`, `nroDep`) VALUES
(123456789, 'José Carlos', NULL, 'M', 3),
(234321123, 'Paulo Ramnos', 56789000, 'M', 3),
(345678901, 'Flavia Alves', 23456789, 'F', 2),
(654321098, 'Antonio Carlos', 65431234, 'M', 5),
(765432123, 'Erico Faria', 23455432, 'M', 5),
(876543210, 'Lucia Helen', 65432178, 'F', 1),
(876543345, 'Mariana Souza', 67899876, 'F', 1),
(987456432, 'Gabriela Novaes', 50987654, 'F', 4),
(987654321, 'Cleber Silva', 65432101, 'M', 1);




