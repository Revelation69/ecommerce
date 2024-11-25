FROM php:8.2-fpm

# Add labels for metadata
LABEL "Project"="Ecommerce"
LABEL "Author"="Revelation69"

# Set the working directory
WORKDIR /var/www/html

# Install required PHP extensions and set permissions
RUN docker-php-ext-install mysqli pdo pdo_mysql && \
    chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Expose PHP-FPM port
EXPOSE 9000
