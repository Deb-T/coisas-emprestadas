SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `coisas-emprestadas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `coisas-emprestadas`;

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `ativo` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuarios` (`nome`, `email`, `senha`, `ativo`) VALUES
('Paulo da Silva', 'paulo@gmail.com', '123456', 'A');

DROP TABLE IF EXISTS `itens`;
CREATE TABLE `itens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `emprestado` char(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `itens` (`nome`, `descricao`, `emprestado`) VALUES
('Barraca de camping','Barraca tamanho casal na cor verde para camping. Completa, fácil de montar, sem defeitos.','S'),
('Livro Dom Casmurro','Livro sem rasuras, apenas marcas causadas pelo manuseio.','S'),
('Churrasqueira portátil','Churrasqueira de mesa, pequena (30x80), fácil de carregar.','N'),
('Piscina 5000L','Piscina de 5000L sem defeitos. Acompanha bomba de ar para encher as laterais.','S');