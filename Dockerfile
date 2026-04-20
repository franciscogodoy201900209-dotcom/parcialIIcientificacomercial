FROM php:8.2-apache

# Cambiar el puerto de Apache para que coincida con lo que Render espera
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# Copiar tus archivos al servidor
COPY . /var/www/html/

# Asegurar permisos de lectura
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto dinámico
EXPOSE ${PORT}