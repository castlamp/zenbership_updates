<?php

/**
 * Zenbership Update
 *
 * @date 		
 * @link 		http://documentation.zenbership.com/Home/Updating-Zenbership
 * @version 	v114
 *
 * CHANGES
 * - Updated the registration "reset" code to work better.
 * - Ability to add/remove fields from the member/contact "quick search" (make them searchable).
 * - Logged in members accessing the login page are sent back to the manage page.
 * - Invoices are marked as seen if a member/contact loads it.
 * - Bug with content not appearing in member dashboard fixed.
 *
 * NEW PLUGINS
 * - 
 *
 * NEW TEMPLATES
 * - 
 *
 */ 

return array(
	"ALTER TABLE `ppSD_cart_sessions` DROP PRIMARY KEY;",
	"ALTER TABLE `ppSD_cart_sessions` ADD `cid` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;",
	"ALTER TABLE `ppSD_cart_sessions` ADD INDEX (`id`);",
	"ALTER TABLE `ppSD_cart_sessions` CHANGE `id` `id` VARCHAR(20);",
	"ALTER TABLE `ppSD_invoices` ADD `seen` MEDIUMINT(4) DEFAULT '0';",
	"ALTER TABLE `ppSD_invoices` ADD `last_seen_date` DATETIME DEFAULT '1920-01-01 00:01:01';",
);


