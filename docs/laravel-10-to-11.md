# Laravel 10 → Laravel 11 Upgrade Guide

## Version Requirements

| Component | Laravel 10 | Laravel 11 |
|-----------|------------|------------|
| PHP | ^8.1 | ^8.2 |
| MySQL | 8.0+ | 8.0+ |

## Major Changes - Application Structure

### 1. New bootstrap/app.php
Laravel 11 introduces a streamlined `bootstrap/app.php` file.

**Old (Laravel 10)**:
```php
// bootstrap/app.php
$app = new Illuminate\Foundation\Application(...);
// Many configuration lines...
return $app;
```

**New (Laravel 11)**:
```php
// bootstrap/app.php
return Illuminate\Foundation\Application::configure(...)
    ->withProviders([...])
    ->create();
```

### 2. Configuration Changes

#### config/app.php
- Remove `$providers` and `$aliases` arrays
- Providers auto-discovered via attribute

#### config/cache.php
- Redis cache store configuration updated

### 3. Composer Update

```bash
composer require laravel/framework:^11.0
```

## Breaking Changes

### 1. Routes
- Route caching now requires `php artisan route:list --path` for specific paths
- API route file structure changed

### 2. Middleware
- Some middleware groups renamed
- CSRF token handling updated

### 3. Pest/PHPUnit
- Tests structure may need updates
- Pest v2 recommended

## Upgrade Steps

### Step 1: Backup
```bash
cp -r app app_backup
```

### Step 2: Update composer.json
```json
"require": {
    "php": "^8.2",
    "laravel/framework": "^11.0"
}
```

### Step 3: Run Upgrade
```bash
composer update
php artisan migrate
```

## Potential Errors

### Error: Application class not found
```
Class 'Illuminate\Foundation\Application' not found
```
**Solution**: Update bootstrap/app.php to new structure.

### Error: Provider not found
```
Target class [App\Providers\SomeProvider] does not exist
```
**Solution**: Add `#[Illuminate\Support\Providers\ServiceProvider]` attribute to providers.

## Verification

```bash
php artisan route:list
php artisan config:check
php artisan test
```