-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: mysql-xrrcw5.pg-s-ljt3az.db.mittwald.cloud
-- Erstellungszeit: 28. Jan 2025 um 10:17
-- Server-Version: 8.0.36-28
-- PHP-Version: 8.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `mysql_xrrcw5`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_b4b_domain_model_customer`
--

CREATE TABLE `tx_b4b_domain_model_customer` (
  `uid` int UNSIGNED NOT NULL,
  `pid` int UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint UNSIGNED NOT NULL DEFAULT '0',
  `sys_language_uid` int NOT NULL DEFAULT '0',
  `l10n_parent` int UNSIGNED NOT NULL DEFAULT '0',
  `l10n_state` text COLLATE utf8mb4_unicode_ci,
  `l10n_diffsource` mediumblob,
  `t3ver_oid` int UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_wsid` int UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_state` smallint NOT NULL DEFAULT '0',
  `t3ver_stage` int NOT NULL DEFAULT '0',
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sector` int UNSIGNED DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `tx_b4b_domain_model_customer`
--

INSERT INTO `tx_b4b_domain_model_customer` (`uid`, `pid`, `tstamp`, `crdate`, `deleted`, `hidden`, `sys_language_uid`, `l10n_parent`, `l10n_state`, `l10n_diffsource`, `t3ver_oid`, `t3ver_wsid`, `t3ver_state`, `t3ver_stage`, `company`, `sector`) VALUES
(1, 1, 1738058917, 1738050145, 0, 0, -1, 0, NULL, 0x7b226c31306e5f706172656e74223a22222c22636f6d70616e79223a22222c22736563746f72223a22222c227379735f6c616e67756167655f756964223a22222c2268696464656e223a22227d, 0, 0, 0, 0, 'Testcompany edited in DE', 2),
(2, 1, 1738055250, 1738050159, 0, 0, 0, 0, NULL, 0x7b22636f6d70616e79223a22222c22736563746f72223a22222c227379735f6c616e67756167655f756964223a22222c2268696464656e223a22227d, 0, 0, 0, 0, 'company2ss', 1),
(3, 1, 1738057092, 1738054084, 0, 0, 0, 0, NULL, 0x7b22636f6d70616e79223a22222c22736563746f72223a22222c227379735f6c616e67756167655f756964223a22222c2268696464656e223a22227d, 0, 0, 0, 0, 'test de', 2),
(4, 1, 1738054102, 1738054102, 0, 0, -1, 0, NULL, 0x7b226c31306e5f706172656e74223a22222c22636f6d70616e79223a22222c22736563746f72223a22222c227379735f6c616e67756167655f756964223a22222c2268696464656e223a22227d, 0, 0, 0, 0, 'test multi', 2),
(5, 1, 1738055711, 1738055710, 0, 0, 1, 0, NULL, 0x7b22636f6d70616e79223a22222c22736563746f72223a22222c227379735f6c616e67756167655f756964223a22222c226c31306e5f706172656e74223a22222c2268696464656e223a22227d, 0, 0, 0, 0, 'italo', 1),
(6, 1, 1738057406, 1738057399, 0, 0, 1, 2, NULL, 0x7b22636f6d70616e79223a22636f6d70616e79327373222c22736563746f72223a2231222c227379735f6c616e67756167655f756964223a2230222c2268696464656e223a2230222c226c31306e5f706172656e74223a2230222c226c31306e5f64696666736f75726365223a227b5c22636f6d70616e795c223a5c225c222c5c22736563746f725c223a5c225c222c5c227379735f6c616e67756167655f7569645c223a5c225c222c5c2268696464656e5c223a5c225c227d227d, 0, 0, 0, 0, 'Translated company?', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_b4b_domain_model_sectors`
--

CREATE TABLE `tx_b4b_domain_model_sectors` (
  `uid` int UNSIGNED NOT NULL,
  `pid` int UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int UNSIGNED NOT NULL DEFAULT '0',
  `sorting` int NOT NULL DEFAULT '0',
  `sys_language_uid` int NOT NULL DEFAULT '0',
  `l10n_parent` int UNSIGNED NOT NULL DEFAULT '0',
  `l10n_state` text COLLATE utf8mb4_unicode_ci,
  `l10n_diffsource` mediumblob,
  `t3ver_oid` int UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_wsid` int UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_state` smallint NOT NULL DEFAULT '0',
  `t3ver_stage` int NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `tx_b4b_domain_model_sectors`
--

INSERT INTO `tx_b4b_domain_model_sectors` (`uid`, `pid`, `tstamp`, `crdate`, `sorting`, `sys_language_uid`, `l10n_parent`, `l10n_state`, `l10n_diffsource`, `t3ver_oid`, `t3ver_wsid`, `t3ver_state`, `t3ver_stage`, `title`) VALUES
(1, 1, 1738050106, 1738050106, 256, 0, 0, NULL, 0x7b226c31306e5f706172656e74223a22222c227469746c65223a22222c227379735f6c616e67756167655f756964223a22227d, 0, 0, 0, 0, 'Baugewerbe / Immobilien'),
(2, 1, 1738050115, 1738050115, 128, 0, 0, NULL, 0x7b226c31306e5f706172656e74223a22222c227469746c65223a22222c227379735f6c616e67756167655f756964223a22227d, 0, 0, 0, 0, 'Beratung / diverse'),
(3, 1, 1738050121, 1738050117, 192, 1, 2, NULL, 0x7b226c31306e5f706172656e74223a2230222c227469746c65223a224265726174756e67205c2f2064697665727365222c227379735f6c616e67756167655f756964223a2230222c226c31306e5f64696666736f75726365223a227b5c226c31306e5f706172656e745c223a5c225c222c5c227469746c655c223a5c225c222c5c227379735f6c616e67756167655f7569645c223a5c225c227d227d, 0, 0, 0, 0, 'Consultazione'),
(4, 1, 1738050131, 1738050123, 224, 1, 1, NULL, 0x7b226c31306e5f706172656e74223a2230222c227469746c65223a2242617567657765726265205c2f20496d6d6f62696c69656e222c227379735f6c616e67756167655f756964223a2230222c226c31306e5f64696666736f75726365223a227b5c226c31306e5f706172656e745c223a5c225c222c5c227469746c655c223a5c225c222c5c227379735f6c616e67756167655f7569645c223a5c225c227d227d, 0, 0, 0, 0, 'Costruzione');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `tx_b4b_domain_model_customer`
--
ALTER TABLE `tx_b4b_domain_model_customer`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`,`deleted`,`hidden`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`);

--
-- Indizes für die Tabelle `tx_b4b_domain_model_sectors`
--
ALTER TABLE `tx_b4b_domain_model_sectors`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `tx_b4b_domain_model_customer`
--
ALTER TABLE `tx_b4b_domain_model_customer`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `tx_b4b_domain_model_sectors`
--
ALTER TABLE `tx_b4b_domain_model_sectors`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
