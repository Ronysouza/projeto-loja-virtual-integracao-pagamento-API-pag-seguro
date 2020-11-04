-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04-Nov-2020 às 14:49
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
-- Banco de dados: `modavip`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bannercarroussel`
--

DROP TABLE IF EXISTS `bannercarroussel`;
CREATE TABLE IF NOT EXISTS `bannercarroussel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(50) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `bannercarroussel`
--

INSERT INTO `bannercarroussel` (`id`, `url`, `titulo`, `descricao`) VALUES
(1, 'c1.jpg', 'Vip Modas', 'A VipModas é a maior rede de moda do estado. Com quase 10 anos de experiência,<br> construiu uma forte relação de cumplicidade e intimidade com o cliente<br> conhecendo e acompanhando suas necessidades e anseios.'),
(2, 'banner2.jpg', 'Vip Modas', ' A VipModas é a maior rede de moda do estado. Com quase 10 anos de experiência,<br> construiu uma forte relação de cumplicidade e intimidade com o cliente<br> conhecendo e acompanhando suas necessidades e anseios.\r\n'),
(3, 'banner_sobre.jpg', 'Vip Modas', 'A VipModas é a maior rede de moda do estado. Com quase 10 anos de experiência,<br> construiu uma forte relação de cumplicidade e intimidade com o cliente<br> conhecendo e acompanhando suas necessidades e anseios. ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `titulo`) VALUES
(1, 'Camisas'),
(2, 'Calças'),
(3, 'Sapatos'),
(4, 'Blazer');

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

DROP TABLE IF EXISTS `galeria`;
CREATE TABLE IF NOT EXISTS `galeria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=147 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `galeria`
--

INSERT INTO `galeria` (`id`, `id_produto`, `imagem`, `nome`) VALUES
(1, 9, 'camisa02-1.webp', 'Camisa Polo'),
(2, 9, 'camisa02-2.jpg', 'Camisa Polo'),
(3, 9, 'camisa02-3.jpg', 'Camisa Polo'),
(4, 10, 'camisa02-3.jpg', 'Camisa Polo'),
(5, 10, 'camisa02-2.jpg', 'Camisa Polo'),
(6, 10, 'camisa02-1.webp', 'Camisa Polo'),
(7, 11, 'camisa02-1.webp', 'Camisa Polo'),
(8, 11, 'camisa02-2.jpg', 'Camisa Polo'),
(9, 11, 'camisa02-3.jpg', 'Camisa Polo'),
(10, 12, 'camisa02-1.webp', 'Camisa Polo'),
(11, 12, 'camisa02-2.jpg', 'Camisa Polo'),
(12, 12, 'camisa02-3.jpg', 'Camisa Polo'),
(13, 13, 'camisa02-1.webp', 'Camisa Polo'),
(14, 13, 'camisa02-2.jpg', 'Camisa Polo'),
(15, 13, 'camisa02-3.jpg', 'Camisa Polo'),
(16, 14, 'camisa02-1.webp', 'Camisa Polo'),
(17, 14, 'camisa02-2.jpg', 'Camisa Polo'),
(18, 14, 'camisa02-3.jpg', 'Camisa Polo'),
(19, 15, 'camisa02-1.webp', 'Camisa Polo'),
(20, 15, 'camisa02-2.jpg', 'Camisa Polo'),
(21, 15, 'camisa02-3.jpg', 'Camisa Polo'),
(22, 16, 'camisa02-1.webp', 'Camisa Polo'),
(23, 16, 'camisa02-2.jpg', 'Camisa Polo'),
(24, 16, 'camisa02-3.jpg', 'Camisa Polo'),
(25, 17, 'camisa02-1.webp', 'Camisa Polo'),
(28, 17, 'camisa02-2.jpg', 'Camisa Polo'),
(29, 17, 'camisa02-3.jpg', 'Camisa Polo'),
(30, 18, 'camisa02-1.webp', 'Camisa Polo'),
(31, 18, 'camisa02-2.jpg', 'Camisa Polo'),
(32, 18, 'camisa02-3.jpg', 'Camisa Polo'),
(33, 19, 'camisa02-1.webp', 'Camisa Polo'),
(34, 19, 'camisa02-2.jpg', 'Camisa Polo'),
(35, 19, 'camisa02-3.jpg', 'Camisa Polo'),
(36, 20, 'camisa02-1.webp', 'Camisa Polo'),
(37, 20, 'camisa02-2.jpg ', 'Camisa Polo'),
(38, 20, 'camisa02-3.jpg', 'Camisa Polo'),
(39, 21, 'camisa02-1.webp', 'Camisa Polo'),
(40, 21, 'camisa02-2.jpg', 'Camisa Polo'),
(41, 21, 'camisa02-3.jpg', 'Camisa Polo'),
(42, 22, 'camisa02-1.webp', 'Camisa Polo'),
(43, 22, 'camisa02-2.jpg', 'Camisa Polo'),
(44, 22, 'camisa02-3.jpg', 'Camisa Polo'),
(45, 38, 'calca03-2.webp', 'Calça Social Sport'),
(46, 38, 'calca01-2.webp', 'Calça Social Sport'),
(47, 38, 'calca01-1.webp', 'Calça Social Sport'),
(48, 36, 'calca03-2.webp', 'Calça Social Sport'),
(49, 36, 'calca01-2.webp', 'Calça Social Sport'),
(50, 36, 'calca01-1.webp', 'Calça Social Sport'),
(51, 34, 'calca03-2.webp', 'Calça Social Sport'),
(52, 34, 'calca01-2.webp', 'Calça Social Sport'),
(53, 34, 'calca01-1.webp', 'Calça Social Sport'),
(54, 32, 'calca03-2.webp', 'Calça Social Sport'),
(55, 32, 'calca01-2.webp', 'Calça Social Sport'),
(56, 32, 'calca01-1.webp', 'Calça Social Sport'),
(57, 30, 'calca03-2.webp', 'Calça Social Sport'),
(58, 30, 'calca01-2.webp', 'Calça Social Sport'),
(59, 30, 'calca01-1.webp', 'Calça Social Sport'),
(60, 37, 'calca03-2.webp', 'Calça Social Sport'),
(61, 37, 'calca01-2.webp', 'Calça Social Sport'),
(62, 37, 'calca01-1.webp', 'Calça Social Sport'),
(63, 35, 'calca03-2.webp', 'Calça Social Sport'),
(64, 35, 'calca01-2.webp', 'Calça Social Sport'),
(65, 35, 'calca01-1.webp', 'Calça Social Sport'),
(66, 33, 'calca03-2.webp', 'Calça Social Sport'),
(67, 33, 'calca01-2.webp', 'Calça Social Sport'),
(68, 33, 'calca01-1.webp', 'Calça Social Sport'),
(69, 31, 'calca03-2.webp', 'Calça Social Sport'),
(70, 31, 'calca01-2.webp', 'Calça Social Sport'),
(71, 31, 'calca01-1.webp', 'Calça Social Sport'),
(72, 29, 'calca03-2.webp', 'Calça Social Sport'),
(73, 29, 'calca01-2.webp', 'Calça Social Sport'),
(74, 29, 'calca01-1.webp', 'Calça Social Sport'),
(75, 54, 'sapa2-1.webp', 'Sapato Social'),
(76, 54, 'sapatos3-1.webp', 'Sapato Social'),
(77, 54, 'sapa2-1.webp', 'Sapato Social'),
(78, 53, 'sapa2-1.webp', 'Sapato Social'),
(79, 53, 'sapatos3-1.webp', 'Sapato Social'),
(80, 53, 'sapa2-1.webp', 'Sapato Social'),
(81, 52, 'sapa2-1.webp', 'Sapato Social'),
(82, 52, 'sapatos3-1.webp', 'Sapato Social'),
(83, 52, 'sapa2-1.webp', 'Sapato Social'),
(84, 51, 'sapa2-1.webp', 'Sapato Social'),
(85, 51, 'sapatos3-1.webp', 'Sapato Social'),
(86, 51, 'sapa2-1.webp', 'Sapato Social'),
(87, 50, 'sapa2-1.webp', 'Sapato Social'),
(88, 50, 'sapatos3-1.webp', 'Sapato Social'),
(89, 50, 'sapa2-1.webp', 'Sapato Social'),
(90, 49, 'sapa2-1.webp', 'Sapato Social'),
(91, 49, 'sapatos3-1.webp', 'Sapato Social'),
(92, 49, 'sapa2-1.webp', 'Sapato Social'),
(93, 48, 'sapa2-1.webp', 'Sapato Social'),
(94, 48, 'sapatos3-1.webp', 'Sapato Social'),
(95, 48, 'sapa2-1.webp', 'Sapato Social'),
(96, 47, 'sapa2-1.webp', 'Sapato Social'),
(97, 47, 'sapatos3-1.webp', 'Sapato Social'),
(98, 47, 'sapa2-1.webp', 'Sapato Social'),
(99, 46, 'sapa2-1.webp', 'Sapato Social'),
(100, 46, 'sapatos3-1.webp', 'Sapato Social'),
(101, 46, 'sapa2-1.webp', 'Sapato Social'),
(102, 45, 'sapa2-1.webp', 'Sapato Social'),
(103, 45, 'sapatos3-1.webp', 'Sapato Social'),
(104, 45, 'sapa2-1.webp', 'Sapato Social'),
(105, 44, 'sapa2-1.webp', 'Sapato Social'),
(106, 44, 'sapatos3-1.webp', 'Sapato Social'),
(107, 44, 'sapa2-1.webp', 'Sapato Social'),
(108, 43, 'sapa2-1.webp', 'Sapato Social'),
(109, 43, 'sapatos3-1.webp', 'Sapato Social'),
(110, 43, 'sapa2-1.webp', 'Sapato Social'),
(111, 41, 'sapa2-1.webp', 'Sapato Social'),
(112, 41, 'sapatos3-1.webp', 'Sapato Social'),
(113, 41, 'sapa2-1.webp', 'Sapato Social'),
(114, 40, 'sapa2-1.webp', 'Sapato Social'),
(115, 40, 'sapatos3-1.webp', 'Sapato Social'),
(116, 40, 'sapa2-1.webp', 'Sapato Social'),
(117, 39, 'sapa2-1.webp', 'Sapato Social'),
(118, 39, 'sapatos3-1.webp', 'Sapato Social'),
(119, 39, 'sapa2-1.webp', 'Sapato Social'),
(120, 55, 'blaser4.jpg', 'Blazer Masculino'),
(121, 55, 'blaser2.jpg', 'Blazer Masculino'),
(122, 55, 'blaser1.jpg', 'Blazer Masculino'),
(123, 56, 'blaser4.jpg', 'Blazer Masculino'),
(124, 56, 'blaser2.jpg', 'Blazer Masculino'),
(125, 56, 'blaser1.jpg', 'Blazer Masculino'),
(126, 57, 'blaser4.jpg', 'Blazer Masculino'),
(127, 57, 'blaser2.jpg', 'Blazer Masculino'),
(128, 57, 'blaser1.jpg', 'Blazer Masculino'),
(129, 58, 'blaser4.jpg', 'Blazer Masculino'),
(130, 58, 'blaser2.jpg', 'Blazer Masculino'),
(131, 58, 'blaser1.jpg', 'Blazer Masculino'),
(132, 59, 'blaser4.jpg', 'Blazer Masculino'),
(133, 59, 'blaser2.jpg', 'Blazer Masculino'),
(134, 59, 'blaser1.jpg', 'Blazer Masculino'),
(135, 60, 'blaser4.jpg', 'Blazer Masculino'),
(136, 60, 'blaser2.jpg', 'Blazer Masculino'),
(137, 60, 'blaser1.jpg', 'Blazer Masculino'),
(138, 61, 'blaser4.jpg', 'Blazer Masculino'),
(139, 61, 'blaser2.jpg', 'Blazer Masculino'),
(140, 61, 'blaser1.jpg', 'Blazer Masculino'),
(141, 62, 'blaser4.jpg', 'Blazer Masculino'),
(142, 62, 'blaser2.jpg', 'Blazer Masculino'),
(143, 62, 'blaser1.jpg', 'Blazer Masculino'),
(144, 63, 'blaser4.jpg', 'Blazer Masculino'),
(145, 63, 'blaser2.jpg', 'Blazer Masculino'),
(146, 63, 'blaser1.jpg', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento`
--

DROP TABLE IF EXISTS `orcamento`;
CREATE TABLE IF NOT EXISTS `orcamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_produtos` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `preco` float DEFAULT NULL,
  `id_categorias` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `altura` varchar(50) NOT NULL,
  `largura` varchar(50) NOT NULL,
  `acm` varchar(100) NOT NULL,
  `lcm` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `preco`, `id_categorias`, `url`, `altura`, `largura`, `acm`, `lcm`) VALUES
(9, 'Camisas masculino', 'Camisas gola polo masculino', 99.99, 1, 'camisa02-1.webp', 'Nike', 'Tamanho P,M,G', 'Cores Variável', 'social Sport'),
(10, 'Camisas masculino', 'Camisas gola polo masculino', 99.99, 1, 'camisa02-2.jpg', 'Nike', 'Tamanho P,M,G', 'Cores Variável', 'social Sport'),
(11, 'Camisas masculino', 'Camisas gola polo masculino', 99.99, 1, 'camisa02-3.jpg', 'Nike', 'Tamanho P,M,G', 'Cores Variável', 'social Sport'),
(12, 'Camisas masculino', 'Camisas gola polo masculino', 99.99, 1, 'camisa02-4.jpg', 'Nike', 'Tamanho P,M,G', 'Cores Variável', 'social Sport'),
(13, 'Camisas masculino', 'Camisas gola polo masculino', 99.99, 1, 'camisa02-5.jpg', 'Nike', 'Tamanho P,M,G', 'Cores Variável', 'social Sport'),
(14, 'Camisas masculino', 'Camisas gola polo masculino', 99.99, 1, 'camisa03-1.jpg', 'Nike', 'Tamanho P,M,G', 'Cores Variável', 'social Sport'),
(15, 'Camisas masculino', 'Camisas gola polo masculino', 99.99, 1, 'camisa03-2.jpg', 'Nike', 'Tamanho P,M,G', 'Cores Variável', 'social Sport'),
(16, 'Camisas masculino', 'Camisas gola polo masculino', 99.99, 1, 'camisa03-3.jpg', 'Nike', 'Tamanho P,M,G', 'Cores Variável', 'social Sport'),
(17, 'Camisas masculino', 'Camisas gola polo masculino', 99.99, 1, 'camisa03-4.jpg', 'Nike', 'Tamanho P,M,G', 'Cores Variável', 'social Sport'),
(18, 'Camisas masculino', 'Camisas gola polo masculino', 99.99, 1, 'camisa04-1.jpg', 'Nike', 'Tamanho P,M,G', 'Cores Variável', 'social Sport'),
(19, 'Camisas masculino', 'Camisas gola polo masculino', 99.99, 1, 'camisa04-2.jpg', 'Nike', 'Tamanho P,M,G', 'Cores Variável', 'social Sport'),
(20, 'Camisas masculino', 'Camisas gola polo masculino', 99.99, 1, 'camisa04-3.jpg', 'Nike', 'Tamanho P,M,G', 'Cores Variável', 'social Sport'),
(21, 'Camisas masculino', 'Camisas gola polo masculino', 99.99, 1, 'camisa04-4.jpg', 'Nike', 'Tamanho P,M,G', 'Cores Variável', 'social Sport'),
(22, 'Camisas masculino', 'Camisas gola polo masculino', 99.99, 1, 'camisa04-5.jpg', 'Nike', 'Tamanho P,M,G', 'Cores Variável', 'social Sport'),
(38, 'Calça masculino', 'Calça Social Sport', 199.99, 2, 'calca03-2.webp', '', 'Tamanho 36,38,40', 'Cores Variável', 'social Sport'),
(36, 'Calça masculino', 'Calça Social Sport', 199.99, 2, 'calca01-2.webp', '', 'Tamanho 36,38,40', 'Cores Variável', 'social Sport'),
(34, 'Calça masculino', 'Calça Social Sport', 199.99, 2, 'calca02-3.webp', '', 'Tamanho 36,38,40', 'Cores Variável', 'social Sport'),
(32, 'Calça masculino', 'Calça Social Sport', 199.99, 2, 'calca02-1.webp', '', 'Tamanho 36,38,40', 'Cores Variável', 'social Sport'),
(30, 'Calça masculino', 'Calça Social Sport', 199.99, 2, 'calca01-2.webp', '', 'Tamanho 36,38,40', 'Cores Variável', 'social Sport'),
(37, 'Calça masculino', 'Calça Social Sport', 199.99, 2, 'calca03-1.webp', '', 'Tamanho 36,38,40', 'Cores Variável', 'social Sport'),
(35, 'Calça masculino', 'Calça Social Sport', 199.99, 2, 'calca02-4.webp', '', 'Tamanho 36,38,40', 'Cores Variável', 'social Sport'),
(33, 'Calça masculino', 'Calça Social Sport', 199.99, 2, 'calca02-2.webp', '', 'Tamanho 36,38,40', 'Cores Variável', 'social Sport'),
(31, 'Calça masculino', 'Calça Social Sport', 199.99, 2, 'calca01-3.webp', '', 'Tamanho 36,38,40', 'Cores Variável', 'social Sport'),
(29, 'Calça masculino', 'Calça Social Sport', 199.99, 2, 'calca01-1.webp', '', 'Tamanho 36,38,40', 'Cores Variável', 'social Sport'),
(39, 'Sapato Masculino', 'social', 139.99, 3, 'site01-copiar.webp', 'Ferracini', 'Numeros,37,39,42', 'Cores Variável', 'SocialSport'),
(40, 'Sapato Masculino', 'social', 139.99, 3, 'site02-copiar.webp', 'Ferracini', 'Numeros,37,39,42', 'Cores Variável', 'SocialSport'),
(41, 'Sapato Masculino', 'social', 139.99, 3, 'site03-copiar.webp', 'Ferracini', 'Numeros,37,39,42', 'Cores Variável', 'SocialSport'),
(43, 'Sapato Masculino', 'social', 139.99, 3, 'sapa2-1.webp', 'Ferracini', 'Numeros,37,39,42', 'Cores Variável', 'SocialSport'),
(44, 'Sapato Masculino', 'social', 139.99, 3, 'sapa2-2.webp', 'Ferracini', 'Numeros,37,39,42', 'Cores Variável', 'SocialSport'),
(45, 'Sapato Masculino', 'social', 139.99, 3, 'sapa2-3.webp', 'Ferracini', 'Numeros,37,39,42', 'Cores Variável', 'SocialSport'),
(46, 'Sapato Masculino', 'social', 139.99, 3, 'sapa2-4.webp', 'Ferracini', 'Numeros,37,39,42', 'Cores Variável', 'SocialSport'),
(47, 'Sapato Masculino', 'social', 139.99, 3, 'sapatos3-1.webp', 'Ferracini', 'Numeros,37,39,42', 'Cores Variável', 'SocialSport'),
(48, 'Sapato Masculino', 'social', 139.99, 3, 'sapatos3-2.webp', 'Ferracini', 'Numeros,37,39,42', 'Cores Variável', 'SocialSport'),
(49, 'Sapato Masculino', 'social', 139.99, 3, 'sapatos3-3.webp', 'Ferracini', 'Numeros,37,39,42', 'Cores Variável', 'SocialSport'),
(50, 'Sapato Masculino', 'social', 139.99, 3, 'sapatos3-4.webp', 'Ferracini', 'Numeros,37,39,42', 'Cores Variável', 'SocialSport'),
(51, 'Sapato Masculino', 'social', 139.99, 3, 'sapatos4-1.webp', 'Ferracini', 'Numeros,37,39,42', 'Cores Variável', 'SocialSport'),
(52, 'Sapato Masculino', 'social', 139.99, 3, 'sapatos4-2.webp', 'Ferracini', 'Numeros,37,39,42', 'Cores Variável', 'SocialSport'),
(53, 'Sapato Masculino', 'social', 139.99, 3, 'sapatos4-3.webp', 'Ferracini', 'Numeros,37,39,42', 'Cores Variável', 'SocialSport'),
(54, 'Sapato Masculino', 'social', 139.99, 3, 'sapatos4-4.webp', 'Ferracini', 'Numeros,37,39,42', 'Cores Variável', 'SocialSport'),
(55, 'Blazer masculino', 'Blazer Social', 249.99, 4, 'blaser1.jpg', 'ModaFashion', 'Tamanho,P,M,G', 'Cores Variável', 'SocialSport'),
(56, 'Blazer masculino', 'Blazer Social', 249.99, 4, 'blaser2.jpg', 'ModaFashion', 'Tamanho,P,M,G', 'Cores Variável', 'SocialSport'),
(57, 'Blazer masculino', 'Blazer Social', 249.99, 4, 'blaser3.jpg', 'ModaFashion', 'Tamanho,P,M,G', 'Cores Variável', 'SocialSport'),
(58, 'Blazer masculino', 'Blazer Social', 249.99, 4, 'blaser4.jpg', 'ModaFashion', 'Tamanho,P,M,G', 'Cores Variável', 'SocialSport'),
(59, 'Blazer masculino', 'Blazer Social', 249.99, 4, 'blazer02-1.jpg', 'ModaFashion', 'Tamanho,P,M,G', 'Cores Variável', 'SocialSport'),
(60, 'Blazer masculino', 'Blazer Social', 249.99, 4, 'blazer02-2.jpg', 'ModaFashion', 'Tamanho,P,M,G', 'Cores Variável', 'SocialSport'),
(61, 'Blazer masculino', 'Blazer Social', 249.99, 4, 'blazer02-3.jpg', 'ModaFashion', 'Tamanho,P,M,G', 'Cores Variável', 'SocialSport'),
(62, 'Blazer masculino', 'Blazer Social', 249.99, 4, 'blazer02-3.jpg', 'ModaFashion', 'Tamanho,P,M,G', 'Cores Variável', 'SocialSport'),
(63, 'Blazer masculino', 'Blazer Social', 249.99, 4, 'blazer02-5.jpg', 'ModaFashion', 'Tamanho,P,M,G', 'Cores Variável', 'SocialSport');

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  `codigo_venda` varchar(100) NOT NULL,
  `id_usuario` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`id`, `status`, `codigo_venda`, `id_usuario`) VALUES
(84, 1, '159484449736', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(10, 'comprador teste', 'teste@email', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

DROP TABLE IF EXISTS `vendas`;
CREATE TABLE IF NOT EXISTS `vendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_produtos` int(11) NOT NULL,
  `total` float NOT NULL,
  `codigo_venda` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=386 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `id_usuario`, `id_produtos`, `total`, `codigo_venda`, `descricao`) VALUES
(384, 10, 19, 99.99, '159484449736', 'Camisas gola polo masculino'),
(385, 10, 19, 99.99, '159484449736', 'Camisas gola polo masculino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda_usuario`
--

DROP TABLE IF EXISTS `venda_usuario`;
CREATE TABLE IF NOT EXISTS `venda_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `observacoes` text NOT NULL,
  `total` float NOT NULL,
  `codigo_venda` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `venda_usuario`
--

INSERT INTO `venda_usuario` (`id`, `id_usuario`, `email`, `rua`, `cidade`, `cep`, `numero`, `bairro`, `observacoes`, `total`, `codigo_venda`) VALUES
(98, 10, 'teste@email', '', '', '', '', '', '', 99.99, '159484449736');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
