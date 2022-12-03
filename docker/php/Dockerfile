FROM php:8.1-fpm

# Install dependencies
RUN apt-get update --fix-missing
RUN apt-get install -y curl git cron supervisor nano libssl-dev libpng-dev libpq-dev libzip-dev libmemcached-dev

# Add docker php ext repo
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

# Install php extensions
RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions pdo pdo_mysql mysqli gd zip mcrypt mbstring openssl memcached

# Install composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Clear cache
RUN apt-get clean && apt-get autoremove && rm -rf /var/lib/apt/lists/*

# Set working directory
WORKDIR /var/www/html

# Copy code to /var/www/html
COPY . .

RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html