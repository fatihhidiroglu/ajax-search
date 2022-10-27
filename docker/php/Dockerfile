FROM php:7.4.13-fpm

# Set working directory
WORKDIR /var/www

#Root privileges for download
USER root

# Install dependencies
RUN apt-get update && apt-get install -y \
    mariadb-client \
    nginx

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_mysql

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions mysqli

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

# Change current user to www
USER www

# Expose port 80 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]