#!/bin/sh
php composer.phar install --prefer-dist --no-scripts
php app/console -e=prod cache:clear
php app/console -e=dev cache:clear