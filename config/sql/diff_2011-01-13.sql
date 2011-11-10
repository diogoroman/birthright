SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

ALTER TABLE `advocacia`.`lawyers` CHANGE COLUMN `modifed` `modified` DATETIME NULL DEFAULT NULL  ;

ALTER TABLE `advocacia`.`processes` CHANGE COLUMN `process_note_id` `process_note_id` INT(11) NULL DEFAULT NULL  AFTER `action_type_id` ;

ALTER TABLE `advocacia`.`audiences` CHANGE COLUMN `lawyer_id` `lawyer_id` INT(11) NOT NULL  AFTER `process_id` ;

ALTER TABLE `advocacia`.`users` CHANGE COLUMN `gender` `gender` TINYINT(1) NULL DEFAULT NULL  AFTER `username` , CHANGE COLUMN `birthday` `birthday` DATE NULL DEFAULT NULL  AFTER `gender` , CHANGE COLUMN `created` `created` DATETIME NULL DEFAULT NULL  , CHANGE COLUMN `modified` `modified` DATETIME NULL DEFAULT NULL  ;

ALTER TABLE `advocacia`.`logs` ADD COLUMN `description` VARCHAR(255) NULL DEFAULT NULL  AFTER `title` ;

ALTER TABLE `advocacia`.`expertises` ADD COLUMN `created` DATETIME NULL DEFAULT NULL  AFTER `process_id` , ADD COLUMN `modified` DATETIME NULL DEFAULT NULL  AFTER `created` ;

ALTER TABLE `advocacia`.`employees` DROP COLUMN `vacation_duration` , DROP COLUMN `vacation` , DROP COLUMN `parking_end` , DROP COLUMN `parking_begin` , CHANGE COLUMN `salary` `salary` DECIMAL(10,2) NOT NULL  , CHANGE COLUMN `updated` `modified` DATETIME NULL DEFAULT NULL  ;

ALTER TABLE `advocacia`.`activities` ADD COLUMN `created` DATETIME NULL DEFAULT NULL  AFTER `process_id` , ADD COLUMN `modified` DATETIME NULL DEFAULT NULL  AFTER `created` ;

ALTER TABLE `advocacia`.`court_types` ADD COLUMN `created` DATETIME NULL DEFAULT NULL  AFTER `type` , ADD COLUMN `modified` DATETIME NULL DEFAULT NULL  AFTER `created` ;

ALTER TABLE `advocacia`.`receipts` DROP COLUMN `payment_date` , ADD COLUMN `created` DATETIME NULL DEFAULT NULL  AFTER `payment_form_id` , ADD COLUMN `modified` DATETIME NULL DEFAULT NULL  AFTER `created` , CHANGE COLUMN `receipt_number` `number` INT(11) NULL DEFAULT NULL COMMENT 'Número do recibo'  AFTER `id` , CHANGE COLUMN `process_id` `process_id` INT(11) NOT NULL  , CHANGE COLUMN `customer` `customer_id` INT(11) NOT NULL  ;

ALTER TABLE `advocacia`.`employee_payments` ADD COLUMN `created` DATETIME NULL DEFAULT NULL  AFTER `vacation` , ADD COLUMN `modified` DATETIME NULL DEFAULT NULL  AFTER `created` , CHANGE COLUMN `liquid_value` `liquid_value` DECIMAL(10,2) NULL DEFAULT NULL  ;

ALTER TABLE `advocacia`.`bills` CHANGE COLUMN `value` `value` DECIMAL(10,2) NOT NULL  ;

ALTER TABLE `advocacia`.`document_types` ADD COLUMN `created` DATETIME NULL DEFAULT NULL  AFTER `name` , ADD COLUMN `modified` DATETIME NULL DEFAULT NULL  AFTER `created` ;

ALTER TABLE `advocacia`.`chalks` ADD COLUMN `created` DATETIME NULL DEFAULT NULL  AFTER `employee_id` , ADD COLUMN `modified` DATETIME NULL DEFAULT NULL  AFTER `created` , CHANGE COLUMN `value` `value` DECIMAL(10,2) NOT NULL  ;

CREATE  TABLE IF NOT EXISTS `advocacia`.`payments` (
  `id` INT(11) NOT NULL ,
  `receipt_id` INT(11) NULL DEFAULT NULL ,
  `parent_id` INT(11) NULL DEFAULT NULL COMMENT 'pagamento inicial' ,
  `value` DECIMAL(10,2) NOT NULL ,
  `date` DATE NOT NULL COMMENT 'data prevista' ,
  `paid` DATE NULL DEFAULT NULL COMMENT 'data efetiva de pagamento' ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `RECEIPT` (`receipt_id` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci
COMMENT = 'registro de pagamentos recebidos de clientes';

DROP TABLE IF EXISTS `advocacia`.`payment_form` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
