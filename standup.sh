#!/bin/bash
#DOWNLOAD
#composer create-project drupal/recommended-project my_site_name_dir
#cd my_site_name_dir
#composer require drush/drush
#composer require drush/config-extra
#ln -s vendor/drush/drush/drush ./
composer install

INSTALL
sudo mysql -u root -e 'create database drupalprez';
sudo mysql -u root -e "grant all privileges on drupalprez.* to dp@localhost identified by 'thisisapassword'";
./drush si --db-url='mysql://dp:thisisapassword@localhost:3306/drupalprez'

DEV SERVER
./drush rs

BACKUP
./drush cr
./drush updb
./drush sql:dump
./drush cex

INTERROGATIONS
./drush upwd admin 'thisisapassword'
./drush cget system.site uuid

INSTALL MODULE
composer require drupal/ctools
./drush pm:list
./drush pm:enable ctools 

RESTORE 
drush cset system.site uuid <uuid> -y

REFERENCES
https://drushcommands.com/drush-9x
