-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 25-Jul-2020 às 21:43
-- Versão do servidor: 8.0.18
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
-- Banco de dados: `dbsystem`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadabast`
--

DROP TABLE IF EXISTS `cadabast`;
CREATE TABLE IF NOT EXISTS `cadabast` (
  `id_abast` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prefixo` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `data_abast` date NOT NULL,
  `abastecido` varchar(300) NOT NULL,
  PRIMARY KEY (`id_abast`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cadabast`
--

INSERT INTO `cadabast` (`id_abast`, `placa`, `prefixo`, `data_abast`, `abastecido`) VALUES
(1, 'TRY78954', 'TRE899R', '2020-07-24', '150'),
(2, 'PMJ45697', 'RFD589', '2020-07-23', '100'),
(5, 'KIY8965', 'TYU569', '2020-07-25', '50'),
(7, 'WSD4520', 'GF567F', '2020-07-15', '150.5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
CREATE TABLE IF NOT EXISTS `cadastro` (
  `placa` varchar(11) NOT NULL,
  `marca` varchar(250) NOT NULL,
  `modelo` varchar(250) NOT NULL,
  `localizacao` varchar(250) NOT NULL,
  `capacidade` float NOT NULL,
  PRIMARY KEY (`placa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`placa`, `marca`, `modelo`, `localizacao`, `capacidade`) VALUES
('PMJ45697', 'CASE', 'CARRETA HIDRÁULICA ROC D7, D9 E D7LF', 'Fortaleza', 300),
('TRY78954', 'DAF', 'DAF XF105\r\n\r\n', 'Fortaleza', 500),
('KIY8965', 'DAF', 'DAF CF85', 'Tianguá', 500),
('WSD4520', 'DAF', 'CF85 OFF-ROAD', 'Viçosa do Ceará', 1000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadmaq`
--

DROP TABLE IF EXISTS `cadmaq`;
CREATE TABLE IF NOT EXISTS `cadmaq` (
  `prefixo` varchar(11) NOT NULL,
  `tipoeq` varchar(250) NOT NULL,
  `localizacao` varchar(250) NOT NULL,
  PRIMARY KEY (`prefixo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cadmaq`
--

INSERT INTO `cadmaq` (`prefixo`, `tipoeq`, `localizacao`) VALUES
('RFD589', 'Trator', 'Russas'),
('TRE899R', 'Rompedor', 'Fortaleza'),
('TYU569', 'Compactador HC', 'Tianguá'),
('GF567F', 'DIAMEC 232', 'Viçosa do Ceará');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
