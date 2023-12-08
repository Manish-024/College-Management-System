# Use the official PHP with Apache base image
FROM php:7.4-apache

# Update package lists and upgrade existing packages
RUN apt-get update && apt-get upgrade -y

# Install necessary PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN service apache2 restart
# Set the working directory in the container
WORKDIR /var/www/html

# Copy the PHP application files into the container
COPY ./University-Management-System /var/www/html

# Expose ports for HTTP and HTTPS
EXPOSE 80
EXPOSE 443

# Start Apache service when the container starts
CMD ["apache2-foreground"]
