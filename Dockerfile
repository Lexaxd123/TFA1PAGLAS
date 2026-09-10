FROM php:8.2-apache

# Install system libraries needed for CodeIgniter 4
RUN apt-get update && apt-get install -y \
    libicu-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl opcache mysqli pdo_mysql

# Enable Apache mod_rewrite for clean CodeIgniter routes
RUN a2enmod rewrite

# Point Apache document root to CodeIgniter's public folder
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/conf-available/*.conf

# Copy project files into container
COPY . /var/www/html/

# Set write permissions for CodeIgniter cache and logs
RUN chown -R www-data:www-data /var/www/html/writable

EXPOSE 80