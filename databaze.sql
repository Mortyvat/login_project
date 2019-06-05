-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Stř 05. čen 2019, 16:47
-- Verze serveru: 10.1.38-MariaDB
-- Verze PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `databaze`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `attending`
--

CREATE TABLE `attending` (
  `id_student` int(11) NOT NULL,
  `id_class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vypisuji data pro tabulku `attending`
--

INSERT INTO `attending` (`id_student`, `id_class`) VALUES
(1, 1),
(1, 2),
(19, 1),
(19, 5),
(22, 0),
(22, 1),
(22, 2),
(22, 3),
(19, 3),
(19, 2),
(22, 9),
(22, 6),
(50, 1),
(22, 4),
(22, 4),
(22, 4);

-- --------------------------------------------------------

--
-- Struktura tabulky `blog`
--

CREATE TABLE `blog` (
  `username` text NOT NULL,
  `headline` text NOT NULL,
  `post` text NOT NULL,
  `date` date NOT NULL,
  `id_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vypisuji data pro tabulku `blog`
--

INSERT INTO `blog` (`username`, `headline`, `post`, `date`, `id_post`) VALUES
('robin', '', 'NapiÅ¡te novinku\r\n', '2019-04-13', 10),
('robin', '', 'NapiÅ¡te novinku\r\n', '2019-04-13', 11),
('robin', '', 'NapiÅ¡te novinku\r\n', '2019-04-13', 12),
('robin', '', 'NapiÅ¡te novinku\r\n', '2019-04-13', 13),
('robin', 'DÃ¡lnice D10 byla uzavÅ™ena kvÅ¯li autu v protismÄ›ru', 'Auto v protismÄ›ru jelo podle serveru dopravnÃ­ch informacÃ­ mezi 63. aÅ¾ 67. kilometrem.\r\n\r\nâ€žPÅ™ijali jsme nÄ›kolik oznÃ¡menÃ­ o autÄ› v protismÄ›ru na 63. kilometru dÃ¡lnice. PolicistÃ© na pÃ¡r minut dÃ¡lnici uzavÅ™eli, ale pÃ¡trÃ¡nÃ­ po autÄ› bylo negativnÃ­. Nestala se Å¾Ã¡dnÃ¡ nehoda, ani nebyl nikdo zranÄ›n,â€œ Å™ekla NovinkÃ¡m mluvÄÃ­ policie Lucie NovÃ¡kovÃ¡.\r\n\r\nChvÃ­li po oznÃ¡menÃ­ auta v protismÄ›ru se na 40. kilometru ve smÄ›ru na Turnov srazil autobus, osobnÃ­ a nÃ¡kladnÃ­ auto. Nehoda nenÃ­ vÃ¡Å¾nÃ¡, ale vyÅ¾Ã¡dala si krÃ¡tkodobÃ© uzavÅ™enÃ­ silnice.', '0000-00-00', 15),
('robin', 'DÃ¡lnice D10 byla uzavÅ™ena kvÅ¯li autu v protismÄ›ru', '\r\nAuto v protismÄ›ru jelo podle serveru dopravnÃ­ch informacÃ­ mezi 63. aÅ¾ 67. kilometrem.\r\n\r\nâ€žPÅ™ijali jsme nÄ›kolik oznÃ¡menÃ­ o autÄ› v protismÄ›ru na 63. kilometru dÃ¡lnice. PolicistÃ© na pÃ¡r minut dÃ¡lnici uzavÅ™eli, ale pÃ¡trÃ¡nÃ­ po autÄ› bylo negativnÃ­. Nestala se Å¾Ã¡dnÃ¡ nehoda, ani nebyl nikdo zranÄ›n,â€œ Å™ekla NovinkÃ¡m mluvÄÃ­ policie Lucie NovÃ¡kovÃ¡.\r\n\r\nChvÃ­li po oznÃ¡menÃ­ auta v protismÄ›ru se na 40. kilometru ve smÄ›ru na Turnov srazil autobus, osobnÃ­ a nÃ¡kladnÃ­ auto. Nehoda nenÃ­ vÃ¡Å¾nÃ¡, ale vyÅ¾Ã¡dala si krÃ¡tkodobÃ© uzavÅ™enÃ­ silnice.', '2019-04-15', 16),
('robin', 'PozvÃ¡nka na pohovor', 'MyslivcovÃ¡ KlÃ¡ra &lt;app@datacruit.info&gt;\r\n9:28 (pÅ™ed 50 minutami)\r\nkomu: jÃ¡\r\n\r\nDobrÃ½ den, pane BÅ™Ã­zo,\r\n\r\nna zÃ¡kladÄ› naÅ¡Ã­ domluvy VÃ¡m zasÃ­lÃ¡m podrobnÄ›jÅ¡Ã­ informace k pohovoru:\r\n\r\ntermÃ­n: stÅ™eda 17. 4. 2019 v 14:00 hod.\r\nmÃ­sto konÃ¡nÃ­: RETIA, PraÅ¾skÃ¡ 341, Pardubice 53502\r\nkontaktnÃ­ osoba: MyslivcovÃ¡ KlÃ¡ra, nÃ¡bor (e-mail: klara.myslivcova@pfsupport.cz, tel.: 733 593 174)\r\ninformace k prÅ¯bÄ›hu pohovoru: pÅ™edpoklÃ¡danÃ¡ dÃ©lka pohovoru je max. 60 min.\r\npotÅ™ebnÃ© dokumenty: s dostateÄnÃ½m pÅ™edstihem pÅ™ed pohovorem nÃ¡m prosÃ­m zaÅ¡lete VÃ¡Å¡ strukturovanÃ½ Å¾ivotopis ve standardnÃ­m formÃ¡tu (.pdf, .docx nebo .doc), pokud se tak jiÅ¾ nestalo dÅ™Ã­ve\r\nProsÃ­m o potvrzenÃ­, Å¾e VÃ¡m uvedenÃ½ termÃ­n vyhovuje a mÅ¯Å¾eme poÄÃ­tat s VaÅ¡Ã­ ÃºÄastÃ­.\r\n\r\nV pÅ™Ã­padÄ› jakÃ½chkoliv dotazÅ¯ Äi zmÄ›n mÄ› prosÃ­m nevÃ¡hejte kontaktovat. \r\n\r\nTÄ›Å¡Ã­me se na vidÄ›nou! \r\n', '2019-04-15', 18),
('ucitel', 'asdfghjkjklkÅ¯lÂ§Â¨Â§Å¯', 'NapiÅ¡te novinku\r\n', '2019-04-21', 19),
('ucitel', 'asdsfdgfhhjjkklÅ¯l', 'NapiÅ¡te novinku\r\ncjhjkdnkfmdsÅ¯lgmpitebgÅ¯orn raÂ§engoÅ¯ensaoÅ¯dgÂ§nW&quot;GKsnstÅ¯ldnsgÂ¨kangÂ§ipas&quot;LgveÂ§sGO&quot;J\r\n\r\najÂ¨pogjÃ¤sÃº)gk4Ãºae4w\r\na4gÃºadpfÂ§ :)', '2019-04-21', 20);

-- --------------------------------------------------------

--
-- Struktura tabulky `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `class` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vypisuji data pro tabulku `classes`
--

INSERT INTO `classes` (`id`, `class`) VALUES
(1, 'Matematika'),
(2, 'Cestina'),
(3, 'Anglictina'),
(4, 'Nemcina'),
(5, 'Rustina'),
(6, 'Fyzika'),
(7, 'Chemie'),
(8, 'IT'),
(9, 'Praxe'),
(10, 'Umeni'),
(11, 'Telocvik');

-- --------------------------------------------------------

--
-- Struktura tabulky `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabulky `schedule`
--

CREATE TABLE `schedule` (
  `weekday` varchar(11) NOT NULL,
  `hour` int(11) NOT NULL,
  `class` varchar(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `cl` varchar(11) NOT NULL,
  `teacher` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vypisuji data pro tabulku `schedule`
--

INSERT INTO `schedule` (`weekday`, `hour`, `class`, `class_id`, `cl`, `teacher`) VALUES
('Po', 8, 'Matematika', 1, 'Mat', ''),
('Po', 9, 'Matematika', 1, 'Mat', ''),
('Po', 10, 'Anglictina', 3, 'Anj', ''),
('Po', 11, 'Rustina', 5, 'Rj', ''),
('Po', 12, 'Nemcina', 4, 'Nj', ''),
('Po', 13, 'IT', 8, 'IT', ''),
('Ut', 8, 'Cestina', 2, 'Cj', ''),
('Ut', 9, 'Fyzika', 6, 'Fy', ''),
('Ut', 10, 'Fyzika', 6, 'Fy', ''),
('Ut', 11, 'Rustina', 5, 'Rj', ''),
('Ut', 12, 'Matematika', 1, 'Mat', ''),
('St', 8, 'Matematika', 1, 'Mat', ''),
('St', 9, 'Cestina', 2, 'Cj', ''),
('St', 10, 'Cestina', 2, 'Cj', ''),
('St', 11, 'Cestina', 2, 'Che', ''),
('St', 12, 'Cestina', 2, 'Che', ''),
('Ct', 8, 'Praxe', 9, 'Px', ''),
('Ct', 9, 'Praxe', 9, 'Px', ''),
('Ct', 10, 'Praxe', 9, 'Px', ''),
('Ct', 11, 'Praxe', 9, 'Px', ''),
('Ct', 12, 'Telocvik', 11, 'Tv', ''),
('Ct', 13, 'Telocvik', 11, 'Tv', ''),
('Pa', 8, 'Matematika', 1, 'Px', ''),
('Pa', 9, 'Cestina', 2, 'Cj', ''),
('Pa', 10, 'Anglictina', 3, 'Anj', ''),
('Pa', 11, 'Umeni', 1, 'Art', ''),
('Pa', 12, 'Nemcina', 4, 'Nj', '');

-- --------------------------------------------------------

--
-- Struktura tabulky `teaching`
--

CREATE TABLE `teaching` (
  `id_teacher` int(32) NOT NULL,
  `id_class` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vypisuji data pro tabulku `teaching`
--

INSERT INTO `teaching` (`id_teacher`, `id_class`) VALUES
(19, 1),
(19, 2),
(19, 3),
(19, 7);

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `access` int(11) DEFAULT NULL,
  `grade` int(32) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `surname` varchar(32) NOT NULL,
  `birthdate` varchar(32) NOT NULL,
  `sex` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `access`, `grade`, `firstname`, `surname`, `birthdate`, `sex`) VALUES
(19, 'ucitel', 'ucitel', 1, 7, '', '', '', ''),
(22, 'robin', 'robin', 2, 1, 'Robert', 'BÅ™Ã­za', '4.5.1994', 'muz'),
(50, 'gabca', 'gabca', 2, 7, 'Gabriela', 'AmbroÅ¾ovÃ¡', '8.5.1998', 'zena'),
(56, 'bizon', 'bizon', 1, 9, 'Martin', 'BÅ™Ã­za', '14.4.1991', 'muz'),
(57, 'tomas', 'tomas', 1, 1, '', '', '', 'muz');

-- --------------------------------------------------------

--
-- Struktura tabulky `znamky`
--

CREATE TABLE `znamky` (
  `id_mark` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `id_class` int(11) NOT NULL,
  `date` text NOT NULL,
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vypisuji data pro tabulku `znamky`
--

INSERT INTO `znamky` (`id_mark`, `id_student`, `id_class`, `date`, `mark`) VALUES
(1, 22, 1, '27.3.2019', 1),
(2, 19, 1, '27.3.2019', 2),
(3, 20, 2, '28.3.2019', 1),
(4, 20, 1, '28.3.2019', 5),
(5, 22, 2, '28.3.2019', 4),
(7, 47, 2, '28.3.2019', 2),
(8, 49, 1, '28.3.2019', 1),
(42, 3, 1, '4.4.2019', 1),
(43, 3, 1, '4.4.2019', 1),
(44, 20, 1, '1', 2),
(45, 20, 2, '4.4.2019', 2),
(46, 22, 1, '7.4.2019', 5),
(47, 50, 1, '7.4.2019', 1),
(48, 22, 1, '10.4.2019', 3),
(49, 22, 3, '10.4.2019', 2),
(50, 50, 2, '4.4.2019', 3),
(51, 50, 2, '4.4.2019', 3),
(52, 19, 1, '16.4.2019', 2),
(53, 56, 2, '21.4.2019', 3);

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `blog`
--
ALTER TABLE `blog`
  ADD KEY `id_post` (`id_post`);

--
-- Klíče pro tabulku `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- Klíče pro tabulku `znamky`
--
ALTER TABLE `znamky`
  ADD PRIMARY KEY (`id_mark`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `blog`
--
ALTER TABLE `blog`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pro tabulku `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pro tabulku `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT pro tabulku `znamky`
--
ALTER TABLE `znamky`
  MODIFY `id_mark` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
