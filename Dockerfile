# ---------- FRONTEND BUILD ----------
FROM node:20 AS node_build

WORKDIR /app

COPY package*.json ./
RUN npm install

COPY . .
RUN npm run build


# ---------- BACKEND ----------
FROM php:8.4.22-cli

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

# Copy application
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Bring Vite build from node stage (CRITICAL)
COPY --from=node_build /app/public/build /app/public/build

# ================================
# 🔥 FIX: FORCE CLEAN LARAVEL CONFIG
# ================================
RUN php artisan config:clear || true
RUN php artisan cache:clear || true
RUN php artisan view:clear || true
RUN php artisan config:cache || true

EXPOSE 10000

CMD php -S 0.0.0.0:10000 -t public