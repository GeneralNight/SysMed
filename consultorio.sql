-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27-Jun-2020 às 01:45
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `consultorio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `Codf` int(11) NOT NULL,
  `Nome` varchar(60) NOT NULL,
  `Idade` int(11) NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `Salario` int(11) NOT NULL,
  `CPF` varchar(30) NOT NULL,
  PRIMARY KEY (`Codf`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`Codf`, `Nome`, `Idade`, `Cidade`, `Salario`, `CPF`) VALUES
(1, 'Amanda', 25, 'Taquaritinga', 1500, '125.568.652-96'),
(2, 'João', 35, 'Ribeirão Preto', 2300, '125.852.643-20'),
(3, 'Maria', 22, 'Matão', 1800, '487.863.963-03'),
(4, 'Felipe', 46, 'Araraquara', 2700, '156.698.452-57'),
(5, 'Gabriela', 48, 'Jaboticabal', 2700, '462.682.639-64'),
(6, 'Klerison', 27, 'Matão', 1400, '562.681.632-65');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicos`
--

DROP TABLE IF EXISTS `medicos`;
CREATE TABLE IF NOT EXISTS `medicos` (
  `CodM` int(11) NOT NULL,
  `Nome` varchar(60) NOT NULL,
  `Idade` int(11) NOT NULL,
  `Especialidade` varchar(40) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  PRIMARY KEY (`CodM`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `medicos`
--

INSERT INTO `medicos` (`CodM`, `Nome`, `Idade`, `Especialidade`, `CPF`, `Cidade`) VALUES
(1, 'Gabriel', 36, 'Ortopedia', '156.658.698-96', 'Taquaritinga'),
(2, 'Regina', 48, 'Cardiologia', '458.658.921-34', 'Matão'),
(3, 'Derek', 54, 'Neurologia', '652.698.452-03', 'Araraquara'),
(4, 'Rafaela', 31, 'Pediatria', '125.963.842-65', 'Taquaritinga'),
(5, 'Catarina', 46, 'Trauma', '568.942.678-47', 'Ribeirão Preto'),
(6, 'Igor', 43, 'Clínico Geral', '452.863.321-65', 'Jaboticabal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

DROP TABLE IF EXISTS `pacientes`;
CREATE TABLE IF NOT EXISTS `pacientes` (
  `CodP` int(11) NOT NULL,
  `Nome` varchar(60) NOT NULL,
  `Idade` int(11) NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `Doenca` varchar(40) NOT NULL,
  PRIMARY KEY (`CodP`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`CodP`, `Nome`, `Idade`, `Cidade`, `CPF`, `Doenca`) VALUES
(1, 'Guilherme', 25, 'Taquaritinga', '456.986.310-36', 'Câncer de fígado'),
(2, 'Maria', 65, 'Jaboticabal', '568.642.069-63', 'AVC'),
(3, 'Gabriel', 72, 'Ribeirâo Preto', '653.698.642-98', 'Esclerose Múltipla'),
(4, 'Rafael', 21, 'Taquaritinga', '762.648.921-63', 'Pneumonia'),
(5, 'Daniela', 86, 'Araraquara', '482.862.563-69', 'Câncer de pulmão'),
(6, 'Francisco', 76, 'Ribeirão Preto', '563.586.964-63', 'Rinite');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
