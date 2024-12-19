#!/bin/bash
until mysql -h"$DB_HOST" -u"$DB_USER" -p"$DB_PASSWORD" -e "SHOW DATABASES;" > /dev/null 2>&1; do
    sleep 3
done
mysql -h"$DB_HOST" -u"$DB_USER" -p"$DB_PASSWORD" "$DB_NAME" < /opt/schema.sql
apache2-foreground
