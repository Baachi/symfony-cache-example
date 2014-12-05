#!/bin/sh
php composer.phar install
php app/console cache:clear