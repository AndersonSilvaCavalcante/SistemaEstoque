-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 02-Jun-2019 às 19:22
-- Versão do servidor: 5.7.21-1
-- PHP Version: 7.2.4-1+b1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `nome` varchar(20) DEFAULT NULL,
  `endereco` varchar(30) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `cnpj` varchar(14) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`nome`, `endereco`, `telefone`, `cnpj`, `id`) VALUES
('Coca-Cola', 'Rua 6, jereissati', '85912345678', '12345678912345', 1),
('Coca-Cola', 'Rua 6, jereissati', '85912345678', '12345678912345', 2),
('Sadia', 'Rua 42, jereissati 6', '85123456', '12345678912345', 3),
('Logitech', '85933717171', '85933717171', '56895115545566', 4),
('', '', '', '', 5),
('', '', '', '', 6),
('', '', '', '', 7),
('', '', '', '', 8),
('', '', '', '', 9),
('', '', '', '', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `gerente`
--

CREATE TABLE `gerente` (
  `nome` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `gerente`
--

INSERT INTO `gerente` (`nome`, `email`, `senha`, `id`) VALUES
('Anderson', 'gerente@mail.com', 'gerente', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `nome` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `validade` varchar(10) DEFAULT NULL,
  `quantidade` int(4) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `fornecedor` varchar(20) DEFAULT NULL,
  `fila` varchar(1) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `setor` int(1) DEFAULT NULL,
  `bloco` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`nome`, `validade`, `quantidade`, `tipo`, `preco`, `fornecedor`, `fila`, `id`, `setor`, `bloco`) VALUES
('acucar', '2019-06-21', 0, 'alimento', 99.99, 'Sadia', 'A', 26, 1, 'B'),
('Frango', '2019-08-17', 110, 'alimento', 15.56, 'Sadia', 'A', 27, 1, 'C'),
('Coca 2L', '2019-11-23', 300, 'Bebida', 6.5, 'Coca-Cola', 'A', 28, 3, 'D'),
('Coca 2,5L', '2019-07-01', 300, 'Bebida', 8.5, 'Coca-Cola', 'A', 29, 1, 'D'),
('Chave de fenda', '2019-09-19', 96, 'Bebida', 5.66, 'Sadia', 'A', 30, 1, 'D'),
('Anderson Cavalcante', '', 59, 'alimento', 12.58, 'Coca-Cola', 'A', 31, 1, 'C'),
('Kapo 200ml', '2020-02-12', 0, 'Bebida', 999.99, 'Coca-Cola', 'A', 32, 1, 'A'),
('Ideapad 310', '', 96, 'Computador/ Notebook', 999.99, 'Sadia', 'H', 33, 2, 'A'),
('Vick', '2019-06-01', 3, 'alimento', 8.99, 'Coca-Cola', 'H', 34, 3, 'D'),
('Mouse', '', 300, 'AcessÃ³rio', 56.5, 'Sadia', 'A', 35, 2, 'D');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessao`
--

CREATE TABLE `sessao` (
  `nome` varchar(20) NOT NULL,
  `hora_entrada` varchar(15) NOT NULL,
  `hora_saida` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(2, 'Anderson Silva', 'andersonsilvaacaval@gmail.com', '12345678'),
(3, 'Anderson Silva', 'andersonsilvaacaval@gmail.com', 'asc01032'),
(4, 'Anderson Silva', 'andersonsilvaacaval@gmail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gerente`
--
ALTER TABLE `gerente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `gerente`
--
ALTER TABLE `gerente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
