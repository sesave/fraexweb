-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 08-Maio-2019 às 21:03
-- Versão do servidor: 10.3.14-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6835234_fraex`
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
-- Stand-in structure for view `glo_vw_orderada`
-- (See below for the actual view)
--
CREATE TABLE `glo_vw_orderada` (
`res_st_username` varchar(15)
,`res_st_email` varchar(40)
,`res_st_userid` varchar(30)
,`order_in_id` int(11)
,`order_re_vlr` decimal(18,2)
,`order_re_price` decimal(18,2)
,`order_dt_date` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `glo_vw_orderbtc`
-- (See below for the actual view)
--
CREATE TABLE `glo_vw_orderbtc` (
`res_st_username` varchar(15)
,`res_st_email` varchar(40)
,`res_st_userid` varchar(30)
,`order_in_id` int(11)
,`order_re_vlr` decimal(18,2)
,`order_re_price` decimal(18,2)
,`order_dt_date` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `glo_vw_ordereth`
-- (See below for the actual view)
--
CREATE TABLE `glo_vw_ordereth` (
`res_st_username` varchar(15)
,`res_st_email` varchar(40)
,`res_st_userid` varchar(30)
,`order_in_id` int(11)
,`order_re_vlr` decimal(18,2)
,`order_re_price` decimal(18,2)
,`order_dt_date` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `glo_vw_orderltc`
-- (See below for the actual view)
--
CREATE TABLE `glo_vw_orderltc` (
`res_st_username` varchar(15)
,`res_st_email` varchar(40)
,`res_st_userid` varchar(30)
,`order_in_id` int(11)
,`order_re_vlr` decimal(18,2)
,`order_re_price` decimal(18,2)
,`order_dt_date` date
);

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
(4, 'BRL', 'R$', 'Brazilian Real'),
(5, 'CAD', 'C$', 'Canadian Dollar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_tb_order`
--

CREATE TABLE `user_tb_order` (
  `order_in_id` int(11) NOT NULL,
  `res_in_id` int(11) DEFAULT NULL,
  `coin_in_id` int(11) DEFAULT NULL,
  `wallet_st_addr` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_re_vlr` decimal(18,2) NOT NULL,
  `order_re_price` decimal(18,2) NOT NULL,
  `order_dt_date` date NOT NULL,
  `order_in_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `user_tb_order`
--

INSERT INTO `user_tb_order` (`order_in_id`, `res_in_id`, `coin_in_id`, `wallet_st_addr`, `order_re_vlr`, `order_re_price`, `order_dt_date`, `order_in_status`) VALUES
(3, 2, 1, '5', '550.00', '555.00', '2018-11-12', 1),
(4, 1, 1, '2', '28.00', '555.00', '2018-11-12', 1),
(5, 1, 1, '2', '20.00', '555.00', '2018-11-12', 1),
(6, 2, 2, '1', '500.00', '900.00', '2018-11-28', 1),
(7, 2, 3, '3', '100.00', '950.00', '2018-11-28', 1),
(8, 2, 4, '4', '600.00', '980.00', '2018-11-30', 1),
(9, 1, 1, '2', '2220.00', '555.00', '2018-11-30', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_tb_register`
--

CREATE TABLE `user_tb_register` (
  `res_in_id` int(9) NOT NULL,
  `res_st_username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `res_st_passwrd` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `res_st_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `res_st_email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `res_st_userid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `res_dt_date` date NOT NULL,
  `res_st_devkey` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `res_in_usertype` int(1) NOT NULL DEFAULT 0,
  `res_in_able` int(11) DEFAULT NULL,
  `wallet_st_addr` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wallet_st_addr2` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wallet_st_addr3` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wallet_st_addr4` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `user_tb_register`
--

INSERT INTO `user_tb_register` (`res_in_id`, `res_st_username`, `res_st_passwrd`, `res_st_name`, `res_st_email`, `res_st_userid`, `res_dt_date`, `res_st_devkey`, `res_in_usertype`, `res_in_able`, `wallet_st_addr`, `wallet_st_addr2`, `wallet_st_addr3`, `wallet_st_addr4`) VALUES
(1, 'admfrade', '$2y$10$/KavZw3U/BuEgf.iyIhybOX4oLVTS91b0ETO5bAEtFXuVIl0H8tXy', 'Alexandre', 'admfrade@gmail.com', '36147152807', '2018-09-25', '$2y$07$NVjigwCDZQvy7bVh55BZ5u0tIfWiQ272wk2TqhpVAPp9eGnxCnuNS', 1, 1, 'f759c9cf6fb80a0549b1b2179d09f432', NULL, NULL, NULL),
(2, 'sebaskun98', '$2y$10$OIw9/62hpC38RleQPUo0sO9bppn0fR3fJPsrZK5RnjcbbGX9V4ke.', 'Sebastian', 'sebastiansanchezvega@gmail.com', '2134234234', '2018-09-25', '0', 1, 1, 'd10a0e12cc5edb42beff8744f53db304', 'b457efc051ce4f0ebf0861e9f5857053', '3bea1f69904020c35ae85aff192a29b6', 'fd9d0abf819c1defc41a097019959568'),
(3, 'brendo', '$2y$10$DlToV8kdZm7ZCWfsrsTrHudOt7np8W0YDfN3Z/O7XNSTkbjLfZuFW', 'Brendo', 'brendo_poke@hotmail.com', '1234', '2018-09-29', '0', 1, 1, NULL, NULL, NULL, NULL),
(4, 'user123', '$2y$10$Vea81kxSRcQcsyVaI5BuMen63FfyDFJGGX8RodifmZRObIBskyakG', 'User1', '123@mail.com', '123456', '2018-11-12', '0', 0, 1, NULL, NULL, NULL, NULL),
(5, 'ads123', '$2y$10$CxQRUZDLTtK24IxaKciT4.VRLo88KVk2lMJDK4pxiNYET8GCNz2aS', 'ADS', 'ads@faat.com', '11111111111', '2018-11-30', '0', 0, NULL, NULL, NULL, NULL, NULL),
(16, '1234', '$2y$10$yqJEldV.erLe462CfN6IZ.KRWlY7msrl.XS3EA7zeIRFG0wdnSXIe', 'testezzzzzzzzz', 'admin111@example.com', '123', '2019-05-08', NULL, 0, NULL, NULL, NULL, NULL, NULL),
(18, '2', '$2y$10$caG4yLC9cAjspYfi0CaJxemfussLD5C/Beaw4vt0gQfURWNsJiPWy', 'teste', 'sebastian123@saaeatibaia.com.br', '2', '2019-05-08', NULL, 0, NULL, NULL, NULL, NULL, NULL),
(19, '', '$2y$10$Ir8Il7CISkU0nVZ/JzBYZOdaQWOt7zuhp0G5Ku16iEL9JRAZAhXKW', '', '', '', '2019-05-08', NULL, 0, NULL, NULL, NULL, NULL, NULL),
(20, 'sdfsdf', '$2y$10$hAXungECGqRbt5Rr/uerdub5/n7awvupJXEMdmycBAQiMq9utBtOK', 'seu pai', 'seasdad@mail.om', '123', '2019-05-08', NULL, 0, NULL, NULL, NULL, NULL, NULL),
(24, 'fulano', '$2y$10$7cs1ATZX4UJGWE/uQ2wSsemz1PA6p0PHxMqwUKTXfPbRtq5KpHqou', 'Fulano Ciclano', 'fulano@fulanomails.com', '123456789-0', '2019-05-08', '$2y$07$O9nYUd3zLd003Axt.3ibzOwccxe7RWjgGPAEDCWUGLtiDn4/DLr5C', 0, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_tb_wallets`
--

CREATE TABLE `user_tb_wallets` (
  `wallet_in_id` int(11) NOT NULL,
  `wallet_st_addr` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `res_in_id` int(11) NOT NULL,
  `coin_in_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `user_tb_wallets`
--

INSERT INTO `user_tb_wallets` (`wallet_in_id`, `wallet_st_addr`, `res_in_id`, `coin_in_id`) VALUES
(1, 'b457efc051ce4f0ebf0861e9f5857053', 2, 2),
(2, 'f759c9cf6fb80a0549b1b2179d09f432', 1, 1),
(3, '3bea1f69904020c35ae85aff192a29b6', 2, 3),
(4, 'fd9d0abf819c1defc41a097019959568', 2, 4),
(5, 'd10a0e12cc5edb42beff8744f53db304', 2, 1);

-- --------------------------------------------------------

--
-- Structure for view `glo_vw_orderada`
--
DROP TABLE IF EXISTS `glo_vw_orderada`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id6835234_pcc`@`%` SQL SECURITY DEFINER VIEW `glo_vw_orderada`  AS  select `res`.`res_st_username` AS `res_st_username`,`res`.`res_st_email` AS `res_st_email`,`res`.`res_st_userid` AS `res_st_userid`,`odr`.`order_in_id` AS `order_in_id`,`odr`.`order_re_vlr` AS `order_re_vlr`,`odr`.`order_re_price` AS `order_re_price`,`odr`.`order_dt_date` AS `order_dt_date` from (`user_tb_register` `res` join `user_tb_order` `odr`) where `odr`.`coin_in_id` = 4 and `res`.`res_in_id` = `odr`.`res_in_id` ;

-- --------------------------------------------------------

--
-- Structure for view `glo_vw_orderbtc`
--
DROP TABLE IF EXISTS `glo_vw_orderbtc`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id6835234_pcc`@`%` SQL SECURITY DEFINER VIEW `glo_vw_orderbtc`  AS  select `res`.`res_st_username` AS `res_st_username`,`res`.`res_st_email` AS `res_st_email`,`res`.`res_st_userid` AS `res_st_userid`,`odr`.`order_in_id` AS `order_in_id`,`odr`.`order_re_vlr` AS `order_re_vlr`,`odr`.`order_re_price` AS `order_re_price`,`odr`.`order_dt_date` AS `order_dt_date` from (`user_tb_register` `res` join `user_tb_order` `odr`) where `odr`.`coin_in_id` = 1 and `res`.`res_in_id` = `odr`.`res_in_id` ;

-- --------------------------------------------------------

--
-- Structure for view `glo_vw_ordereth`
--
DROP TABLE IF EXISTS `glo_vw_ordereth`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id6835234_pcc`@`%` SQL SECURITY DEFINER VIEW `glo_vw_ordereth`  AS  select `res`.`res_st_username` AS `res_st_username`,`res`.`res_st_email` AS `res_st_email`,`res`.`res_st_userid` AS `res_st_userid`,`odr`.`order_in_id` AS `order_in_id`,`odr`.`order_re_vlr` AS `order_re_vlr`,`odr`.`order_re_price` AS `order_re_price`,`odr`.`order_dt_date` AS `order_dt_date` from (`user_tb_register` `res` join `user_tb_order` `odr`) where `odr`.`coin_in_id` = 2 and `res`.`res_in_id` = `odr`.`res_in_id` ;

-- --------------------------------------------------------

--
-- Structure for view `glo_vw_orderltc`
--
DROP TABLE IF EXISTS `glo_vw_orderltc`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id6835234_pcc`@`%` SQL SECURITY DEFINER VIEW `glo_vw_orderltc`  AS  select `res`.`res_st_username` AS `res_st_username`,`res`.`res_st_email` AS `res_st_email`,`res`.`res_st_userid` AS `res_st_userid`,`odr`.`order_in_id` AS `order_in_id`,`odr`.`order_re_vlr` AS `order_re_vlr`,`odr`.`order_re_price` AS `order_re_price`,`odr`.`order_dt_date` AS `order_dt_date` from (`user_tb_register` `res` join `user_tb_order` `odr`) where `odr`.`coin_in_id` = 3 and `res`.`res_in_id` = `odr`.`res_in_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_tb_register`
--
ALTER TABLE `emp_tb_register`
  ADD PRIMARY KEY (`emp_in_id`);

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
  ADD KEY `res_in_id` (`res_in_id`);

--
-- Indexes for table `user_tb_register`
--
ALTER TABLE `user_tb_register`
  ADD PRIMARY KEY (`res_in_id`),
  ADD UNIQUE KEY `res_st_username` (`res_st_username`),
  ADD UNIQUE KEY `res_st_email` (`res_st_email`),
  ADD KEY `wallet_st_addr` (`wallet_st_addr`),
  ADD KEY `wallet_st_addr2` (`wallet_st_addr2`),
  ADD KEY `wallet_st_addr3` (`wallet_st_addr3`),
  ADD KEY `wallet_st_addr4` (`wallet_st_addr4`);

--
-- Indexes for table `user_tb_wallets`
--
ALTER TABLE `user_tb_wallets`
  ADD PRIMARY KEY (`wallet_in_id`),
  ADD UNIQUE KEY `wallet_st_addr` (`wallet_st_addr`),
  ADD KEY `coin_in_id` (`coin_in_id`),
  ADD KEY `res_in_id` (`res_in_id`);

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
  MODIFY `moedasid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_tb_order`
--
ALTER TABLE `user_tb_order`
  MODIFY `order_in_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_tb_register`
--
ALTER TABLE `user_tb_register`
  MODIFY `res_in_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_tb_wallets`
--
ALTER TABLE `user_tb_wallets`
  MODIFY `wallet_in_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `user_tb_order`
--
ALTER TABLE `user_tb_order`
  ADD CONSTRAINT `user_tb_order_ibfk_1` FOREIGN KEY (`res_in_id`) REFERENCES `user_tb_register` (`res_in_id`);

--
-- Limitadores para a tabela `user_tb_register`
--
ALTER TABLE `user_tb_register`
  ADD CONSTRAINT `user_tb_register_ibfk_1` FOREIGN KEY (`wallet_st_addr`) REFERENCES `user_tb_wallets` (`wallet_st_addr`),
  ADD CONSTRAINT `user_tb_register_ibfk_2` FOREIGN KEY (`wallet_st_addr2`) REFERENCES `user_tb_wallets` (`wallet_st_addr`),
  ADD CONSTRAINT `user_tb_register_ibfk_3` FOREIGN KEY (`wallet_st_addr3`) REFERENCES `user_tb_wallets` (`wallet_st_addr`),
  ADD CONSTRAINT `user_tb_register_ibfk_4` FOREIGN KEY (`wallet_st_addr4`) REFERENCES `user_tb_wallets` (`wallet_st_addr`);

--
-- Limitadores para a tabela `user_tb_wallets`
--
ALTER TABLE `user_tb_wallets`
  ADD CONSTRAINT `user_tb_wallets_ibfk_1` FOREIGN KEY (`coin_in_id`) REFERENCES `glo_tb_coin` (`coin_in_id`),
  ADD CONSTRAINT `user_tb_wallets_ibfk_2` FOREIGN KEY (`res_in_id`) REFERENCES `user_tb_register` (`res_in_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
