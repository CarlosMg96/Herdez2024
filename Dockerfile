FROM php:8.0-apache

# Habilitar módulos necesarios de Apache
RUN a2enmod rewrite headers

# Set environment variable for ServerName (default to localhost)
ENV APACHE_SERVER_NAME=localhost

# Configure Apache to use the environment variable for ServerName
RUN echo "ServerName ${APACHE_SERVER_NAME}" >> /etc/apache2/apache2.conf

# # Crear archivo de configuración para las cabeceras de seguridad
# RUN echo '<IfModule mod_headers.c>' > /etc/apache2/conf-available/security-headers.conf
# RUN echo '    Header always set X-XSS-Protection "1; mode=block"' >> /etc/apache2/conf-available/security-headers.conf
# RUN echo '    Header always set X-Frame-Options "DENY"' >> /etc/apache2/conf-available/security-headers.conf
# RUN echo '    Header always set X-Content-Type-Options "nosniff"' >> /etc/apache2/conf-available/security-headers.conf
# RUN echo '    Header always set X-Permitted-Cross-Domain-Policies "none"' >> /etc/apache2/conf-available/security-headers.conf
# RUN echo '    Header always set Strict-Transport-Security "max-age=31536000; includeSubDomains; preload"' >> /etc/apache2/conf-available/security-headers.conf
# RUN echo '    Header always set Referrer-Policy "no-referrer-when-downgrade"' >> /etc/apache2/conf-available/security-headers.conf
# RUN echo '    Header always set Cache-Control "no-cache, no-store, must-revalidate"' >> /etc/apache2/conf-available/security-headers.conf
# RUN echo '    Header always set Permissions-Policy "camera=(), microphone=(), geolocation=()"' >> /etc/apache2/conf-available/security-headers.conf
# RUN echo '    Header always unset X-Powered-By' >> /etc/apache2/conf-available/security-headers.conf
# RUN echo '    Header always set Content-Security-Policy "default-src '\''self'\''; script-src '\''self'\'' '\''nonce-MiN0nc3Fijo-2023-Q9x7p8T'\'' https://www.googletagmanager.com https://code.jquery.com https://unpkg.com https://cdnjs.cloudflare.com; style-src '\''self'\'' https://cdnjs.cloudflare.com https://fonts.googleapis.com https://unpkg.com '\''unsafe-inline'\''; font-src '\''self'\'' https://fonts.gstatic.com; img-src '\''self'\'' data: https:; connect-src '\''self'\'' https://www.google-analytics.com;"' >> /etc/apache2/conf-available/security-headers.conf
# RUN echo '</IfModule>' >> /etc/apache2/conf-available/security-headers.conf

# # Habilitar la configuración de seguridad
# RUN a2enconf security-headers

# Copy your website files into the container
COPY . /var/www/html/

# Change ownership of the files to the Apache user
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80