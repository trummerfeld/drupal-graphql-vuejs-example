#!/bin/bash

cd /var/www/html

composer install

cd /var/www/html/web

../vendor/bin/drush site:install --existing-config --db-url=mysql://drupal:drupal@mariadb:3306/drupal

../vendor/bin/drush cr

../vendor/bin/drush duc-news
