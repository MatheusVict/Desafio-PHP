-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 28-Jan-2023 às 23:40
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `desafio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpf` varchar(13) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phonenumber` varchar(25) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `address` varchar(250) NOT NULL,
  `number` varchar(20) NOT NULL,
  `complement` varchar(250) NOT NULL,
  `district` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `state` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `cpf`, `email`, `phonenumber`, `cep`, `address`, `number`, `complement`, `district`, `city`, `state`) VALUES
(5, 'MATHEUS ', '$2y$10$7ASlVcyy5Q07sdsT1c6Yxuyt9vnSH9mP9aWBd0dbIKWtS.gIPNa8O', '99999999999', 'matheusvictorhenrique@gmail.com', '81987751662', '53530440', 'Rua', '171', 'aciojmslcs', 'cjcaesc', 'Abreu e Lima', 'PE'),
(3, 'tu', 'a370afda41a7ae62dcb8d1b721b92bed', '6516516', 'tu@fofinha.com', '81987751662', '53530440', 'Rua', '171', 'alfnfa', 'l cnlan a', 'Abreu e Lima', 'PE'),
(4, 'shirley', 'df34f87a545a48e0bb7e23d0bfdac93a', '14424051471', 'shirley@gmail.com', '81987751662', '53530440', 'Rua', '171', 'da', 'dasda', 'Abreu e Lima', 'PE'),
(8, 'fofinhaTÃº', 'e10adc3949ba59abbe56e057f20f883e', '99999999999', 'tu@gmail.com', '516161', 'fhfsdbks', 'ccnadjs', '153351', '161', '61', 'casa', 'aaaaaaaa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
