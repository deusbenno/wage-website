# ---------- FRONTEND ----------
FROM node:20 AS node_build

WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build


# ---------- BACKEND ----------
FROM php:8.4.22-cli

RUN apt-get update && apt-get install -y \
    unzip git curl \
    libzip-dev libpng-dev libonig-dev

RUN docker-php-ext-install pdo pdo_mysql mbstring zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# bring Vite build
COPY --from=node_build /app/public/build /app/public/build

# clean caches safely
RUN rm -f bootstrap/cache/*.php || true

EXPOSE 10000

# ---------- FIX: PRODUCTION SERVER ----------
CMD php -S 0.0.0.0:10000 -t public