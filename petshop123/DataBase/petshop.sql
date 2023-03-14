-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Set-2022 às 13:34
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `petshop`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `cnpj` varchar(14) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`cnpj`, `nome`, `senha`) VALUES
('23042122107157', 'addevpets', 'DevPets115');

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `horario` varchar(5) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `datas` date NOT NULL,
  `tipoconsulta` varchar(40) NOT NULL,
  `id` int(11) NOT NULL,
  `nome_animal` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`horario`, `cpf`, `datas`, `tipoconsulta`, `id`, `nome_animal`) VALUES
('11:00', '52321117877', '2022-09-07', '', 1, ''),
('13:00', '52321117877', '2022-09-06', '', 2, ''),
('14:00', '53898922839', '2022-09-28', 'Hospedagem', 3, ''),
('12:00', '52321117877', '2022-08-31', 'Táxi dog', 4, ''),
('13:00', '53898922839', '2022-08-31', 'Tingimento', 5, ''),
('13:00', '53898922839', '2022-08-31', 'Tingimento', 6, ''),
('13:00', '53898922839', '2022-09-28', 'Tosas', 7, ''),
('14:00', '53898922839', '2022-09-28', 'Tosas', 8, ''),
('15:00', '52321117877', '2022-09-14', 'Laboratório', 9, ''),
('14:00', '52321117877', '2022-08-30', 'Tingimento', 10, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `animais`
--

CREATE TABLE `animais` (
  `id` int(11) NOT NULL,
  `nome_animal` varchar(200) NOT NULL,
  `animal` varchar(100) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `sexo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `animais`
--

INSERT INTO `animais` (`id`, `nome_animal`, `animal`, `cpf`, `sexo`) VALUES
(20, 'mel', 'cachorro', '52321117877', 'm'),
(22, 'jujuba', 'lagarto', '52321117877', 'm'),
(23, 'jujuba', 'Cachorro', '52321117877', 'M'),
(24, 'mel', 'Peixe', '52321117877', 'F'),
(25, 'jujuba', 'Cachorro', '47478088848', 'M'),
(26, 'Oi', 'Cachorro', '47478088848', 'M');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(200) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `endereco` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `cpf`, `senha`, `endereco`) VALUES
('claudiao', '47157963841', '12345', 'rua comilona');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `animais`
--
ALTER TABLE `animais`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `animais`
--
ALTER TABLE `animais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
