create database CommunityPortal;

use CommunityPortal;

CREATE TABLE IF NOT EXISTS `CommunityPortal`.`TB_USER` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NULL,
  `email` VARCHAR(50) NULL,
  `password` VARCHAR(20) NULL,
  `age` VARCHAR(50) NULL,
  `mobilenumber` VARCHAR(50) NULL,
  `country` VARCHAR(100) NULL,
  `city` VARCHAR(100) NULL,
  `address` VARCHAR(200) NULL,
  PRIMARY KEY (`id`))
  ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

LOCK TABLES `tb_user` WRITE;
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
INSERT INTO `tb_user` VALUES (1,'i_name','i_email','i_password','i_age','i_mobilenumber','i_country','i_city','i_address'),(2,'i_name','i_email','i_password','i_age','i_mobilenumber','i_country','i_city','i_address');
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;
UNLOCK TABLES;




DELIMITER ;;

CREATE DEFINER=`root`@`localhost` PROCEDURE `procSaveUser`(i_id int,
                                                           i_name varchar(50),
                                                           i_email varchar(50),
                                                           i_password varchar(20),
                                                           i_age varchar(50),
                                                           i_mobilenumber varchar(50),
                                                           i_country varchar(50),
                                                           i_city varchar(50),
                                                           i_address varchar(50))


  BEGIN

    if(i_id=0) then

      insert into TB_USER(name,email,password,age,mobilenumber,country,city,address) values(i_name,i_email,i_password,i_age,i_mobilenumber,i_country,i_city,i_address);

    Else

      update TB_USER set name = i_name,
        email = i_email,
        password = i_password,
        age = i_age,
        mobilenumber = i_mobilenumber,
        country = i_country,
        city = i_city,
        address = i_address
      where id = i_id;

    end if;

  END ;;

DELIMITER ;


