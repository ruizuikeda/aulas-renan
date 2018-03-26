# aulas-renan
Ensinando o Renan a programar em php

# Ensinando o que é o README.md
É a página aberta do Github.

# Integrando com o Brackets.
é assim que funciona.

# Criei o inicio do index.
fdasklfdjsaklfsda



# SQL - tabela: usuarios
````
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(512) NOT NULL,
  `sobrenome` varchar(512) NOT NULL,
  `login` varchar(512) NOT NULL,
  `senha` varchar(512) NOT NULL,
  `cpf` varchar(512) NOT NULL,
  `endereco` varchar(512) DEFAULT NULL,
  `celular` varchar(512) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `dataCriacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `animes` (
  `idAnime` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(512) NOT NULL,
  `ano` varchar(512) NOT NULL,
  `autor` varchar(512) NOT NULL,
  `editora` varchar(512) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `dataCriacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idAnime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `animes_ref_genero` (
  `idAnimeRefGenero` int(11) NOT NULL AUTO_INCREMENT,
  `idAnime` int(11) NOT NULL,
  `idGenero` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `dataCriacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idAnimeRefGenero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `genero` (
  `idGenero` int(11) NOT NULL AUTO_INCREMENT,
  `nomeGenero` varchar(512) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `dataCriacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idGenero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




CREATE TABLE IF NOT EXISTS `perguntas` (
  `idPergunta` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL DEFAULT '1',
  `dataCriacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idCriador` int(11) DEFAULT NULL,
  `pergunta` varchar(1024) NOT NULL,
  `respostaCorreta` int(11) NOT NULL,
  PRIMARY KEY (`idPergunta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE IF NOT EXISTS `participantes` (
  `idParticipante` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(512) NOT NULL,
  `setor` varchar(512) NOT NULL,
  `cargo` varchar(512) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `dataCriacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `prova` int(11) DEFAULT NULL,
  PRIMARY KEY (`idParticipante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- Estrutura da tabela `provas_respondidas`
--

CREATE TABLE `provas_respondidas` (
  `idProva` int(11) NOT NULL,
  `nome` varchar(512) NOT NULL,
  `respostasCorretas` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `dataCriacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `provas_respondidas`
--
ALTER TABLE `provas_respondidas`
  ADD PRIMARY KEY (`idProva`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `provas_respondidas`
--
ALTER TABLE `provas_respondidas`
  MODIFY `idProva` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

````