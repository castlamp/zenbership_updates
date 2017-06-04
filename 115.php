<?php

/**
 * Zenbership Update
 *
 * @date 		
 * @link 		http://documentation.zenbership.com/Home/Updating-Zenbership
 * @version 	v115
 *
 * CHANGES
 * - Ability to customize criteria report result views.
 * - Ability to create a fieldset when creating new fields.
 *
 * NEW PLUGINS
 * - 
 *
 * NEW TEMPLATES
 * - 
 *
 */ 

return array(
	"ALTER TABLE `ppSD_criteria_cache` ADD `sort` varchar(60) DEFAULT 'last_name';",
	"ALTER TABLE `ppSD_criteria_cache` ADD `sort_order` varchar(4) DEFAULT 'ASC';",
	"ALTER TABLE `ppSD_criteria_cache` ADD `display_per_page` mediumint(5) DEFAULT '50';",
	"ALTER TABLE `ppSD_staff` ADD `middle_name` varchar(50) DEFAULT NULL;",
	"ALTER TABLE `ppSD_logins` ADD `notes` MEDIUMTEXT DEFAULT NULL;",
	"ALTER TABLE `ppSD_uploads` CHANGE `name` `name` varchar(150) DEFAULT '';",
);