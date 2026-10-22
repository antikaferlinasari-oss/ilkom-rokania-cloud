# Menggunakan base image PHP dengan Apache
FROM php:8.1-apache

# Install ekstensi mysqli untuk koneksi ke database MySQL
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Salin seluruh berkas project ke direktori web server Apache
COPY . /var/www/html/

# Buka port 80 untuk akses web
EXPOSE 80