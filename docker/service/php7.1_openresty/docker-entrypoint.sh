#!/bin/bash
# auther: ge2x3k2@gmail.com

echo "info: starting php-fpm.."
/usr/sbin/php-fpm -c /etc/php.ini -y /etc/php-fpm.conf

echo "info: nginx non-daemon startup"
nginx -c /etc/nginx/nginx.conf -g 'daemon off;'