FROM php:8.4-cli

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git unzip curl libpq-dev libzip-dev zip npm \
    && docker-php-ext-install pdo pdo_pgsql zip

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Crear carpeta app
WORKDIR /app

# Copiar archivos
COPY . .

# Instalar dependencias
RUN composer install --no-dev --optimize-autoloader

# Instalar Node y build frontend
RUN npm install && npm run build

# Permisos
RUN chmod -R 775 storage bootstrap/cache

# Exponer puerto
EXPOSE 8000

RUN mkdir -p database && touch database/database.sqlite

# Comando de inicio
CMD php artisan migrate --force && php artisan config:clear && php artisan cache:clear && php artisan serve --host=0.0.0.0 --port=8000