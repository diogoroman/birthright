SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `advocacia` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `advocacia` ;

-- -----------------------------------------------------
-- Table `advocacia`.`lawyers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`lawyers` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`lawyers` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `oab` VARCHAR(8) NOT NULL ,
  `employee_id` INT NOT NULL ,
  `created` DATETIME NULL ,
  `modifed` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `advocacia`.`customers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`customers` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`customers` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `rg` VARCHAR(10) NOT NULL ,
  `organ_rg` VARCHAR(15) NOT NULL ,
  `user_id` INT NOT NULL ,
  `mobile_phone` VARCHAR(16) NULL ,
  `commercial_phone` VARCHAR(16) NULL ,
  `indication` INT NULL COMMENT 'id do advogado que indicou' ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `advocacia`.`processes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`processes` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`processes` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `default_number` VARCHAR(25) NOT NULL ,
  `action` VARCHAR(255) NULL COMMENT 'descrição do processo' ,
  `judge` VARCHAR(80) NULL DEFAULT 0 COMMENT 'perícia' ,
  `old_number` VARCHAR(25) NULL ,
  `old_number_type` TINYINT(1) NULL ,
  `audience` TINYINT(1) NULL DEFAULT 0 ,
  `lawyer_id` INT NOT NULL ,
  `customer_id` INT NOT NULL ,
  `county_id` INT NULL ,
  `process_status_id` INT NOT NULL ,
  `grade_id` INT NULL ,
  `action_type_id` INT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  `process_note_id` INT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `advocacia`.`process_notes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`process_notes` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`process_notes` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `description` TEXT NOT NULL ,
  `process_id` INT NOT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci
COMMENT = 'observações sobre um processo';


-- -----------------------------------------------------
-- Table `advocacia`.`grades`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`grades` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`grades` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `grade` INT NOT NULL ,
  `description` VARCHAR(255) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `advocacia`.`counties`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`counties` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`counties` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(60) NOT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `advocacia`.`process_statuses`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`process_statuses` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`process_statuses` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `status` VARCHAR(20) NOT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `advocacia`.`action_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`action_types` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`action_types` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `type` VARCHAR(35) NOT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `advocacia`.`cities`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`cities` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`cities` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NOT NULL ,
  `uf_id` INT NOT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `advocacia`.`audiences`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`audiences` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`audiences` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `place` VARCHAR(255) NOT NULL ,
  `date` DATETIME NULL ,
  `audience_type_id` INT NOT NULL ,
  `process_id` INT(11)  NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  `lawyer_id` INT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `advocacia`.`witnesses`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`witnesses` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`witnesses` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NOT NULL ,
  `audience_id` INT(11)  NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `advocacia`.`ufs`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`ufs` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`ufs` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `acronym` CHAR(2) NOT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `advocacia`.`audience_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`audience_types` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`audience_types` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `type` VARCHAR(35) NOT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `advocacia`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`users` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(80) NOT NULL ,
  `address_street` VARCHAR(60) NULL ,
  `address_number` VARCHAR(5) NULL ,
  `address_zip` VARCHAR(10) NULL ,
  `address_region` VARCHAR(16) NULL ,
  `phone` VARCHAR(40) NULL ,
  `city_id` INT NOT NULL ,
  `cpf` VARCHAR(14) NOT NULL ,
  `password` VARCHAR(40) NOT NULL ,
  `username` VARCHAR(40) NOT NULL ,
  `created` VARCHAR(45) NULL ,
  `modified` VARCHAR(45) NULL ,
  `gender` TINYINT(1) NULL ,
  `birthday` DATE NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `advocacia`.`groups`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`groups` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`groups` (
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
-- Table `advocacia`.`users_groups`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`users_groups` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`users_groups` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `user_id` INT NOT NULL ,
  `group_id` INT NOT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `user` (`user_id` ASC) ,
  INDEX `group` (`group_id` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `advocacia`.`logs`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`logs` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`logs` (
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
-- Table `advocacia`.`attachments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`attachments` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`attachments` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(255) NOT NULL ,
  `filename` VARCHAR(255) NULL ,
  `path` VARCHAR(255) NULL ,
  `abstract` TEXT NULL ,
  `process_id` INT NOT NULL ,
  `uploader_id` INT NOT NULL ,
  `size` FLOAT NULL ,
  `mime` VARCHAR(30) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `process` (`process_id` ASC) ,
  INDEX `uploader` (`uploader_id` ASC) ,
  FULLTEXT INDEX `abstract` (`abstract` ASC, `title` ASC) )
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `advocacia`.`expertises`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`expertises` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`expertises` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `expert_name` VARCHAR(100) NOT NULL ,
  `expert_address` VARCHAR(255) NULL ,
  `expert_phone` VARCHAR(100) NULL ,
  `date` DATE NULL ,
  `place` VARCHAR(160) NULL ,
  `process_id` INT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `advocacia`.`employees`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`employees` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`employees` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `admission_date` DATE NOT NULL ,
  `demission_date` DATE NULL ,
  `office` VARCHAR(45) NOT NULL ,
  `salary` FLOAT NOT NULL ,
  `user_id` INT NOT NULL ,
  `created` DATETIME NULL ,
  `updated` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `advocacia`.`activities`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`activities` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`activities` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `responsible` VARCHAR(80) NOT NULL ,
  `description` TEXT NULL ,
  `predicted_date` DATE NOT NULL ,
  `performed_date` DATE NULL ,
  `process_id` INT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `advocacia`.`court_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`court_types` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`court_types` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `type` VARCHAR(20) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `advocacia`.`receipts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`receipts` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`receipts` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `process_id` INT NULL ,
  `customer` INT NULL ,
  `payment_form_id` INT NOT NULL ,
  `payment_date` INT NULL ,
  `receipt_number` INT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `advocacia`.`payment_form`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`payment_form` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`payment_form` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `advocacia`.`employee_payments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`employee_payments` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`employee_payments` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `employee_id` INT NOT NULL ,
  `discounts` FLOAT NULL ,
  `payment_date` DATE NULL ,
  `liquid_value` FLOAT NULL ,
  `vacation` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `advocacia`.`bills`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`bills` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`bills` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `identification` VARCHAR(100) NOT NULL ,
  `document_type_id` INT NULL ,
  `value` FLOAT NOT NULL ,
  `description` VARCHAR(250) NULL ,
  `term` DATE NOT NULL ,
  `payment` DATE NULL ,
  `origin` VARCHAR(100) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `advocacia`.`document_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`document_types` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`document_types` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `advocacia`.`chalks`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `advocacia`.`chalks` ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`chalks` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `value` FLOAT NOT NULL ,
  `date` DATE NULL ,
  `employee_id` INT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
