-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Jul-2018 às 03:10
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmbsystem`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cacambas`
--

CREATE TABLE `cacambas` (
  `id` int(10) UNSIGNED NOT NULL,
  `numero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cacambas`
--

INSERT INTO `cacambas` (`id`, `numero`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Alugada', '2018-06-05 00:28:29', '2018-06-13 18:09:06'),
(2, '2', 'Alugada', '2018-06-05 00:42:26', '2018-06-15 18:16:31'),
(3, '3', 'Livre', '2018-06-05 00:42:38', '2018-06-14 00:35:22'),
(4, '4', 'Livre', '2018-06-05 00:43:14', '2018-06-05 00:43:14'),
(5, '5', 'Livre', '2018-06-05 02:45:10', '2018-06-05 02:45:10'),
(6, '6', 'Livre', '2018-06-05 02:45:26', '2018-06-05 02:45:26'),
(7, '7', 'Livre', '2018-06-05 02:45:39', '2018-06-05 02:45:39'),
(8, '8', 'Livre', '2018-06-05 02:47:18', '2018-06-05 02:47:18'),
(9, '9', 'Livre', '2018-06-05 02:47:45', '2018-06-05 02:47:45'),
(10, '10', 'Livre', '2018-06-05 02:48:05', '2018-06-05 02:48:05'),
(11, '11', 'Livre', '2018-06-05 02:48:31', '2018-06-05 02:48:31'),
(12, '12', 'Livre', '2018-06-05 02:48:46', '2018-06-05 02:48:46'),
(13, '13', 'Livre', '2018-06-05 04:13:51', '2018-06-05 04:13:51'),
(14, '14', 'Livre', '2018-06-05 04:14:33', '2018-06-05 04:14:33'),
(15, '15', 'Livre', '2018-06-05 04:23:05', '2018-06-05 04:23:05'),
(16, '16', 'Livre', '2018-06-05 04:25:59', '2018-06-05 04:25:59'),
(17, '17', 'Livre', '2018-06-05 04:41:27', '2018-06-05 04:41:27'),
(18, '18', 'Livre', '2018-06-05 04:41:55', '2018-06-05 04:41:55'),
(19, '19', 'Livre', '2018-06-05 20:40:52', '2018-06-05 20:40:52'),
(20, '20', 'Livre', '2018-06-05 20:54:00', '2018-06-05 20:54:00'),
(21, '21', 'Livre', '2018-06-05 20:56:07', '2018-06-05 20:56:07'),
(22, '22', 'Livre', '2018-06-05 20:57:21', '2018-06-05 20:57:21'),
(23, '23', 'Livre', '2018-06-05 21:00:45', '2018-06-05 21:00:45'),
(24, '24', 'Livre', '2018-06-05 21:04:31', '2018-06-05 21:04:31'),
(25, '25', 'Livre', '2018-06-05 21:06:33', '2018-06-05 21:06:33'),
(26, '26', 'Livre', '2018-06-05 21:07:14', '2018-06-05 21:07:14'),
(27, '27', 'Livre', '2018-06-05 21:10:33', '2018-06-05 21:10:33'),
(28, '28', 'Livre', '2018-06-05 21:14:20', '2018-06-05 21:14:20'),
(29, '29', 'Livre', '2018-06-05 21:14:56', '2018-06-05 21:14:56'),
(30, '30', 'Livre', '2018-06-05 21:17:34', '2018-06-05 21:17:34'),
(31, '31', 'Livre', '2018-06-05 21:18:08', '2018-06-05 21:18:08'),
(32, '32', 'Livre', '2018-06-05 21:19:50', '2018-06-05 21:19:50'),
(33, '33', 'Livre', '2018-06-05 21:41:26', '2018-06-05 21:41:26'),
(34, '34', 'Livre', '2018-06-05 21:44:02', '2018-06-05 21:44:02'),
(35, '35', 'Livre', '2018-06-05 21:44:29', '2018-06-05 21:44:29'),
(36, '36', 'Livre', '2018-06-05 21:44:47', '2018-06-05 21:44:47'),
(37, '37', 'Livre', '2018-06-05 21:50:01', '2018-06-05 21:50:01'),
(38, '38', 'Livre', '2018-06-05 21:55:46', '2018-06-05 21:55:46'),
(39, '39', 'Livre', '2018-06-05 21:55:46', '2018-06-05 21:55:46'),
(40, '40', 'Livre', '2018-06-05 22:00:17', '2018-06-05 22:00:17'),
(41, '41', 'Livre', '2018-06-05 22:00:17', '2018-06-05 22:00:17'),
(42, '42', 'Livre', '2018-06-05 22:01:18', '2018-06-05 22:01:18'),
(43, '43', 'Livre', '2018-06-05 22:03:42', '2018-06-05 22:03:42'),
(44, '44', 'Livre', '2018-06-05 22:07:55', '2018-06-05 22:07:55'),
(45, '45', 'Livre', '2018-06-05 22:08:06', '2018-06-05 22:08:06'),
(46, '46', 'Livre', '2018-06-05 22:08:48', '2018-06-05 22:08:48'),
(47, '47', 'Livre', '2018-06-05 22:08:53', '2018-06-05 22:08:53'),
(48, '48', 'Livre', '2018-06-05 22:09:04', '2018-06-05 22:09:04'),
(49, '49', 'Livre', '2018-06-06 15:36:32', '2018-06-06 15:36:32'),
(50, '50', 'Livre', '2018-06-06 17:24:12', '2018-06-06 17:24:12'),
(51, '51', 'Livre', '2018-06-06 17:25:50', '2018-06-06 17:25:50'),
(52, '52', 'Livre', '2018-06-06 17:27:24', '2018-06-06 17:27:24'),
(53, '53', 'Livre', '2018-06-06 17:30:31', '2018-06-06 17:30:31'),
(54, '54', 'Livre', '2018-06-06 17:31:15', '2018-06-06 17:31:15'),
(55, '55', 'Livre', '2018-06-06 17:32:46', '2018-06-06 17:32:46'),
(56, '56', 'Livre', '2018-06-06 17:34:40', '2018-06-06 17:34:40'),
(57, '57', 'Livre', '2018-06-06 17:41:04', '2018-06-06 17:41:04'),
(58, '58', 'Livre', '2018-06-08 21:32:13', '2018-06-10 20:21:32'),
(59, '59', 'Livre', '2018-06-11 19:34:19', '2018-06-11 19:34:46'),
(60, '60', 'Livre', '2018-06-11 20:43:20', '2018-06-14 21:02:19'),
(61, '61', 'Livre', '2018-06-18 21:28:53', '2018-06-18 21:28:53'),
(62, '62', 'Livre', '2018-07-09 19:38:17', '2018-07-09 19:38:17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nascimento` date NOT NULL,
  `endereco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admissao` date NOT NULL,
  `demissao` date NOT NULL,
  `salario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `rg`, `cpf`, `tel`, `email`, `nascimento`, `endereco`, `cep`, `cidade`, `uf`, `cargo`, `admissao`, `demissao`, `salario`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Jonas de Oliveira Duarte', '46.702.818-7', '395.728.068-07', '1146484851', 'jonas_oliveira546@hotmail.com', '1990-06-17', 'Rua Piauí Nº 117 Vila Miranda', '08572-510', 'Itaquaquecetuba', 'SP', 'Gerente', '2012-01-01', '2012-01-01', '15000,00', 'Ativo', '2018-06-08 23:46:07', '2018-06-08 23:46:07'),
(4, 'Dino da Silva Sauro', '28.374.666-6', '127.336.447-78', '1147576877', 'dino_silva@gmail.com', '1972-04-12', 'Rua Piauí Nº 1234 Vila Miranda', '08572-510', 'Itaquaquecetuba', 'SP', 'Motorista', '2012-01-01', '2012-01-01', '2500,00', 'Ativo', '2018-06-09 16:29:04', '2018-06-09 16:29:04'),
(5, 'Ramon Valdez', '11.434.667-8', '232.246.667-55', '1134567889', 'seumadruga@live.com', '1968-09-02', 'Vila do Chaves Nº 72', '12354-678', 'São Paulo', 'SP', 'Motorista', '2012-01-01', '2012-01-01', '3000,00', 'Ativo', '2018-06-09 16:35:06', '2018-06-09 16:35:06'),
(6, 'Teste2', '11.111.111-1', '111.111.111-11', '11111111111', 'teste3', '1992-01-02', 'Rua Piauí Nº 00 Vila Miranda', '08572-510', 'São Paulo', 'SP', 'Porteiro', '2012-01-01', '2018-06-08', '2800,00', 'Desligado', '2018-06-10 03:05:04', '2018-06-15 06:20:53'),
(7, 'Maria de Fátima dos Prazeres', '47.464.555-5', '3.998.576-56', '1134756689', 'fatinha@gmail.com', '1993-03-28', 'Rua Teste, Nº 12 - Tatuapé', '12244-455', 'São Paulo', 'SP', 'Atendente', '2012-01-01', '2012-01-01', '2750,00', 'Ativo', '2018-06-14 21:59:30', '2018-06-14 22:03:55'),
(8, 'Godofredo Silva', '28.374.666-6', '232.246.667-55', '1146475643', 'godofredo@bol.com', '1975-03-14', 'Rua Piauí Nº 2304 Vila Miranda,', '08572-510', 'Itaquaquecetuba', 'SP', 'Porteiro', '2018-06-13', '2018-06-13', '3000,00', 'Ativo', '2018-06-15 06:17:46', '2018-06-15 06:17:46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gastos`
--

CREATE TABLE `gastos` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtde` int(11) NOT NULL,
  `valor` double(8,2) NOT NULL,
  `data` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `gastos`
--

INSERT INTO `gastos` (`id`, `user_id`, `nome`, `descricao`, `qtde`, `valor`, `data`, `created_at`, `updated_at`) VALUES
(1, 3, 'Pacote 500 folhas de Sulfite Report', 'material', 1, 20.00, '2018-06-14', '2018-06-14 20:36:12', '2018-06-14 20:36:12'),
(2, 3, 'Máquina de Café', 'equipamento', 1, 300.00, '2018-06-15', '2018-06-16 01:17:53', '2018-06-16 01:17:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `locacaos`
--

CREATE TABLE `locacaos` (
  `id` int(10) UNSIGNED NOT NULL,
  `motorista_ida` int(10) UNSIGNED NOT NULL,
  `motorista_volta` int(10) UNSIGNED NOT NULL,
  `id_cacamba` int(10) UNSIGNED NOT NULL,
  `cliente` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endereco` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cep` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cidade` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valor_unit` double(8,2) NOT NULL,
  `dias` int(11) NOT NULL,
  `total` double(8,2) NOT NULL,
  `inicio` date NOT NULL,
  `fim` date NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `locacaos`
--

INSERT INTO `locacaos` (`id`, `motorista_ida`, `motorista_volta`, `id_cacamba`, `cliente`, `endereco`, `cep`, `cidade`, `uf`, `valor_unit`, `dias`, `total`, `inicio`, `fim`, `status`, `created_at`, `updated_at`) VALUES
(17, 4, 4, 1, 'Jonas de Oliveira Duarte', 'Rua Piauí Nº 117 Vila Miranda', '08572-510', 'Itaquaquecetuba', 'SP', 10.00, 30, 300.00, '2018-06-13', '2018-07-13', 'Aberto', '2018-06-13 18:09:06', '2018-06-13 18:09:06'),
(18, 4, 5, 2, 'Supermercado Pepe', 'Rua Vela, Nº 888 - São Miguel Pta.', '12423-234', 'São Paulo', 'SP', 10.00, 60, 600.00, '2018-06-15', '2018-08-15', 'Aberto', '2018-06-15 18:16:31', '2018-06-15 18:16:31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_04_171059_create_cacambas_table', 1),
(4, '2018_06_08_141812_funcionario', 2),
(5, '2018_06_08_150331_funcionario', 3),
(6, '2018_06_08_153032_create_funcionarios_table', 4),
(7, '2018_06_08_170233_create_funcionarios_table', 5),
(8, '2018_06_11_173119_create_locacaos_table', 6),
(9, '2018_06_14_100900_create_gastos_table', 7),
(10, '2018_06_14_102050_create_gastos_table', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@admin.com', '$2y$10$e.iM54MomhnV5/ns3vNHG.vEDKZTeuh7MQ3G.rk/kaOfG3gKhST1e', 'B76rovYfO0TMKAzQRC6zFi2JbAJ4nXNNK7M0R0j3stghOOl5Vis8nkqtlFi4', '2018-06-20 15:39:07', '2018-06-20 18:05:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cacambas`
--
ALTER TABLE `cacambas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gastos_user_id_foreign` (`user_id`);

--
-- Indexes for table `locacaos`
--
ALTER TABLE `locacaos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cacambas`
--
ALTER TABLE `cacambas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `locacaos`
--
ALTER TABLE `locacaos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `gastos`
--
ALTER TABLE `gastos`
  ADD CONSTRAINT `gastos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `funcionarios` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
