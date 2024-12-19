FROM php:8.3-apache
RUN apt-get update && apt-get install -y mariadb-client 
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
ADD bookmedik /var/www/html/
EXPOSE 80
ENV DB_HOST=mariadb
ENV DB_NAME=bookmedik
ENV DB_USER=bookmedik
ENV DB_PASSWORD=bookmedik
ADD script.sh /usr/local/bin/script.sh
ADD schema.sql /opt
RUN chmod +x /usr/local/bin/script.sh
CMD ["bash", "/usr/local/bin/script.sh"]
