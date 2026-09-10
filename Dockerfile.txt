FROM php:8.2-apache

# Install required system dependencies
RUN apt-get update && apt-get install -y \
    libicu-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-install icu intl opcache mysqli pdo pdo_mysql

# Enable Apache mod_rewrite for CodeIgniter routing
RUN a2enmod rewrite

# Set Apache document root to CodeIgniter's public folder
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/conf-available/*.conf

# Copy project files into container
COPY . /var/www/html/

# Set correct permissions for CodeIgniter writable directory
RUN chown -R www-data:www-data /var/www/html/writable

EXPOSE 80