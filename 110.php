<?php

/**
 * Zenbership Update
 *
 * @date 		
 * @link 		http://documentation.zenbership.com/Home/Updating-Zenbership
 * @version 	v110
 *
 * CHANGES
 * - Added username/contact name to table-view list of notes.
 * - Option to use email as username. If using it, only include email on form (no username field).
 * - Usernames default to case sensitive now.
 * - Contact merging tool completed.
 * - Dependency forms for transactions are added as notes to the transaction.
 * - Further SMS improvements, including SMS custom hook.
 * - Created plugin uninstaller.
 * - Ability to use a custom template for each catalog category.
 * - Creating fields: field IDs now match the name of the field whenever possible.
 * - Importing Members: better usernames are selected rather than the default "u12345678" style.
 * - Cron: database cleaning tool improved to sync member IDs with potential mismatches on orders.
 *
 * NEW PLUGINS
 * - 
 *
 * NEW TEMPLATES
 * -
 *
 */ 

return array(
	"UPDATE ppSD_data_eav SET `value`='name,date,note,added_by,label,public,deadline,value,for,complete,completed_by,completed_on,priority,user_id,item_scope' WHERE `item_id`='options' AND `key`='note_print' LIMIT 1;",
	"INSERT INTO `ppSD_templates` (`id`, `path`, `theme`, `subtemplate`, `title`, `desc`, `caller_tags`, `order`, `custom_header`, `custom_footer`, `custom_template`, `type`, `section`, `content`, `secure`, `static`, `owner`) VALUES ('password_recovery', '', 'zoid', '', 'Lost Password Recovery', '', '', 0, '0', '0', '', 0, 'Login', '', 0, 1, 2);",
	"INSERT INTO `ppSD_options` (`id`, `display`, `value`, `description`, `type`, `width`, `options`, `section`, `maxlength`, `class`) VALUES ('use_email_as_username', 'Use E-Mail As Username?', '0', 'Would you like to use an email as username?', 'radio', 0, '', 'members', '', '');",
	"DELETE FROM ppSD_options WHERE `id`='case_sensitive_username' LIMIT 1;",
	"ALTER TABLE ppSD_options CHANGE `display` `display` VARCHAR(75);",
	"CREATE TABLE `ppSD_reminders` (`id` int(11) unsigned NOT NULL AUTO_INCREMENT, `created` datetime DEFAULT NULL, `remind_on` date DEFAULT NULL, `user_id` varchar(30) DEFAULT NULL, `user_type` enum('member','contact','account','invoice','transaction','event','other') DEFAULT 'other', `title` varchar(100) DEFAULT NULL, `message` mediumtext, `for` int(11) DEFAULT NULL, `seen` tinyint(1) DEFAULT '0', `seen_on` datetime DEFAULT NULL, PRIMARY KEY (`id`), KEY `for` (`for`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8;",
);
