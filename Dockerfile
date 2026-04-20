# Usamos la imagen oficial de PHP con el servidor Apache ya configurado
FROM php:8.2-apache

# Instalamos extensiones comunes por si usas bases de datos o librerías
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiamos todo el contenido de tu carpeta actual al servidor de Render
COPY . /var/www/html/

# Damos permisos de lectura a los archivos para que el servidor pueda mostrarlos
RUN chown -R www-data:www-data /var/www/html

# Exponemos el puerto 80
EXPOSE 80