FROM prestashop/prestashop:latest

LABEL maintainer="Lee"
ENV TZ=Europe/Warsaw

# Install ionCube loader
RUN cd /tmp/ && wget https://downloads.ioncube.com/loader_downloads/ioncube_loaders_lin_x86-64.tar.gz && \
    tar -zxvf ioncube_loaders_lin_x86-64.tar.gz && \
    mkdir -p /usr/local/ioncube && \
    cp ioncube/ioncube_loader_* /usr/local/ioncube && \
    echo 'zend_extension = /usr/local/ioncube/ioncube_loader_lin_7.2.so' > /usr/local/etc/php/conf.d/00-ioncube.ini && \
    echo 'ServerName 127.0.0.1' >> /etc/apache2/apache2.conf && \
    rm -rf ioncube_loaders_lin_x86-64.tar.gz ioncube

# Install PHP extensions and Git
RUN apt-get update && \
    apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    git && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd mysqli pdo_mysql

# Set permissions for the working directory
#RUN chown -R www-data:www-data /var/www/html && \
#    find /var/www/html -type d -exec chmod 755 {} \; && \
#    find /var/www/html -type f -exec chmod 644 {} \;

# Set the working directory
#WORKDIR /var/www/html
