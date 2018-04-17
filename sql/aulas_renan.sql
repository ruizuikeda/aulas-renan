-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 23/03/2018 às 15:56
-- Versão do servidor: 5.7.21-0ubuntu0.16.04.1
-- Versão do PHP: 5.6.34-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aulas_renan`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alternativas`
--

CREATE TABLE `alternativas` (
  `idAlternativa` int(11) NOT NULL,
  `textoAlternativa` varchar(512) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `dataCriacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `alternativas`
--

INSERT INTO `alternativas` (`idAlternativa`, `textoAlternativa`, `status`, `dataCriacao`) VALUES
(1, '2 cm', 1, '2018-03-23 18:04:51'),
(2, '5 cm', 1, '2018-03-23 18:04:51'),
(3, 'ele nao tem', 1, '2018-03-23 18:04:51'),
(4, '42', 1, '2018-03-23 18:04:51'),
(5, '24', 1, '2018-03-23 18:04:51'),
(6, '35', 1, '2018-03-23 18:04:51'),
(7, 'sim', 1, '2018-03-23 18:04:51'),
(8, 'nao', 1, '2018-03-23 18:04:51'),
(9, 'eh claro que eh super legal', 1, '2018-03-23 18:04:51');

-- --------------------------------------------------------

--
-- Estrutura para tabela `animes`
--

CREATE TABLE `animes` (
  `idAnime` int(11) NOT NULL,
  `titulo` varchar(512) NOT NULL,
  `ano` varchar(512) NOT NULL,
  `autor` varchar(512) NOT NULL,
  `editora` varchar(512) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `dataCriacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `animes`
--

INSERT INTO `animes` (`idAnime`, `titulo`, `ano`, `autor`, `editora`, `status`, `dataCriacao`) VALUES
(2, 'CDZ', '1980', 'ikeda', 'Toei Animation', 1, '2018-03-22 14:01:23'),
(3, 'One Piece', '1990', 'fjdlksa', 'Graphis Studios Animation', 1, '2018-03-22 14:02:36'),
(4, 'Shokugeki no Soma', '2017', 'Musashi', 'Tezuca Productions', 1, '2018-03-22 14:03:42'),
(5, 'tes', 'asdf', 'asdf', 'Toei Animation', 1, '2018-03-22 14:59:15');

-- --------------------------------------------------------

--
-- Estrutura para tabela `animes_ref_genero`
--

CREATE TABLE `animes_ref_genero` (
  `idAnimeRefGenero` int(11) NOT NULL,
  `idAnime` int(11) NOT NULL,
  `idGenero` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `dataCriacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `animes_ref_genero`
--

INSERT INTO `animes_ref_genero` (`idAnimeRefGenero`, `idAnime`, `idGenero`, `status`, `dataCriacao`) VALUES
(1, 2, 1, 1, '2018-03-22 14:01:23'),
(2, 2, 2, 1, '2018-03-22 14:01:23'),
(3, 3, 1, 1, '2018-03-22 14:02:36'),
(4, 3, 2, 1, '2018-03-22 14:02:36'),
(5, 3, 3, 1, '2018-03-22 14:02:36'),
(6, 3, 4, 1, '2018-03-22 14:02:36'),
(7, 3, 5, 1, '2018-03-22 14:02:36'),
(8, 4, 3, 1, '2018-03-22 14:03:42'),
(9, 4, 5, 1, '2018-03-22 14:03:42'),
(10, 5, 1, 1, '2018-03-22 14:59:15');

-- --------------------------------------------------------

--
-- Estrutura para tabela `genero`
--

CREATE TABLE `genero` (
  `idGenero` int(11) NOT NULL,
  `nomeGenero` varchar(512) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `dataCriacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `genero`
--

INSERT INTO `genero` (`idGenero`, `nomeGenero`, `status`, `dataCriacao`) VALUES
(1, 'Acao', 1, '2018-03-22 13:48:49'),
(2, 'Aventura', 1, '2018-03-22 13:48:49'),
(3, 'Hentai', 1, '2018-03-22 13:48:49'),
(4, 'Terror', 1, '2018-03-22 13:48:49'),
(5, 'Romance', 1, '2018-03-22 13:48:49');

-- --------------------------------------------------------

--
-- Estrutura para tabela `participantes`
--

CREATE TABLE `participantes` (
  `idParticipante` int(11) NOT NULL,
  `nome` varchar(512) NOT NULL,
  `setor` varchar(512) NOT NULL,
  `cargo` varchar(512) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `dataCriacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `participantes`
--

INSERT INTO `participantes` (`idParticipante`, `nome`, `setor`, `cargo`, `status`, `dataCriacao`) VALUES
(3, 'ikeda', 'desenvolvimento', 'boss', 1, '2018-03-23 18:13:18');

-- --------------------------------------------------------

--
-- Estrutura para tabela `perguntas`
--

CREATE TABLE `perguntas` (
  `idPergunta` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `dataCriacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idCriador` int(11) DEFAULT NULL,
  `pergunta` varchar(1024) NOT NULL,
  `respostaCorreta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `perguntas`
--

INSERT INTO `perguntas` (`idPergunta`, `status`, `dataCriacao`, `idCriador`, `pergunta`, `respostaCorreta`) VALUES
(1, 1, '2018-03-23 17:59:03', 1, 'Qual o tamanho da rola do Marcel?', 3),
(2, 1, '2018-03-23 17:59:03', 1, 'Qual o sentido da vida, universo e tudo mais?', 4),
(3, 1, '2018-03-23 17:59:03', 1, 'Graphis eh legal?', 9);

-- --------------------------------------------------------

--
-- Estrutura para tabela `perguntas_ref_alternativas`
--

CREATE TABLE `perguntas_ref_alternativas` (
  `idPerguntaRefAlternativa` int(11) NOT NULL,
  `idPergunta` int(11) NOT NULL,
  `idAlternativa` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `dataCriacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `perguntas_ref_alternativas`
--

INSERT INTO `perguntas_ref_alternativas` (`idPerguntaRefAlternativa`, `idPergunta`, `idAlternativa`, `status`, `dataCriacao`) VALUES
(1, 1, 1, 1, '2018-03-23 18:05:53'),
(2, 1, 2, 1, '2018-03-23 18:05:53'),
(3, 1, 3, 1, '2018-03-23 18:05:53'),
(4, 2, 4, 1, '2018-03-23 18:05:53'),
(5, 2, 5, 1, '2018-03-23 18:05:53'),
(6, 2, 6, 1, '2018-03-23 18:05:53'),
(7, 3, 7, 1, '2018-03-23 18:05:53'),
(8, 3, 8, 1, '2018-03-23 18:05:53'),
(9, 3, 9, 1, '2018-03-23 18:05:53');

-- --------------------------------------------------------

--
-- Estrutura para tabela `questionarios`
--

CREATE TABLE `questionarios` (
  `idQuestionario` int(11) NOT NULL,
  `nomeQuestionario` varchar(512) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `dataCriacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `questionarios`
--

INSERT INTO `questionarios` (`idQuestionario`, `nomeQuestionario`, `status`, `dataCriacao`) VALUES
(1, 'QuestionÃ¡rio ObrigatÃ³rio', 1, '2018-03-23 17:53:25');

-- --------------------------------------------------------

--
-- Estrutura para tabela `questionarios_ref_perguntas`
--

CREATE TABLE `questionarios_ref_perguntas` (
  `idQuestionarioRefPergunta` int(11) NOT NULL,
  `idQuestionario` int(11) NOT NULL,
  `idPergunta` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `dataCriacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `questionarios_ref_perguntas`
--

INSERT INTO `questionarios_ref_perguntas` (`idQuestionarioRefPergunta`, `idQuestionario`, `idPergunta`, `status`, `dataCriacao`) VALUES
(1, 1, 1, 1, '2018-03-23 18:00:01'),
(2, 1, 2, 1, '2018-03-23 18:00:01'),
(3, 1, 3, 1, '2018-03-23 18:00:01');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(512) NOT NULL,
  `sobrenome` varchar(512) NOT NULL,
  `login` varchar(512) NOT NULL,
  `senha` varchar(512) NOT NULL,
  `cpf` varchar(512) NOT NULL,
  `endereco` varchar(512) DEFAULT NULL,
  `celular` varchar(512) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `dataCriacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nome`, `sobrenome`, `login`, `senha`, `cpf`, `endereco`, `celular`, `status`, `dataCriacao`) VALUES
(1, 'ikeda', 'nakata', 'ruizuikeda', '123', '123', '456', '789', 1, '2018-03-21 18:21:03'),
(2, 'renan', 'nobrega', 'renan', 'renan', '123123', '', '', 1, '2018-03-21 18:43:11');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `alternativas`
--
ALTER TABLE `alternativas`
  ADD PRIMARY KEY (`idAlternativa`);

--
-- Índices de tabela `animes`
--
ALTER TABLE `animes`
  ADD PRIMARY KEY (`idAnime`);

--
-- Índices de tabela `animes_ref_genero`
--
ALTER TABLE `animes_ref_genero`
  ADD PRIMARY KEY (`idAnimeRefGenero`);

--
-- Índices de tabela `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`idGenero`);

--
-- Índices de tabela `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`idParticipante`);

--
-- Índices de tabela `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`idPergunta`);

--
-- Índices de tabela `perguntas_ref_alternativas`
--
ALTER TABLE `perguntas_ref_alternativas`
  ADD PRIMARY KEY (`idPerguntaRefAlternativa`);

--
-- Índices de tabela `questionarios`
--
ALTER TABLE `questionarios`
  ADD PRIMARY KEY (`idQuestionario`);

--
-- Índices de tabela `questionarios_ref_perguntas`
--
ALTER TABLE `questionarios_ref_perguntas`
  ADD PRIMARY KEY (`idQuestionarioRefPergunta`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `alternativas`
--
ALTER TABLE `alternativas`
  MODIFY `idAlternativa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de tabela `animes`
--
ALTER TABLE `animes`
  MODIFY `idAnime` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de tabela `animes_ref_genero`
--
ALTER TABLE `animes_ref_genero`
  MODIFY `idAnimeRefGenero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de tabela `genero`
--
ALTER TABLE `genero`
  MODIFY `idGenero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de tabela `participantes`
--
ALTER TABLE `participantes`
  MODIFY `idParticipante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `perguntas`
--
ALTER TABLE `perguntas`
  MODIFY `idPergunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `perguntas_ref_alternativas`
--
ALTER TABLE `perguntas_ref_alternativas`
  MODIFY `idPerguntaRefAlternativa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de tabela `questionarios`
--
ALTER TABLE `questionarios`
  MODIFY `idQuestionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `questionarios_ref_perguntas`
--
ALTER TABLE `questionarios_ref_perguntas`
  MODIFY `idQuestionarioRefPergunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
