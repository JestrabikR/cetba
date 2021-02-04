-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Počítač: sql.endora.cz:3308
-- Vytvořeno: Čtv 04. úno 2021, 23:09
-- Verze serveru: 5.6.45-86.1
-- Verze PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `cetba`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Struktura tabulky `kategorie`
--

CREATE TABLE `kategorie` (
  `id_obdobi` int(11) NOT NULL,
  `obdobi` varchar(80) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Vypisuji data pro tabulku `kategorie`
--

INSERT INTO `kategorie` (`id_obdobi`, `obdobi`) VALUES
(1, 'Světová a česká literatura do konce 18. století'),
(2, 'Světová a česká literatura do konce 19. století'),
(3, 'Světová literatura 20. a 21. století'),
(4, 'Česká literatura 20. a 21. století');

-- --------------------------------------------------------

--
-- Struktura tabulky `knihy`
--

CREATE TABLE `knihy` (
  `id_knihy` int(11) NOT NULL,
  `autor_knihy` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `nazev_knihy` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `pocet_stranek` int(11) DEFAULT NULL,
  `prebal` varchar(90) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `anotace` text COLLATE utf8_general_mysql500_ci,
  `id_obdobi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Vypisuji data pro tabulku `knihy`
--

INSERT INTO `knihy` (`id_knihy`, `autor_knihy`, `nazev_knihy`, `pocet_stranek`, `prebal`, `anotace`, `id_obdobi`) VALUES
(1, 'Diderot, Denis', ' Jeptiška ', 300, 'data:image/png;base64,BLNQDIYCBBF', 'Lorem Ipsum dolor sit amet.', 1),
(2, 'Defoe, Daniel', ' Robinson Crusoe ', 84, 'data:image/png;base64,JAZXEBFJBAO', 'Lorem Ipsum dolor sit amet.', 1),
(3, 'Komenský, Jan Amos', ' Labyrint světa a ráj srdce ', 279, 'data:image/png;base64,APRHFHTOANM', 'Lorem Ipsum dolor sit amet.', 1),
(4, 'Goethe, Johann Wolfgang', ' Utrpení mladého Werthera ', 281, 'data:image/png;base64,KRUNDVISEFI', 'Lorem Ipsum dolor sit amet.', 1),
(5, 'Moliére', ' Lakomec ', 237, 'data:image/png;base64,NUBNZQCXSWN', 'Lorem Ipsum dolor sit amet.', 1),
(6, 'Arbes, Jakub', ' Svatý Xaverius ', 246, 'data:image/png;base64,BKKCDZYBMRF', 'Lorem Ipsum dolor sit amet.', 2),
(7, 'Austenová, Jane', ' Pýcha a předsudek ', 195, 'data:image/png;base64,ABEIIBGUBQT', 'Lorem Ipsum dolor sit amet.', 2),
(8, 'Balzac, Honoré de', ' Otec Goriot ', 194, 'data:image/png;base64,NNLFDUYGDNY', 'Lorem Ipsum dolor sit amet.', 2),
(9, 'Baudelaire, Charles', ' Květy zla ', 141, 'data:image/png;base64,SLHMIBWQHEN', 'Lorem Ipsum dolor sit amet.', 2),
(10, 'Brontëová, Charlotte', ' Jana Eyrová ', 134, 'data:image/png;base64,TEMAEFEVCLH', 'Lorem Ipsum dolor sit amet.', 2),
(11, 'Čech, Svatopluk', ' Nový epochální výlet pana Broučka, tentokrát', 132, 'data:image/png;base64,IWIVYXCOJWO', 'Lorem Ipsum dolor sit amet.', 2),
(12, 'Brecht, Bertolt', ' Matka Kuráž a její děti ', 245, 'data:image/png;base64,OSRFWECWQXD', 'Lorem Ipsum dolor sit amet.', 3),
(13, 'Bulgakov, Michail', ' Mistr a Markétka ', 234, 'data:image/png;base64,NMYQNXLOLGP', 'Lorem Ipsum dolor sit amet.', 3),
(14, 'Dürrenmatt, Friedrich', ' Návštěva staré dámy ', 156, 'data:image/png;base64,TYPSVROLEUC', 'Lorem Ipsum dolor sit amet.', 3),
(15, 'Eco, Umberto', ' Jméno růže ', 213, 'data:image/png;base64,ZPFZODIGNNF', 'Lorem Ipsum dolor sit amet.', 3),
(16, 'Heller, Joseph', ' Hlava XXII ', 193, 'data:image/png;base64,IEDOKTAVDTG', 'Lorem Ipsum dolor sit amet.', 3),
(17, 'Bezruč, Petr', ' Slezské písně ', 209, 'data:image/png;base64,RYIXZDWJAHG', 'Lorem Ipsum dolor sit amet.', 4),
(18, 'Čapek, Karel', ' Bílá nemoc ', 190, 'data:image/png;base64,JKNKUVCXKDC', 'Lorem Ipsum dolor sit amet.', 4),
(19, 'Čapek, Karel', ' R. U. R. ', 237, 'data:image/png;base64,SPIAYBFEMMB', 'Lorem Ipsum dolor sit amet.', 4),
(20, 'Čapek, Karel', ' Válka s mloky ', 208, 'data:image/png;base64,MSLNLZFKJAA', 'Lorem Ipsum dolor sit amet.', 4);

-- --------------------------------------------------------

--
-- Struktura tabulky `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabulky `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nazev` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `displej_nazev` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Vypisuji data pro tabulku `menu`
--

INSERT INTO `menu` (`id_menu`, `nazev`, `displej_nazev`) VALUES
(1, 'cs_sv_18', 'Česká a Světová lit. 18. století'),
(2, 'cs_sv_19', 'Česká a Světová lit. 19. století'),
(3, 'sv_20_21', 'Světová lit. 20. a 21. století'),
(4, 'cs_20_21', 'Česká lit. 20. a 21. století'),
(5, 'kontakt', 'Kontakt'),
(6, 'auth/login', 'Přihlásit se'),
(7, 'auth/create_user', 'Registrovat se');

-- --------------------------------------------------------

--
-- Struktura tabulky `menu_logged`
--

CREATE TABLE `menu_logged` (
  `id_menu` int(11) NOT NULL,
  `nazev` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `displej_nazev` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Vypisuji data pro tabulku `menu_logged`
--

INSERT INTO `menu_logged` (`id_menu`, `nazev`, `displej_nazev`) VALUES
(1, 'cs_sv_18', 'Česká a Světová lit. 18. století'),
(2, 'cs_sv_19', 'Česká a Světová lit. 19. století'),
(3, 'sv_20_21', 'Světová lit. 20. a 21. století'),
(4, 'cs_20_21', 'Česká lit. 20. a 21. století'),
(5, 'kontakt', 'Kontakt'),
(6, 'auth/logout', 'Odhlásit se'),
(7, 'auth/add_book', 'Přidat Knihu');

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$qW0CVuGK3Xk7cxIwCd2Qv.f9ktQnlFks0/KnQ.P/GLW0JW3ZQ8rkq', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1612463212, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Struktura tabulky `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`id_obdobi`);

--
-- Klíče pro tabulku `knihy`
--
ALTER TABLE `knihy`
  ADD PRIMARY KEY (`id_knihy`);

--
-- Klíče pro tabulku `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Klíče pro tabulku `menu_logged`
--
ALTER TABLE `menu_logged`
  ADD PRIMARY KEY (`id_menu`);

--
-- Klíče pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Klíče pro tabulku `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pro tabulku `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `id_obdobi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pro tabulku `knihy`
--
ALTER TABLE `knihy`
  MODIFY `id_knihy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pro tabulku `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pro tabulku `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pro tabulku `menu_logged`
--
ALTER TABLE `menu_logged`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pro tabulku `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
