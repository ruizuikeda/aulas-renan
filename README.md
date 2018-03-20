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
````

