# ใช้ PHP Apache base image
FROM php:7.4-apache

# กำหนด working directory
WORKDIR /var/www/html

# ติดตั้ง libcurl ก่อน
RUN apt-get update && apt-get install -y libcurl4-openssl-dev pkg-config

# ติดตั้ง curl extension และ mysqli extension สำหรับ PHP
RUN docker-php-ext-install curl mysqli

# ติดตั้ง Composer สำหรับจัดการ dependency
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# คัดลอกไฟล์ใน local ไปยัง container
COPY src/ /var/www/html/

# ติดตั้ง dependencies ผ่าน Composer
RUN composer install

# เปิดพอร์ต 80
EXPOSE 80
