CREATE TABLE `sef_url`.`sef_url_test` (`id` INT NOT NULL AUTO_INCREMENT , `sayfa_baslik` VARCHAR(70) NOT NULL , `sayfa_icerik` TEXT CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL , `sef_url` VARCHAR(150) NOT NULL , PRIMARY KEY (`id`), UNIQUE `baslik` (`sayfa_baslik`)) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_turkish_ci;