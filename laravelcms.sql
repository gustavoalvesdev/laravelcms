-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Mar-2021 às 19:37
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `laravelcms`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `body` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `body`) VALUES
(4, 'Sobre', 'sobre', '<table style=\"width: 97.9899%; height: 104px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 104px; border-style: none;\">\r\n<td style=\"width: 9.59233%; height: 104px;\"><img src=\"http://localhost:8000/media/images/1614792757.jpeg\" alt=\"\" width=\"100\" height=\"100\" /></td>\r\n<td style=\"width: 86.2651%; height: 104px; border-style: none;\" colspan=\"9\">Trabalhei durante v&aacute;rios anos na &aacute;rea de publicidade, com design de pe&ccedil;as gr&aacute;ficas para divulga&ccedil;&otilde;es comerciais. H&aacute; 7 anos decidi mudar os rumos da minha carreira profissional e mudei para a &aacute;rea de TI (Tecnologia da Informa&ccedil;&atilde;o). Sou formado como T&eacute;cnico em Inform&aacute;tica pela ETEC Ferraz de Vasconcelos e atualmente estou no quarto semestre da gradua&ccedil;&atilde;o em Tecnologia em An&aacute;lise e Desenvolvimento de Sistemas na FATEC Ferraz de Vasconcelos.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>Executei projetos em diversas tecnologias para a web, tais como: PHP, NodeJS, ReactJS, Python Django, Microsoft .NET Core, e Java Spring Boot. Tamb&eacute;m possuo experi&ecirc;ncia em desenvolvimento de solu&ccedil;&otilde;es Oracle SuiteScript para a plataforma ERP Oracle NetSuite.</p>\r\n<p>Atualmente, como Embaixador Acad&ecirc;mico da IBM na FATEC Ferraz de Vasconcelos, estou a cargo da divulga&ccedil;&atilde;o e organiza&ccedil;&atilde;o de eventos da IBM na faculdade, voltados para a plataforma mainframe IBM z/OS, tendo contato com tecnologias como COBOL, DB2, UNIX, Linux e JCL.</p>\r\n<p>Recentemente recebi um badge digital como reconhecimento por parte da IBM acerca de meus conhecimentos pr&aacute;ticos na plataforma z/OS, por haver conclu&iacute;do o treinamento da segunda parte do desafio Master The Mainframe 2019.</p>'),
(5, 'Contato', 'contato', 'asfasfasdfasdfasdfas'),
(6, 'Sistema', 'sistema', 'dgasdfasdf asdf asdf asdf asdfasd as');

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `settings`
--

INSERT INTO `settings` (`id`, `name`, `content`) VALUES
(1, 'title', 'Especialista em gerar resultados para o seu negócio!'),
(2, 'subtitle', 'Soluções em desenvolvimento de aplicativos, sites e sistemas.'),
(3, 'email', 'contato@gustavoalvesdev.com.br'),
(4, 'bgcolor', '#de2121'),
(5, 'textcolor', '#858585');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(1, 'Gustavo Alves', 'gustavoalvesdasilva@outlook.com', NULL, '$2y$10$Gea1YyIIb3TPF..G5Dom2.yGT7ENKNQXt8MUhkji8oMjKXcgPBK3m', NULL, NULL, NULL, 1),
(4, 'Paulo Oliveira', 'paulo@oliveira.com', NULL, '$2y$10$k2QmoZGMmvXW2M7XMUuLeuKhaxYMbaRmHA9beWKAXo0xgmsRivdTa', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `date_access` datetime DEFAULT NULL,
  `page` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `date_access`, `page`) VALUES
(1, '192.168.11.12', '2021-02-22 14:45:32', '/'),
(2, '192.168.1.34', '2021-02-22 15:28:22', 'teste'),
(3, '192.168.11.12', '2020-12-25 14:45:32', 'teste'),
(4, '192.168.11.12', '2020-12-25 14:45:32', '/'),
(5, '192.168.11.25', '2020-12-25 14:45:32', 'contato'),
(6, '192.168.11.13', '2020-12-25 14:45:32', 'teste'),
(7, '192.168.1.35', '2020-11-25 14:45:32', 'teste'),
(8, '192.168.11.25', '2020-11-25 14:45:32', '/'),
(9, '192.168.11.2', '2020-10-25 14:45:32', 'contato'),
(10, '192.168.10.75', '2020-10-25 14:45:32', 'contato');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Índices para tabela `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
