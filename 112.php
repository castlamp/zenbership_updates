<?php

/**
 * Zenbership Update
 *
 * @date 		
 * @link 		http://documentation.zenbership.com/Home/Updating-Zenbership
 * @version 	v112
 *
 * CHANGES
 * - Added ability to override default class and instead set a custom class on a menu.
 * - Simplified standard template set to make it easier to integrate into an existing website.
 * - Brand new News Module
 *
 * NEW PLUGINS
 * - 
 *
 * NEW TEMPLATES
 * - news_entry_none.php
 * - news_entry_post.php
 * - news_entry_video.php
 * - news_post.php
 * - news_video.php
 *
 */ 

return array(
	"ALTER TABLE  `ppSD_fieldsets_fields` CHANGE  `field`  `field` VARCHAR( 60 ) NULL DEFAULT NULL;",
	"ALTER TABLE `ppSD_options` CHANGE `options` `options` MEDIUMTEXT;",
	"UPDATE `ppSD_options` SET `options`='ar:Arabic|bn:Bengali|zh:Chinese|de:Deutsch|en:English|es:Espanol|fr:Francais|hi:Hindi|ja:Japanese|pt:Portuguese|pa:Punjabi|ru:Russian' WHERE `id`='language' LIMIT 1;",
	"ALTER TABLE `ppSD_login_announcements` ADD COLUMN `region` varchar(50) DEFAULT 'login';",
	"ALTER TABLE `ppSD_login_announcements` ADD COLUMN `type` enum('post','video','gallery','other') DEFAULT 'post';",
	"ALTER TABLE `ppSD_login_announcements` ADD COLUMN `media_location` enum('top','left','right') DEFAULT 'top';",
	"ALTER TABLE `ppSD_login_announcements` ADD COLUMN `media` varchar(150) DEFAULT NULL;",
	"ALTER TABLE `ppSD_login_announcements` ADD FULLTEXT(content);",
	"UPDATE `ppSD_login_announcements` SET `region`='login' WHERE `region`= '' OR `region` IS NULL;",
	"CREATE TABLE `ppSD_login_annoucement_location` (`id` int(11) unsigned NOT NULL AUTO_INCREMENT, `news_id` int(10) DEFAULT NULL, `region` varchar(50) DEFAULT NULL, PRIMARY KEY (`id`)) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;",
	"CREATE TABLE `ppSD_login_announcement_regions` (`id` int(11) unsigned NOT NULL AUTO_INCREMENT, `name` varchar(50) DEFAULT NULL, `tag` varchar(50) DEFAULT NULL, `display` mediumint(6) DEFAULT NULL, `snippet_length` mediumint(4) DEFAULT '100', `template_set_prefix` varchar(30) DEFAULT NULL, PRIMARY KEY (`id`), KEY `tag` (`tag`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8;",
	"INSERT INTO `ppSD_login_announcement_regions` (`id`, `name`, `tag`, `display`) VALUES (1, 'Homepage', 'homepage', 5), (2, 'Member Dashboard', 'dashboard', 10), (3, 'News Page', 'posts_home', 10);",
	"INSERT INTO `ppSD_error_codes` (`code`, `msg`) VALUES ('L035', 'Please log in to access this post.');",
	"INSERT INTO `ppSD_widgets` (`id`, `name`, `type`, `menu_type`, `content`, `active`, `add_class`, `author`, `author_url`, `author_twitter`, `version`, `installed`, `original_creator`, `original_creator_url`, `description`) VALUES ('not_a_member_box', 'Not a Member Box', 'html', '', '\n            <h2 class=\"\">Not a Member?</h2>\n            <div class=\"zen_gray_box\">\n                <div class=\"zen_pad_topl\">\n                    <p class=\"zen\">Not a problem! Non-members can use our automated online registration system to join.</p>\n\n                    <p class=\"zen\"><a href=\"%pp_url%/register.php?action=reset\">Click here to join!</a></p>\n                </div>\n            </div>', 1, '', '', '', '', '', '1920-01-01 00:01:01', '', '', '');",
	"INSERT INTO `ppSD_templates` (`id`, `path`, `theme`, `subtemplate`, `title`, `desc`, `caller_tags`, `order`, `custom_header`, `custom_footer`, `custom_template`, `type`, `section`, `content`, `secure`, `static`, `owner`, `encrypt`, `meta_title`, `lang`) VALUES ('news', '', 'zoid', '', 'News Homepage', '', '', 0, '0', '0', '', 0, 'News', '', 0, 1, 2, 0, 'Organization News', 'en'), ('news_post', '', 'zoid', '', 'News: Standard Post', '', '', 1, '0', '0', '', 0, 'News', '', 0, 1, 2, 0, '', 'en'), ('news_video', '', 'zoid', '', 'News: Video Post', '', '', 2, '0', '0', '', 0, 'News', '', 0, 1, 2, 0, '', 'en'), ('news_entry_none', '', 'zoid', '', 'News Entry: No Posts', '', '', 3, '0', '0', '', 0, 'News', '', 0, 1, 2, 0, '', 'en'), ('news_entry_post', '', 'zoid', '', 'News Entry: Standard Post', '', '', 4, '0', '0', '', 0, 'News', '', 0, 1, 2, 0, '', 'en'), ('news_entry_video', '', 'zoid', '', 'News Entry: Video Post', '', '', 5, '0', '0', '', 0, 'News', '', 0, 1, 2, 0, '', 'en');",
	"UPDATE `ppSD_templates` SET `section`='Cart' WHERE `id`='cart_product_entry_upsell' LIMIT 1;",
	"UPDATE `ppSD_templates` SET `section`='Member Dashboard' WHERE `section`='Account Management?';",
	"UPDATE `ppSD_templates` SET `section`='Member Dashboard' WHERE `section`='Account Management';",
	"UPDATE `ppSD_templates` SET `section`='Member Dashboard' WHERE `section`='Account Management	';",
	"UPDATE `ppSD_templates` SET `section`='Member Dashboard' WHERE `id`='cart_add_card' LIMIT 1;",
	"ALTER TABLE `ppSD_login_announcements` ADD `media_token` varchar(50) DEFAULT NULL;",
);


