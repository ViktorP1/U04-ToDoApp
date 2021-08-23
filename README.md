 "#u04-totu04-todo-app-ViktorP1"


MySQL instuctions:

-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `isdone` tinyint(4) NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `products` (`isdone`, `id`, `name`, `description`, `price`, `created`, `modified`) VALUES
(0,	14,	'Call of Duty: Modern Warfare',	'FrÃ¥n skaparna av dÃ¤r serien fÃ¶ddes kommer nu nÃ¤sta del i Call of Duty-serien - Modern Warfare. Inta en vÃ¤rld dÃ¤r maktbalansen hotas och som en del av Tier One mÃ¥ste du axla rollen fÃ¶r att Ã¥terstÃ¤ller balansen.',	579,	'2021-01-25 09:48:36',	'2021-02-03 10:46:03'),
(0,	15,	'FIFA: 2021',	'Vinn tillsammans i EA SPORTS FIFA 21 â€“ med kraft frÃ¥n Frostbite. Oavsett om du fÃ¶redrar att spela pÃ¥ gatan eller arenan kan du gÃ¶ra det pÃ¥ fler sÃ¤tt Ã¤n nÃ¥gonsin i FIFA 21 â€“ inklusive UEFA Champions League och CONMEBOL Libertadores.',	399,	'2021-01-25 10:14:45',	'2021-01-25 10:14:45'),
(1,	16,	'Call of Duty: Black Ops Cold War',	'Call of Duty: Black Ops Cold War Ã¤r nÃ¤sta del i den ikoniska Black Ops-serien. Utspelas i bÃ¶rjan av 80-talet pÃ¥ hÃ¶jden av det kalla kriget, detta Ã¤r den direkta uppfÃ¶ljaren till Call of DutyÂ®: Black Ops, det ursprungliga fenomenet som startade al',	629,	'2021-01-25 10:20:10',	'2021-02-03 10:46:09'),
(0,	17,	'Star Wars Jedi: Fallen Order',	'Ett galaxomspÃ¤nnande Ã¤ventyr vÃ¤ntar i Star Wars Jedi: Fallen Order, ett nytt actionÃ¤ventyr i tredjeperson frÃ¥n Respawn Entertainment.',	449,	'2021-01-25 10:20:52',	'2021-02-03 10:45:45');

-- 2021-02-03 11:29:57
