FROM php:8.0-apache 

RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Copy your application files
COPY . /var/www/html/

# Set permissions if needed
RUN chown -R www-data:www-data /var/www/html
