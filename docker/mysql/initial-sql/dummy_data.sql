CREATE TABLE `cars` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `brand` VARCHAR(50) DEFAULT NULL,
  `model` VARCHAR(50) DEFAULT NULL,
  `engine` VARCHAR(50) DEFAULT NULL,
  `fuel_type` VARCHAR(70) DEFAULT NULL,
  `model_year` VARCHAR(50) DEFAULT NULL,
  `color` INT(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

CREATE TABLE `colors` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `color` VARCHAR(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO `cars` (`id`, `brand`, `model`, `engine`, `fuel_type`, `model_year`, `color`)
VALUES
	(1, 'Alfa Romeo', 'Giulia', '2.0', 'Gasoline', '2020', 1),
	(2, 'Alfa Romeo', 'Guiletta', '1.4 TB', 'Gasoline', '2018', 3),
	(3, 'Alfa Romeo', '156', '1.6 TS', 'Gasoline', '2004', 2),
	(4, 'Alfa Romeo', '159', '1.9 JTD', 'Diesel', '2009', 3),
	(5, 'Alfa Romeo', 'Brera', '3.2', 'Gasoline', '2007', 5),
	(6, 'Alfa Romeo', 'Guiletta', '1.6 JTD', 'Diesel', '2016', 8),
	(7, 'Audi', 'A3', '1.4 TFSI', 'Gasoline', '2018', 1),
	(8, 'Audi', 'A3', '1.8 TSFI', 'Gasoline', '2009', 3)
	(9, 'BMW', '3 Serisi', '318d', 'Diesel', '2017', 2),
	(10, 'BMW', '3 Serisi', '320d xDrive', 'Diesel', '2013', 1),
	(11, 'BMW', '5 Serisi', '523i', 'Gasoline', '1998', 5);
	

INSERT INTO `colors` (`id`, `color`)
VALUES
	(1, 'White'),
	(2, 'Grey'),
	(3, 'Black'),
	(4, 'Yellow'),
	(5, 'Blue'),
	(6, 'Green'),
	(7, 'Orange'),
	(8, 'Red'),
	(9, 'Brown');

