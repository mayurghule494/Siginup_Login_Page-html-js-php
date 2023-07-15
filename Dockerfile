# Use an official PHP with Apache runtime as the base image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the project files to the working directory
COPY . .

# Enable Apache rewrite module
RUN a2enmod rewrite

# Install MySQL extensions for PHP
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Set the document root to the working directory
ENV APACHE_DOCUMENT_ROOT /var/www/html

# Update Apache virtual host configuration
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Expose port 5000
EXPOSE 5000

# Start Apache server
CMD ["apache2-foreground"]

