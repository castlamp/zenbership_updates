<?php

/**
 * Zenbership Update
 *
 * @date 		n/a
 * @link 		http://documentation.zenbership.com/Home/Updating-Zenbership
 * @version 	v107
 *
 * NEW FEATURES
 * -
 *
 * BUG CORRECTIONS
 * -
 *
 * NEW PLUGINS
 * -
 */ 

return array(
	"INSERT INTO `ppSD_templates_email` (`template`, `title`, `desc`, `subject`, `to`, `from`, `cc`, `bcc`, `content`, `format`, `status`, `save`, `track`, `track_links`, `caller_tags`, `custom`, `owner`, `public`, `created`, `header_id`, `footer_id`, `static`, `default_for`, `theme`, `type`) VALUES ('cart_subscription_advanced_notice', 'Subscription: Upcoming Renewal Notice', '', 'Your subscription will renew in %days_until_renewal% days', '', '', '', '', '', 1, 1, 1, 1, 0, '', 0, 2, 0, '0000-00-00 00:00:00', '', '', 1, 0, 'threefiveten', 'template');",
	"ALTER TABLE `ppSD_cart_sessions` ADD `zip` VARCHAR(8) NOT NULL AFTER `country`;",
	"ALTER TABLE `ppSD_tax_classes` ADD `zips` MEDIUMTEXT NOT NULL AFTER `id`;",
	"ALTER TABLE `ppSD_staff` ADD `cell` VARCHAR(15)  NULL  AFTER `office_phone`;",
	"ALTER TABLE `ppSD_staff` ADD `cell_carrier` VARCHAR(20)  NULL  AFTER `cell`;",
	"ALTER TABLE `ppSD_staff` ADD `sms_optout` TINYINT(1)  NULL  AFTER `cell_carrier`;",
	"ALTER TABLE `ppSD_staff` ADD `email_optout` TINYINT(1)  NULL  AFTER `sms_optout`;",
	"INSERT INTO `ppSD_templates_email` (`template`, `title`, `desc`, `subject`, `to`, `from`, `cc`, `bcc`, `content`, `format`, `status`, `save`, `track`, `track_links`, `caller_tags`, `custom`, `owner`, `public`, `created`, `header_id`, `footer_id`, `static`, `default_for`, `theme`, `type`) VALUES ('event_canceled',  'Event Canceled',  '',  'Event \"%event:name%\" Has Been Canceled',  '',  '',  '',  '',  '',  '1',  '1',  '0',  '0',  '0',  '',  '',  '2',  '0',  '" . $date . "',  '',  '',  '1',  '',  'threefiveten',  'template');",
	"UPDATE ppSD_data_eav SET `value`='id,name,tagline,starts,ends,start_registrations,early_bird_end,close_registration,max_rsvps,total_rsvps,allow_guests,max_guests,online,url,location_name,address_line_1,address_line_2,city,state,zip,country,phone' WHERE `key`='event_headings;",
	"INSERT INTO `ppSD_error_codes` (`code`, `msg`) VALUES ('C019', 'The event you are trying to access has been canceled.');",
	"ALTER TABLE `ppSD_subscriptions` ADD `next_renew_keep` DATETIME;",
	"ALTER TABLE `ppSD_products` ADD `auto_register` TINYINT(1);",
);