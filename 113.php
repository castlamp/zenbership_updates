<?php

/**
 * Zenbership Update
 *
 * @date 		
 * @link 		http://documentation.zenbership.com/Home/Updating-Zenbership
 * @version 	v113
 *
 * CHANGES
 * - Added clean links for a events, shop, products, calendars, news, and registration forms.
 * - Added Criteria Actions tool!
 * - Cron job improvements and stability improvements for larger databases.
 * - Ability to generate quotes instead of invoices.
 * - Ability to limit invoices to check payments only.
 * - Resolved a bug whereby uses using both 3rd party plugins for SMS and email ran into fatal errors.
 * - 
 *
 * NEW PLUGINS
 * - 
 *
 * NEW TEMPLATES
 * - New: invoice_quote (html)
 * - New: invoice_print_quote (html)
 * - Changes: invoice_pay (html)
 *
 */ 

return array(
	"ALTER TABLE `ppSD_widgets` ADD COLUMN `add_id` varchar(50) DEFAULT NULL;",
	"ALTER TABLE `ppSD_invoices` ADD COLUMN `check_only` tinyint(1) DEFAULT '0';",
	"ALTER TABLE `ppSD_invoices` ADD COLUMN `quote` tinyint(1) DEFAULT '0';",
	"INSERT INTO `ppSD_templates` (`id`, `path`, `theme`, `subtemplate`, `title`, `desc`, `caller_tags`, `order`, `custom_header`, `custom_footer`, `custom_template`, `type`, `section`, `content`, `secure`, `static`, `owner`, `encrypt`, `meta_title`, `lang`) VALUES ('invoice_quote', '', 'zoid', '', 'Project Quote', '', '', 0, '0', '0', '', 0, 'Invoice', '', 0, 1, 2, 0, '', 'en');",
	"INSERT INTO `ppSD_templates` (`id`, `path`, `theme`, `subtemplate`, `title`, `desc`, `caller_tags`, `order`, `custom_header`, `custom_footer`, `custom_template`, `type`, `section`, `content`, `secure`, `static`, `owner`, `encrypt`, `meta_title`, `lang`) VALUES ('invoice_quote_print', '', 'zoid', '', 'Project Quote (Print)', '', '', 0, '0', '0', '', 0, 'Invoice', '', 0, 1, 2, 0, '', 'en');",
);


