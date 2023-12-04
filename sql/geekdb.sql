-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/12/2023 às 16:21
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `geekdb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `geekdb.phpadmins`
--

CREATE TABLE `geekdb.phpadmins` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `geekperson`
--

CREATE TABLE `geekperson` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `checkbox` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `geekperson`
--

INSERT INTO `geekperson` (`id`, `fname`, `lname`, `birthday`, `email`, `checkbox`) VALUES
(25, 'Andreia', 'Dourado', '1998-05-14', 'deiaaraujops@gmail.com', 'Music'),
(26, 'Andreia', 'Dourado', '1993-05-14', 'andydourado@hotmail.com', 'Array');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `geekdb.phpadmins`
--
ALTER TABLE `geekdb.phpadmins`
  ADD PRIMARY KEY (`user_id`);

--
-- Índices de tabela `geekperson`
--
ALTER TABLE `geekperson`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `geekdb.phpadmins`
--
ALTER TABLE `geekdb.phpadmins`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `geekperson`
--
ALTER TABLE `geekperson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
