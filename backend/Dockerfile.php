FROM php:8.2-fpm

# 安装常用的 PHP 扩展和系统依赖
RUN apt-get update && \
    apt-get install -y \
        libpng-dev \
        libzip-dev \
        zip \
        unzip \
        git

# 安装 PHP 扩展：pdo_mysql, mysqli, gd, zip
RUN docker-php-ext-install pdo_mysql mysqli gd zip

# 安装并启用 Redis 扩展 (通过 PECL)
RUN pecl install redis && docker-php-ext-enable redis

# 安装 Composer (PHP 的依赖管理工具)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html