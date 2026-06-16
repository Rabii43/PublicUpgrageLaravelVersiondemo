# Laravel 8 → Laravel 9 Upgrade Guide

## Version Requirements

| Component | Laravel 8 | Laravel 9 |
|-----------|-----------|-----------|
| PHP | ^7.3 \| ^8.0 | ^8.0 |
| MySQL | 5.7+ | 8.0+ |

## Key Changes

### 1. Symfony Upgrade
- Symfony components upgraded from v5 to v6
- Requires PHP 8.0+

### 2. Flysystem Upgrade
- Intervention Image library updated
- Storage facade API changes

### 3. Composer Dependencies Update

Remove from `composer.json`:
- `fideloper/proxy`
- `fruitcake/laravel-cors`

Update in `composer.json`:
```json
"require": {
    "php": "^8.0",
    "laravel/framework": "^9.0",
    "laravel/sanctum": "^2.15"
},
"require-dev": {
    "fakerphp/faker": "^5.0",
    "mockery/mockery": "^1.4",
    "nunomaduro/collision": "^6.0",
    "phpunit/phpunit": "^9.3"
}
```

## Commands

```bash
# Update framework version
composer require laravel/framework:^9.0 --ignore-platform-reqs

# Clear cache
php artisan clear-compiled
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Rebuild autoloader
composer dump-autoload
```

## Potential Errors & Solutions

### Error 1: Parameter bag constructor
```
Error: Argument #1 ($parameters) must be of type array, null given
```
**Solution**: Clear all caches and regenerate autoloader.

### Error 2: Missing proxy configuration
```
Error: Class 'Fideloper\Proxy\TrustProxies' not found
```
**Solution**: Remove `TrustProxies.php` middleware and `trustedproxy.php` config (handled by Laravel 9 internally).

### Error 3: Cors configuration
```
Error: Route [login] is not defined
```
**Solution**: Update `config/cors.php` to add routes if API is used.

## Breaking Changes to Check

1. **Controllers**: Add return types to methods
2. **Models**: Update `$casts` array syntax
3. **Middleware**: Remove deprecated TrustProxies
4. **Routes**: Check route:list for changes

## Verification

```bash
php artisan route:list
php artisan config:check
php artisan test
```