CREATE TABLE `physmach`.`blog` ( 
	`b_id` INT(11) NOT NULL AUTO_INCREMENT ,
	 `catigory_id` INT(11) NOT NULL ,
	  `title` VARCHAR(255) NOT NULL , 
	  `slug` VARCHAR(255) NOT NULL , 
	  `body` TEXT NOT NULL , 
	  `post_image` TEXT NOT NULL ,
	   `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
	    PRIMARY KEY (`b_id`)) ENGINE = InnoDB;