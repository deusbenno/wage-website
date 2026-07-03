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

# Copy EVERYTHING EXCEPT overwriting build later
COPY . .

# Install PHP deps
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# 🚨 IMPORTANT: bring built assets LAST (override-safe)
COPY --from=node_build /app/public/build /app/public/build

# Clear Laravel caches (important for Vite manifest detection)
RUN php artisan config:clear && \
    php artisan view:clear && \
    php artisan cache:clear

EXPOSE 10000

CMD php artisan serve --host 0.0.0.0 --port 10000