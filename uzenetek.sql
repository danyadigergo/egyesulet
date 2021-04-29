CREATE DATABASE `uzenetek`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `uzenetek`;

CREATE TABLE `uzenet` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `felado` varchar(45) NOT NULL default '',
  `email` varchar(45) NOT NULL default '',
  `message` varchar(400) NOT NULL default '',
  PRIMARY KEY  (`id`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;
INSERT INTO `uzenet` (`id`,`felado`,`email`,`message`) VALUES 
 (1,'User_1','user@user.com','Vajon ez a funkcio mukodik?'),
 (2,'User_2','user2@user.com','Ugye mar tenyleg jo?'),
 (3,'User_1','user@user.com','Igen, mukodik');