#!/bin/bash

cd /var/www/html

composer install

cd /var/www/html/web

../vendor/bin/drush cim --yes

../vendor/bin/drush updb

../vendor/bin/drush cr
