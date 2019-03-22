-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Mar-2019 às 16:39
-- Versão do servidor: 10.1.34-MariaDB
-- versão do PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fraex`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `emp_tb_register`
--

CREATE TABLE `emp_tb_register` (
  `emp_in_id` int(4) NOT NULL,
  `res_in_id` int(4) NOT NULL,
  `emp_st_rg` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `emp_st_cpf` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `emp_st_sexo` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `func_in_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `function_tb_register`
--

CREATE TABLE `function_tb_register` (
  `function_in_id` int(5) NOT NULL,
  `function_st_desc` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `glo_tb_coin`
--

CREATE TABLE `glo_tb_coin` (
  `coin_in_id` int(11) NOT NULL,
  `coin_st_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `coin_st_symbol` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `coin_re_fee` decimal(18,2) NOT NULL,
  `coin_st_mask` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `coin_st_apisymbol` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `coin_re_lastprice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `glo_tb_coin`
--

INSERT INTO `glo_tb_coin` (`coin_in_id`, `coin_st_name`, `coin_st_symbol`, `coin_re_fee`, `coin_st_mask`, `coin_st_apisymbol`, `coin_re_lastprice`) VALUES
(1, 'Bitcoin', 'BTC', '0.20', '0,00000000', 'BTCUSDT', 0),
(2, 'Ethereum', 'ETH', '0.20', '0,000000000000000000', 'ETHUSDT', 0),
(3, 'Litecoin', 'LTC', '0.20', '0,00', 'LTCUSDT', 0),
(4, 'Cardano', 'ADA', '0.20', '0,000', 'ADAUSDT', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `glo_vw_orderbtc`
--

CREATE TABLE `glo_vw_orderbtc` (
  `res_st_username` varchar(15) DEFAULT NULL,
  `res_st_email` varchar(40) DEFAULT NULL,
  `res_st_userid` varchar(30) DEFAULT NULL,
  `order_in_id` int(11) DEFAULT NULL,
  `order_re_vlr` decimal(18,2) DEFAULT NULL,
  `order_re_price` decimal(18,2) DEFAULT NULL,
  `order_dt_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `glo_vw_ordereth`
--

CREATE TABLE `glo_vw_ordereth` (
  `res_st_username` varchar(15) DEFAULT NULL,
  `res_st_email` varchar(40) DEFAULT NULL,
  `res_st_userid` varchar(30) DEFAULT NULL,
  `order_in_id` int(11) DEFAULT NULL,
  `order_re_vlr` decimal(18,2) DEFAULT NULL,
  `order_re_price` decimal(18,2) DEFAULT NULL,
  `order_dt_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `glo_vw_orderltc`
--

CREATE TABLE `glo_vw_orderltc` (
  `res_st_username` varchar(15) DEFAULT NULL,
  `res_st_email` varchar(40) DEFAULT NULL,
  `res_st_userid` varchar(30) DEFAULT NULL,
  `order_in_id` int(11) DEFAULT NULL,
  `order_re_vlr` decimal(18,2) DEFAULT NULL,
  `order_re_price` decimal(18,2) DEFAULT NULL,
  `order_dt_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `glo_vw_profile`
--

CREATE TABLE `glo_vw_profile` (
  `res_st_username` varchar(15) DEFAULT NULL,
  `res_st_name` varchar(30) DEFAULT NULL,
  `res_st_email` varchar(40) DEFAULT NULL,
  `wallet_st_addr` varchar(80) DEFAULT NULL,
  `coin_in_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `moedas`
--

CREATE TABLE `moedas` (
  `moedasid` int(11) NOT NULL,
  `currency_st_apisymbol` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `currency_st_symbol` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `moedas`
--

INSERT INTO `moedas` (`moedasid`, `currency_st_apisymbol`, `currency_st_symbol`, `nome`) VALUES
(1, 'USD', '$', 'US Dollar'),
(2, 'EUR', '€', 'Euro'),
(3, 'GBP', '£', 'Pound Sterling'),
(4, 'BRL', 'R$', 'Brazilian Real');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_tb_order`
--

CREATE TABLE `user_tb_order` (
  `order_in_id` int(11) NOT NULL,
  `res_in_id` int(11) DEFAULT NULL,
  `coin_in_id` int(11) DEFAULT NULL,
  `wallet_st_addr` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_re_vlr` decimal(18,8) NOT NULL,
  `order_re_price` int(18) NOT NULL,
  `order_dt_date` date NOT NULL,
  `order_st_status` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user_tb_order`
--

INSERT INTO `user_tb_order` (`order_in_id`, `res_in_id`, `coin_in_id`, `wallet_st_addr`, `order_re_vlr`, `order_re_price`, `order_dt_date`, `order_st_status`) VALUES
(1, 2, 4, 'teste', '9.46172799', 2222, '2019-03-21', 'Sem confirmaÃ§Ã£o'),
(2, 2, 4, 'teste2', '4.10639135', 2222, '2019-03-21', 'Sem confirmaÃ§Ã£o'),
(3, 2, 4, 'teste3', '9.46821751', 2222, '2019-03-21', 'Sem confirmaÃ§Ã£o'),
(4, 2, 4, 'teste3', '9.46821751', 2222, '2019-03-21', 'Sem confirmaÃ§Ã£o');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_tb_register`
--

CREATE TABLE `user_tb_register` (
  `res_in_id` int(9) NOT NULL,
  `res_st_username` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `res_st_passwrd` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `res_st_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `res_st_email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `res_st_userid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `res_dt_date` date NOT NULL,
  `res_in_usertype` int(1) NOT NULL DEFAULT '0',
  `res_in_able` int(11) DEFAULT NULL,
  `wallet_in_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `user_tb_register`
--

INSERT INTO `user_tb_register` (`res_in_id`, `res_st_username`, `res_st_passwrd`, `res_st_name`, `res_st_email`, `res_st_userid`, `res_dt_date`, `res_in_usertype`, `res_in_able`, `wallet_in_id`) VALUES
(1, 'admfrade', '$2y$10$OrYAjKExWiTvfduCcOh34OCQpCXzU.a7W.UXaQoTo9p5PJPaXidc2', 'Alexandre', 'admfrade@gmail.com', '36147152807', '2018-09-25', 1, 1, NULL),
(2, 'sebaskun98', '$2y$10$OIw9/62hpC38RleQPUo0sO9bppn0fR3fJPsrZK5RnjcbbGX9V4ke.', 'Sebastian', 'sebastiansanchezvega@gmail.com', '2134234234', '2018-09-25', 1, 1, NULL),
(3, 'brendo', '$2y$10$DlToV8kdZm7ZCWfsrsTrHudOt7np8W0YDfN3Z/O7XNSTkbjLfZuFW', 'Brendo', 'brendo_poke@hotmail.com', '1234', '2018-09-29', 1, 1, NULL),
(5, 'teste', '$2y$10$XVhcmHspEUUnxJBHJ/oVs.5KKowBAbursmouZdlZXfJr498wiFRK2', 'testes', 'teste@gmail.com', '123', '2019-03-13', 0, 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `wallet_tb_address`
--

CREATE TABLE `wallet_tb_address` (
  `wallet_in_id` int(11) NOT NULL,
  `wallet_st_addr` varchar(80) NOT NULL,
  `res_in_id` int(11) DEFAULT NULL,
  `coin_in_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `function_tb_register`
--
ALTER TABLE `function_tb_register`
  ADD PRIMARY KEY (`function_in_id`);

--
-- Indexes for table `glo_tb_coin`
--
ALTER TABLE `glo_tb_coin`
  ADD PRIMARY KEY (`coin_in_id`);

--
-- Indexes for table `moedas`
--
ALTER TABLE `moedas`
  ADD PRIMARY KEY (`moedasid`);

--
-- Indexes for table `user_tb_order`
--
ALTER TABLE `user_tb_order`
  ADD PRIMARY KEY (`order_in_id`),
  ADD KEY `res_in_id` (`res_in_id`),
  ADD KEY `coin_in_id` (`coin_in_id`);

--
-- Indexes for table `user_tb_register`
--
ALTER TABLE `user_tb_register`
  ADD PRIMARY KEY (`res_in_id`),
  ADD UNIQUE KEY `res_st_username` (`res_st_username`),
  ADD UNIQUE KEY `res_st_email` (`res_st_email`);

--
-- Indexes for table `wallet_tb_address`
--
ALTER TABLE `wallet_tb_address`
  ADD PRIMARY KEY (`wallet_in_id`),
  ADD UNIQUE KEY `wallet_st_addr` (`wallet_st_addr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `function_tb_register`
--
ALTER TABLE `function_tb_register`
  MODIFY `function_in_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `glo_tb_coin`
--
ALTER TABLE `glo_tb_coin`
  MODIFY `coin_in_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `moedas`
--
ALTER TABLE `moedas`
  MODIFY `moedasid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_tb_order`
--
ALTER TABLE `user_tb_order`
  MODIFY `order_in_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_tb_register`
--
ALTER TABLE `user_tb_register`
  MODIFY `res_in_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wallet_tb_address`
--
ALTER TABLE `wallet_tb_address`
  MODIFY `wallet_in_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `user_tb_order`
--
ALTER TABLE `user_tb_order`
  ADD CONSTRAINT `user_tb_order_ibfk_1` FOREIGN KEY (`res_in_id`) REFERENCES `user_tb_register` (`res_in_id`),
  ADD CONSTRAINT `user_tb_order_ibfk_2` FOREIGN KEY (`coin_in_id`) REFERENCES `glo_tb_coin` (`coin_in_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
