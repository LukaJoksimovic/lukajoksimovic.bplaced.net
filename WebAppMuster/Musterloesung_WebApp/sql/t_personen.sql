DROP TABLE IF EXISTS `t_personen`;
CREATE TABLE IF NOT EXISTS `t_personen` (
  `p_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `p_vorname` varchar(50) COLLATE utf8_general_ci NOT NULL,
  `p_nachname` varchar(50) COLLATE utf8_general_ci NOT NULL,
  `p_email` varchar(50) COLLATE utf8_general_ci NOT NULL,
  `p_loginpasswort` varchar(255) COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`p_id`),
  UNIQUE KEY `p_id` (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=9 ;

INSERT INTO `t_personen` (`p_id`, `p_vorname`, `p_nachname`, `p_email`, `p_loginpasswort`) 
VALUES
(1, 'Harald', 'Mueller', 'harald.mueller@tbz.ch', 'keinpasswort'),
(2, 'Matthias', 'von Orelli', 'matthias.vonorelli@tbz.ch', 'keinpasswort'),
(3, 'Hansi', 'Hinterseher', 'hansi.hinterseher@tbz.ch', 'keinpasswort'),
(4, 'Florian', 'Silbereisen', 'florian.silbereisen@tbz.ch', 'keinpasswort'),
(5, 'Helene', 'Fischer', 'helene.fischer@tbz.ch', 'keinpasswort'),
(6, 'Beatrice', 'Egli', 'beatrice.egli@tbz.ch', 'keinpasswort'),
(7, 'Nemo', 'Mettler', 'nemo.mettler@tbz.ch', 'keinpasswort'),
(8, 'Andrea', 'Berg', 'andrea.berg@tbz.ch', 'keinpasswort');
