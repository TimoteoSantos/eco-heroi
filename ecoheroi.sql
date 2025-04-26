-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Abr-2025 às 18:03
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ecoheroi`
--
CREATE DATABASE IF NOT EXISTS `ecoheroi` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ecoheroi`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

DROP TABLE IF EXISTS `historico`;
CREATE TABLE IF NOT EXISTS `historico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vidas` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `usuario` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `historico`
--

INSERT INTO `historico` (`id`, `vidas`, `data`, `usuario`) VALUES
(1, 5, '2025-04-23 17:49:22', 'timoteo'),
(2, 5, '2025-04-23 18:02:24', 'timoteo'),
(3, 10, '2025-04-23 18:03:22', 'timoteo'),
(4, 5, '2025-04-24 08:26:57', 'TIMOTEO'),
(5, 7, '2025-04-24 09:07:42', NULL),
(6, 9, '2025-04-24 09:08:17', 'tim'),
(7, 10, '2025-04-24 09:09:57', 'tim'),
(8, 7, '2025-04-24 09:10:42', 'tim'),
(9, 10, '2025-04-24 09:18:06', 'TIMOTEO'),
(10, 9, '2025-04-24 09:25:04', 'TIMOTEO'),
(11, 7, '2025-04-24 10:32:08', NULL),
(12, 7, '2025-04-24 10:35:42', 'tim'),
(13, 10, '2025-04-24 10:41:34', 'tim'),
(14, 9, '2025-04-24 10:48:30', 'tim'),
(15, 9, '2025-04-25 09:41:32', 'tim'),
(16, 8, '2025-04-25 09:42:16', 'tim'),
(17, 10, '2025-04-25 09:44:41', 'tim'),
(18, 10, '2025-04-25 09:45:46', 'tim'),
(19, 9, '2025-04-25 09:46:12', 'tim'),
(20, 9, '2025-04-25 09:46:40', 'tim'),
(21, 9, '2025-04-25 09:47:18', 'tim'),
(22, 8, '2025-04-25 09:48:23', 'tim'),
(23, 8, '2025-04-25 09:48:34', 'tim'),
(24, 8, '2025-04-25 09:49:13', 'tim'),
(25, 8, '2025-04-25 09:49:25', 'tim'),
(26, 8, '2025-04-25 09:49:41', 'tim'),
(27, 8, '2025-04-25 09:49:42', 'tim'),
(28, 8, '2025-04-25 09:50:12', 'tim'),
(29, 8, '2025-04-25 09:50:19', 'tim'),
(30, 8, '2025-04-25 09:50:31', 'tim'),
(31, 8, '2025-04-25 09:50:34', 'tim'),
(32, 8, '2025-04-25 09:51:57', 'tim'),
(33, 8, '2025-04-25 09:52:04', 'tim'),
(34, 8, '2025-04-25 09:52:34', 'tim'),
(35, 8, '2025-04-25 09:52:45', 'tim'),
(36, 8, '2025-04-25 09:52:52', 'tim'),
(37, 8, '2025-04-25 09:52:53', 'tim'),
(38, 8, '2025-04-25 09:53:06', 'tim'),
(39, 8, '2025-04-25 09:53:45', 'tim'),
(40, 8, '2025-04-25 09:53:57', 'tim'),
(41, 8, '2025-04-25 09:54:05', 'tim'),
(42, 8, '2025-04-25 09:54:21', 'tim'),
(43, 8, '2025-04-25 09:54:37', 'tim'),
(44, 8, '2025-04-25 09:54:47', 'tim'),
(45, 8, '2025-04-25 09:54:55', 'tim'),
(46, 8, '2025-04-25 09:54:55', 'tim'),
(47, 8, '2025-04-25 09:54:56', 'tim'),
(48, 8, '2025-04-25 09:55:05', 'tim'),
(49, 8, '2025-04-25 09:55:22', 'tim'),
(50, 8, '2025-04-25 09:55:23', 'tim'),
(51, 8, '2025-04-25 09:55:23', 'tim'),
(52, 8, '2025-04-25 09:55:24', 'tim'),
(53, 8, '2025-04-25 09:55:29', 'tim'),
(54, 8, '2025-04-25 09:55:30', 'tim'),
(55, 8, '2025-04-25 09:55:30', 'tim'),
(56, 8, '2025-04-25 09:55:30', 'tim'),
(57, 8, '2025-04-25 09:55:31', 'tim'),
(58, 8, '2025-04-25 09:55:31', 'tim'),
(59, 8, '2025-04-25 09:55:31', 'tim'),
(60, 8, '2025-04-25 09:55:31', 'tim'),
(61, 8, '2025-04-25 09:55:57', 'tim'),
(62, 8, '2025-04-25 09:56:10', 'tim'),
(63, 8, '2025-04-25 09:56:25', 'tim'),
(64, 8, '2025-04-25 09:56:29', 'tim'),
(65, 8, '2025-04-25 09:56:37', 'tim'),
(66, 8, '2025-04-25 09:56:41', 'tim'),
(67, 8, '2025-04-25 09:59:10', 'tim'),
(68, 8, '2025-04-25 09:59:28', 'tim'),
(69, 8, '2025-04-25 09:59:42', 'tim'),
(70, 10, '2025-04-25 09:59:50', 'tim'),
(71, 9, '2025-04-25 10:00:01', 'tim'),
(72, 10, '2025-04-25 14:08:37', 'tim'),
(73, 10, '2025-04-25 15:16:07', 'TIMOTEO'),
(74, 7, '2025-04-25 15:19:46', NULL),
(75, 9, '2025-04-25 15:20:14', 'tim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta`
--

DROP TABLE IF EXISTS `pergunta`;
CREATE TABLE IF NOT EXISTS `pergunta` (
  `idpergunta` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta` varchar(255) NOT NULL,
  `resposta` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idpergunta`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pergunta`
--

INSERT INTO `pergunta` (`idpergunta`, `pergunta`, `resposta`) VALUES
(103, 'ONDE JOGAR O LIXO', 'LIXEIRA'),
(104, 'ONDE NAO JOGAR O LIXO', 'CHAO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) DEFAULT NULL,
  `senha` varchar(100) NOT NULL,
  `datacadastro` datetime NOT NULL DEFAULT current_timestamp(),
  `adm` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `senha`, `datacadastro`, `adm`) VALUES
(6, 'tim', 'tim', '2025-04-22 16:41:10', NULL),
(12, 'timoteo', '123', '2025-04-25 17:57:12', 'sim');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
