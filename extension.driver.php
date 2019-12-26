<?php

declare(strict_types=1);

require_once realpath(__DIR__.'/vendor/autoload.php');

class extension_jsonfield extends Extension
{
    public function uninstall()
    {
        Symphony::Database()->query('DROP TABLE `tbl_fields_json`');
    }

    public function install()
    {
        return Symphony::Database()
            ->query(
                'CREATE TABLE `tbl_fields_json` (
                    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                    `field_id` int(11) unsigned NOT NULL,
                    `size` int(3) unsigned NOT NULL,
                    PRIMARY KEY (`id`),
                    KEY `field_id` (`field_id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;'
            );
    }
}
