# Laravel 11 → Laravel 12 Upgrade Guide

## Version Requirements

| Component | Laravel 11 | Laravel 12 |
|-----------|------------|------------|
| PHP | ^8.2 | ^8.2 |
| MySQL | 8.0+ | 8.0+ |

## Key Changes

### 1. Laravel Pennant
New feature flag management package included by default.

### 2. Improved Type Safety
- Better PHP type hints throughout
- Typed properties enforced

### 3. Composer Update

```bash
composer require laravel/framework:^12.0
```

## Breaking Changes

### Model Configuration
- Custom casts may need updates

### Queue System
- Redis connection improvements

## Verification

```bash
php artisan pennant:install  # If using feature flags
php artisan test
```