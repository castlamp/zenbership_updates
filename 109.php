<?php

/**
 * Zenbership Update
 *
 * @date 		
 * @link 		http://documentation.zenbership.com/Home/Updating-Zenbership
 * @version 	v109
 *
 * CHANGES
 * - Pinned notes on homepage and/or or member page.
 * - Added customizable pipeline (contact) types.
 * - New criteria, including "content access", "total spent", and "product purchased".
 *
 * NEW PLUGINS
 * - 
 *
 * NEW TEMPLATES
 * - html/donate_campaign_entry.php
 * - html/donate_campaigns.php
 * - html/donate_product_entry.php
 * - html/donate.php
 * - email/donation_thankyou.html
 *
 */ 

return array(
	"UPDATE ppSD_activity_methods SET `text`='Next action date extended for %act%.' WHERE `id`='extended_next_action' LIMIT 1;",
	"ALTER TABLE ppSD_notes ADD COLUMN `pin` TINYINT(1) DEFAULT '0';",
	"ALTER TABLE  `ppSD_notes` ADD COLUMN  `advance_pipeline` TINYINT(1) DEFAULT '0';",
	"CREATE TABLE `ppSD_pipeline` (`id` int(11) unsigned NOT NULL AUTO_INCREMENT, `name` varchar(50) DEFAULT NULL, `position` int(6) DEFAULT NULL, PRIMARY KEY (`id`)) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;",
	"INSERT INTO `ppSD_pipeline` (`id`,`name`,`position`) VALUES (1, 'Contact', 1);",
	"INSERT INTO `ppSD_pipeline` (`id`,`name`,`position`) VALUES (2, 'Lead', 2);",
	"INSERT INTO `ppSD_pipeline` (`id`,`name`,`position`) VALUES (3, 'Opportunity', 3);",
	"INSERT INTO `ppSD_pipeline` (`id`,`name`,`position`) VALUES (4, 'Customer', 4);",
	"ALTER TABLE ppSD_contacts CHANGE `type` `type` INT(5) DEFAULT '1';",
);
