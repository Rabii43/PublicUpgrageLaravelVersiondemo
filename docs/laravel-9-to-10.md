# Laravel 9 → Laravel 10 Upgrade Guide

## Version Requirements

| Component | Laravel 9 | Laravel 10 |
|-----------|-----------|------------|
| PHP | ^8.0 | ^8.1 |
| MySQL | 8.0+ | 8.0+ |

## Key Changes

### 1. PHP 8.1 Required
- Union types
- Readonly properties
- First-class callable syntax

### 2. New Features
- Process interaction layer improvements
- HTTP request fingerprinting
- Improved Eloquent accessors/mutators

### 3. Composer Update

```bash
composer require laravel/framework:^10.0
```

## Breaking Changes

### Helpers
- `str_contains()` now returns `bool` instead of `string|null`

### Validation
- `validated()` method now returns array with original keys

### Testing
- PHPUnit 10 support added

## Verification

```bash
php artisan route:list
php artisan test --parallel
```