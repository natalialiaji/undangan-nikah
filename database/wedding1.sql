# Host: localhost  (Version 5.7.35)
# Date: 2022-03-21 04:24:11
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "tamu"
#

DROP TABLE IF EXISTS `tamu`;
CREATE TABLE `tamu` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` text,
  `kontak` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "tamu"
#

INSERT INTO `tamu` VALUES (1,'anu','anu','79807967');
