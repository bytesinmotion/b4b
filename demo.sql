
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



INSERT INTO `tx_b4b_domain_model_customer` (`uid`, `pid`, `tstamp`, `crdate`, `deleted`, `hidden`, `sys_language_uid`, `l10n_parent`, `l10n_state`, `l10n_diffsource`, `t3ver_oid`, `t3ver_wsid`, `t3ver_state`, `t3ver_stage`, `company`, `sector`) VALUES
(1, 1, 1738058917, 1738050145, 0, 0, -1, 0, NULL, 0x7b226c31306e5f706172656e74223a22222c22636f6d70616e79223a22222c22736563746f72223a22222c227379735f6c616e67756167655f756964223a22222c2268696464656e223a22227d, 0, 0, 0, 0, 'Testcompany edited in DE', 2),
(2, 1, 1738055250, 1738050159, 0, 0, 0, 0, NULL, 0x7b22636f6d70616e79223a22222c22736563746f72223a22222c227379735f6c616e67756167655f756964223a22222c2268696464656e223a22227d, 0, 0, 0, 0, 'company2ss', 1),
(3, 1, 1738057092, 1738054084, 0, 0, 0, 0, NULL, 0x7b22636f6d70616e79223a22222c22736563746f72223a22222c227379735f6c616e67756167655f756964223a22222c2268696464656e223a22227d, 0, 0, 0, 0, 'test de', 2),
(4, 1, 1738054102, 1738054102, 0, 0, -1, 0, NULL, 0x7b226c31306e5f706172656e74223a22222c22636f6d70616e79223a22222c22736563746f72223a22222c227379735f6c616e67756167655f756964223a22222c2268696464656e223a22227d, 0, 0, 0, 0, 'test multi', 2),
(5, 1, 1738055711, 1738055710, 0, 0, 1, 0, NULL, 0x7b22636f6d70616e79223a22222c22736563746f72223a22222c227379735f6c616e67756167655f756964223a22222c226c31306e5f706172656e74223a22222c2268696464656e223a22227d, 0, 0, 0, 0, 'italo', 1),
(6, 1, 1738057406, 1738057399, 0, 0, 1, 2, NULL, 0x7b22636f6d70616e79223a22636f6d70616e79327373222c22736563746f72223a2231222c227379735f6c616e67756167655f756964223a2230222c2268696464656e223a2230222c226c31306e5f706172656e74223a2230222c226c31306e5f64696666736f75726365223a227b5c22636f6d70616e795c223a5c225c222c5c22736563746f725c223a5c225c222c5c227379735f6c616e67756167655f7569645c223a5c225c222c5c2268696464656e5c223a5c225c227d227d, 0, 0, 0, 0, 'Translated company?', 1);

-- --------------------------------------------------------


INSERT INTO `tx_b4b_domain_model_sectors` (`uid`, `pid`, `tstamp`, `crdate`, `sorting`, `sys_language_uid`, `l10n_parent`, `l10n_state`, `l10n_diffsource`, `t3ver_oid`, `t3ver_wsid`, `t3ver_state`, `t3ver_stage`, `title`) VALUES
(1, 1, 1738050106, 1738050106, 256, 0, 0, NULL, 0x7b226c31306e5f706172656e74223a22222c227469746c65223a22222c227379735f6c616e67756167655f756964223a22227d, 0, 0, 0, 0, 'Baugewerbe / Immobilien'),
(2, 1, 1738050115, 1738050115, 128, 0, 0, NULL, 0x7b226c31306e5f706172656e74223a22222c227469746c65223a22222c227379735f6c616e67756167655f756964223a22227d, 0, 0, 0, 0, 'Beratung / diverse'),
(3, 1, 1738050121, 1738050117, 192, 1, 2, NULL, 0x7b226c31306e5f706172656e74223a2230222c227469746c65223a224265726174756e67205c2f2064697665727365222c227379735f6c616e67756167655f756964223a2230222c226c31306e5f64696666736f75726365223a227b5c226c31306e5f706172656e745c223a5c225c222c5c227469746c655c223a5c225c222c5c227379735f6c616e67756167655f7569645c223a5c225c227d227d, 0, 0, 0, 0, 'Consultazione'),
(4, 1, 1738050131, 1738050123, 224, 1, 1, NULL, 0x7b226c31306e5f706172656e74223a2230222c227469746c65223a2242617567657765726265205c2f20496d6d6f62696c69656e222c227379735f6c616e67756167655f756964223a2230222c226c31306e5f64696666736f75726365223a227b5c226c31306e5f706172656e745c223a5c225c222c5c227469746c655c223a5c225c222c5c227379735f6c616e67756167655f7569645c223a5c225c227d227d, 0, 0, 0, 0, 'Costruzione');

--
ALTER TABLE `tx_b4b_domain_model_customer`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `tx_b4b_domain_model_sectors`
--
ALTER TABLE `tx_b4b_domain_model_sectors`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
