DROP TABLE IF EXISTS `t_abteilungen`;
CREATE TABLE IF NOT EXISTS `t_abteilungen` (
  `a_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `a_kuerzel` varchar(50) COLLATE utf8_general_ci NOT NULL,
  `a_name` varchar(50) COLLATE utf8_general_ci NOT NULL,
  `a_local_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`a_id`),
  UNIQUE KEY `a_id` (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=6 ;

INSERT INTO `t_abteilungen` (`a_id`, `a_kuerzel`, `a_name`, `a_local_id`) VALUES
(1, 'SALE', 'Verkauf', 2),
(2, 'ENTW', 'Entwicklung', 3),
(3, 'PROD', 'Produktion', 3),
(4, 'BUCH', 'Buchhaltung', 2),
(5, 'GLEI', 'Geschaeftsleitung', 1) ;
