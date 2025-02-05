FROM --platform=linux/amd64 php:5.6-fpm

RUN sed -i '/stretch-updates/d' /etc/apt/sources.list && \
    sed -i 's/deb.debian.org/archive.debian.org/g' /etc/apt/sources.list && \
    sed -i 's/security.debian.org\/debian-security/archive.debian.org\/debian-security/g' /etc/apt/sources.list && \
    apt-get update -o Acquire::Check-Valid-Until=false -o Acquire::Check-Date=false && \
    apt-get install -y git unzip wkhtmltopdf nginx mysql-client && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    docker-php-ext-install mysqli && \
    docker-php-ext-enable mysqli

COPY ./default.conf /etc/nginx/conf.d/default.conf
EXPOSE 80
CMD service nginx start && php-fpm -F
