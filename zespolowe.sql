
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(45) NOT NULL,
  `lastname` VARCHAR(45) NOT NULL,
  `username` VARCHAR(12) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `last_login` VARCHAR(45) NOT NULL,
  `created` DATETIME NOT NULL,
  `pesel` INT NOT NULL,
  `account` INT NOT NULL,
  `privilages` INT NOT NULL,
  `address` VARCHAR(45) NOT NULL,
  `phone` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `investments` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `description` VARCHAR(45) NOT NULL,
  `bid` INT NOT NULL,
  `price` INT NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_users` (`user_id` ASC),
  CONSTRAINT `fk_users`
    FOREIGN KEY (`user_id`)
    REFERENCES `users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `timetables` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `time` INT NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_users` (`user_id` ASC),
  CONSTRAINT `fk_users`
    FOREIGN KEY (`user_id`)
    REFERENCES `users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `transactions` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL,
  `price` INT NOT NULL,
  `date` DATETIME NOT NULL,
  `user_id` INT NOT NULL,
  `timetable_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_users` (`user_id` ASC),
  INDEX `fk_timetables`` (`timetable_id` ASC),
  CONSTRAINT `fk_users`
    FOREIGN KEY (`user_id`)
    REFERENCES `users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_timetables`
    FOREIGN KEY (`timetable_id`)
    REFERENCES `timetables` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `advances` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cash` INT NOT NULL,
  `reason` VARCHAR(45) NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_users` (`user_id` ASC),
  CONSTRAINT `fk_advances`
    FOREIGN KEY (`user_id`)
    REFERENCES `users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


