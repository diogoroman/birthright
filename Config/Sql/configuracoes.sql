-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2010 at 03:45 PM
-- Server version: 5.1.49
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `advocacia`
--

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `alias`) VALUES
(1, 'Administrador', 'admin');

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address_street`, `address_number`, `address_zip`, `address_region`, `phone`, `city_id`, `cpf`, `password`, `username`) VALUES
(1, 'Administrador', '', '', '', '', '555555555', 0, '3333333333', '2955429ffc2a0b0324a489fa784f50966a994b00', 'admin');

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1);

--
-- Dumping data for table `vehicle_types`
--
INSERT INTO `vehicle_types` (`id`, `title`, `created`, `modified`) VALUES
(1, 'Carro', '2011-01-18 14:53:10', '2011-01-18 14:53:13'),
(2, 'Moto', '2011-01-18 14:53:27', '2011-01-18 14:53:31');

