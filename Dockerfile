#Pull down php and copy the contents of src to the web server.

FROM php:7.3-apache
COPY src/ /var/www/html
EXPOSE 80
