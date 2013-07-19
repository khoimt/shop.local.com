DROP DATABASE IF EXISTS shop ;

CREATE DATABASE shop ;

USE shop ;

DROP TABLE IF EXISTS `user` ;

CREATE TABLE `user` (
  user_id INT (10) AUTO_INCREMENT,
  username VARCHAR (255) NOT NULL,
  pass VARCHAR (255) NOT NULL,
  email VARCHAR (255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE INNODB ;

INSERT INTO `user` (`username`, `pass`, `email`) 
VALUES
  (
    'khoimt',
    'khoimt',
    'khoimt@live.com'
  ) ;

