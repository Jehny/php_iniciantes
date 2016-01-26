-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27-Jan-2016 às 00:18
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cadastro_php`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
  `cpf` int(14) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` int(5) NOT NULL,
  `telefone` int(14) NOT NULL,
  `nota` text NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`cpf`, `nome`, `dt_nascimento`, `email`, `endereco`, `numero`, `telefone`, `nota`) VALUES
(0, 's', '0000-00-00', '', '', 0, 0, ''),
(1, 'ana', '2016-01-06', '231564', '32154', 32154, 321564, '2154'),
(132, 'ana1', '1984-03-14', 'valkiria_belmont@hotmail.com1', 'Rua Raimundo Frota', 3232, 2147483647, ''),
(12324, 'dfasdgf', '2016-01-13', '5421', '54', 0, 0, ''),
(12398457, 'ana1', '1984-03-14', 'anapaula.os@outlook.com', 'Rua Raimundo Frota', 3232, 2147483647, 'Test'),
(2147483647, 'ana', '2016-01-25', 'anapaula.os@outlook.com', 'rua x', 92, 985512103, 'Primeiro Envio');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
