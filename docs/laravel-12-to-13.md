# Laravel 12 → Laravel 13 Upgrade Guide

## Version Requirements

| Component | Laravel 12 | Laravel 13 |
|-----------|------------|------------|
| PHP | ^8.2 | ^8.4 |
| MySQL | 8.0+ | 8.0+ |

## Key Changes

### 1. PHP 8.4 Required
Laravel 13 requiert PHP 8.4 minimum. Updatez votre environnement PHP.

### 2. Composer Update

```bash
composer require laravel/framework:^13.0
```

### 3. Breaking Changes

- Property promotion changes in some facades
- Updated type hints throughout codebase
- New Laravel Pail improvements
- Updated Vite configuration

## Prerequisites
- Update PHP vers 8.4+
- Update Composer vers 2.8+
- Run `php artisan config:cache` after upgrade

## Commands

```bash
php artisan vendor:publish --tag=laravel-assets --force
php artisan optimize:clear
composer dump-autoload
npm install && npm run build
```

## Testing After Upgrade

```bash
php artisan route:list
php artisan test
```