FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    unzip git curl nodejs npm

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer install --no-dev --optimize-autoloader

# 🔥 IMPORTANT: build frontend assets
RUN npm install
RUN npm run build

EXPOSE 10000

CMD php artisan serve --host 0.0.0.0 --port 10000