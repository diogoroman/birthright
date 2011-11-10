SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE IF NOT EXISTS `ufs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `acronym` varchar(2) NOT NULL,
  `name` varchar(40) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

INSERT INTO `ufs` (`id`, `acronym`, `name`, `created`, `modified`) VALUES
(1, 'AC', 'Acre', '2009-10-16 21:43:12', NULL),
(2, 'AL', 'Alagoas', '2009-10-16 21:43:12', NULL),
(3, 'AP', 'Amapá', '2009-10-16 21:43:12', NULL),
(4, 'AM', 'Amazonas', '2009-10-16 21:43:12', NULL),
(5, 'BA', 'Bahia', '2009-10-16 21:43:12', NULL),
(6, 'CE', 'Ceará', '2009-10-16 21:43:12', NULL),
(7, 'DF', 'Distrito Federal', '2009-10-16 21:43:12', NULL),
(8, 'ES', 'Espírito Santo', '2009-10-16 21:43:12', NULL),
(9, 'GO', 'Goiás', '2009-10-16 21:43:12', NULL),
(10, 'MA', 'Maranhão', '2009-10-16 21:43:12', NULL),
(11, 'MT', 'Mato Grosso', '2009-10-16 21:43:12', NULL),
(12, 'MS', 'Mato Grosso do Sul', '2009-10-16 21:43:12', NULL),
(13, 'MG', 'Minas Gerais', '2009-10-16 21:43:12', NULL),
(14, 'PA', 'Pará', '2009-10-16 21:43:12', NULL),
(15, 'PB', 'Paraíba', '2009-10-16 21:43:12', NULL),
(16, 'PR', 'Paraná', '2009-10-16 21:43:12', NULL),
(17, 'PE', 'Pernambuco', '2009-10-16 21:43:12', NULL),
(18, 'PI', 'Piauí', '2009-10-16 21:43:12', NULL),
(19, 'RJ', 'Rio de Janeiro', '2009-10-16 21:43:12', NULL),
(20, 'RN', 'Rio Grande do Norte', '2009-10-16 21:43:12', NULL),
(21, 'RS', 'Rio Grande do Sul', '2009-10-16 21:43:12', NULL),
(22, 'RO', 'Rondônia', '2009-10-16 21:43:12', NULL),
(23, 'RR', 'Roraima', '2009-10-16 21:43:12', NULL),
(24, 'SC', 'Santa Catarina', '2009-10-16 21:43:12', NULL),
(25, 'SP', 'São Paulo', '2009-10-16 21:43:12', NULL),
(26, 'SE', 'Sergipe', '2009-10-16 21:43:12', NULL),
(27, 'TO', 'Tocantins', '2009-10-16 21:43:12', NULL);
