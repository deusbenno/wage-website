# ---------- FRONTEND BUILD ----------
FROM node:18 AS node_build

WORKDIR /app
COPY . .

RUN npm install
RUN npm run build || true


# ---------- BACKEND ----------
FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    libzip-dev \
    libpng-dev \
    libonig-dev

RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    mbstring \
    zip

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

# Install PHP dependencies (IMPORTANT FIXED)
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Copy built frontend assets
COPY --from=node_build /app/public/build /app/public/build

EXPOSE 10000

CMD php artisan serve --host 0.0.0.0 --port 10000