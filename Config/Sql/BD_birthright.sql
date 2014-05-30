SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `birthright` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `birthright` ;

-- -----------------------------------------------------
-- Table `birthright`.`groups`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `birthright`.`groups` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(32) NOT NULL ,
  `alias` VARCHAR(16) NOT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `birthright`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `birthright`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(80) NULL ,
  `username` VARCHAR(40) NOT NULL ,
  `password` VARCHAR(40) NOT NULL ,
  `section_id` INT NULL ,
  `position_id` INT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `birthright`.`logs`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `birthright`.`logs` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(255) NULL ,
  `description` VARCHAR(255) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `birthright`.`users_groups`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `birthright`.`users_groups` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `user_id` INT NULL ,
  `group_id` INT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `birthright`.`equipment`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `birthright`.`equipment` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `fcg` INT NULL ,
  `description` TEXT NOT NULL ,
  `alias` VARCHAR(30) NULL ,
  `kind_id` INT NULL ,
  `count_id` INT NULL ,
  `equipment_type_id` INT NULL ,
  `owner_id` INT NULL ,
  `quantity` INT NULL ,
  `measure_id` VARCHAR(5) NULL ,
  `price` DECIMAL(10,2) NULL ,
  `includeRegister` DATETIME NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `birthright`.`kinds`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `birthright`.`kinds` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  `name` VARCHAR(80) NULL ,
  `cod` INT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `birthright`.`counts`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `birthright`.`counts` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  `name` VARCHAR(40) NULL ,
  `cod` INT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `birthright`.`organizations`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `birthright`.`organizations` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(32) NULL ,
  `acronym` VARCHAR(9) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `birthright`.`sections`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `birthright`.`sections` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `acronym` VARCHAR(15) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `birthright`.`patrimonies`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `birthright`.`patrimonies` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `orderNum` INT NULL ,
  `cod` VARCHAR(39) NULL ,
  `bmpNumber` VARCHAR(45) NULL ,
  `serialNumber` VARCHAR(45) NULL ,
  `equipment_id` INT NULL ,
  `patrimony_status_id` INT NULL ,
  `priceUnit` DECIMAL(10,2) NULL ,
  `organization_id` INT NULL ,
  `section_id` INT NULL ,
  `room` VARCHAR(20) NULL ,
  `user_id` INT NULL ,
  `discrepancy` TEXT NULL ,
  `observation` TEXT NULL ,
  `conference` DATETIME NULL ,
  `intervalConf` INT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  `discharge_id` INT NULL ,
  `lock` BIT NOT NULL DEFAULT 0 ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `birthright`.`owners`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `birthright`.`owners` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `acronym` VARCHAR(15) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `birthright`.`measures`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `birthright`.`measures` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(4) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `birthright`.`equipment_types`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `birthright`.`equipment_types` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `birthright`.`patrimony_statuses`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `birthright`.`patrimony_statuses` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `birthright`.`default_values`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `birthright`.`default_values` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `kind_id` INT NULL ,
  `count_id` INT NULL ,
  `measure_id` INT NULL ,
  `owner_id` INT NULL ,
  `equipment_type_id` INT NULL ,
  `patrimony_status_id` INT NULL ,
  `section_id` INT NULL ,
  `position_id` INT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `kind_id_UNIQUE` (`kind_id` ASC) ,
  UNIQUE INDEX `count_id_UNIQUE` (`count_id` ASC) ,
  UNIQUE INDEX `measure_id_UNIQUE` (`measure_id` ASC) ,
  UNIQUE INDEX `owner_id_UNIQUE` (`owner_id` ASC) ,
  UNIQUE INDEX `equipment_type_id_UNIQUE` (`equipment_type_id` ASC) ,
  UNIQUE INDEX `patrimony_status_id_UNIQUE` (`patrimony_status_id` ASC) ,
  UNIQUE INDEX `section_id_UNIQUE` (`section_id` ASC) ,
  UNIQUE INDEX `position_id_UNIQUE` (`position_id` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `birthright`.`positions`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `birthright`.`positions` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `acronym` VARCHAR(45) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `birthright`.`discharges`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `birthright`.`discharges` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `commission_id` INT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci, 
COMMENT = 'Tabela para descarga' ;


-- -----------------------------------------------------
-- Table `birthright`.`commissions`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `birthright`.`commissions` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `user_id_1` INT NULL ,
  `user_id_2` INT NULL ,
  `user_id_3` INT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
