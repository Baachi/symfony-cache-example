#!/bin/sh
git pull origin master
php composer.phar install
php app/console cache:clear