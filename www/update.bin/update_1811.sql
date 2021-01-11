ALTER TABLE `XXX_papoo_config` ADD `rename_file_on_file_change` text NULL; ##b_dump##
UPDATE `XXX_papoo_config` SET `rename_file_on_file_change` = '1'; ##b_dump##
ALTER TABLE `XXX_papoo_daten` ADD `twitter_handle` VARCHAR(16) NOT NULL DEFAULT ''; ##b_dump##
ALTER TABLE `XXX_papoo_daten` ADD `captcha_sitekey` VARCHAR( 255 ) NOT NULL; ##b_dump##
ALTER TABLE `XXX_papoo_daten` ADD `captcha_secret` VARCHAR( 255 ) NOT NULL; ##b_dump##
