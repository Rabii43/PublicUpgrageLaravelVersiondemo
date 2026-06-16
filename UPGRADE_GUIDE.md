# Laravel Upgrade Guide

This document provides a comprehensive guide for upgrading Laravel versions in this project.

## Overview
 
| Version | PHP Required | Release Date | Status |
|---------|-------------|--------------|--------|
| Laravel 8 | ^7.3 \|\| ^8.0 | Feb 2020 | EOL |
| Laravel 9 | ^8.0 | Feb 2022 | EOL |
| Laravel 10 | ^8.1 | Feb 2023 | EOL |
| Laravel 11 | ^8.2 | Mar 2024 | Maint |
| Laravel 12 | ^8.2 | Feb 2025 | Maint |
| Laravel 13 | ^8.4 | May 2026 | Latest |

## Upgrade Path

```
main (Laravel 8) → upgrade-laravel-11 → upgrade-laravel-12 → upgrade-laravel-13
```

## Prerequisites

- Composer 2.x
- Node.js 16+ for npm
- PHP version compatible with target Laravel version
- MySQL 8.0+ recommended

## General Upgrade Steps

1. **Backup** your current working application
2. **Check PHP version** compatibility
3. **Update composer.json** with new Laravel version
4. **Run composer update** with `--with-dependencies`
5. **Clear all caches**:
   ```bash
   php artisan clear-compiled
   php artisan cache:clear
   php artisan config:clear
   php artisan route:clear
   php artisan view:clear
   ```
6. **Review breaking changes** in official Laravel upgrade guide
7. **Run tests** to verify functionality
8. **Update npm dependencies** if asset compilation is needed

## Specific Upgrade Guides

- [Laravel 8 to 9](laravel-8-to-9.md) (Requires PHP 8.0)
- [Laravel 9 to 10](laravel-9-to-10.md) (Requires PHP 8.1)
- [Laravel 10 to 11](laravel-10-to-11.md) (Requires PHP 8.2)
- [Laravel 11 to 12](laravel-11-to-12.md)
- [Laravel 12 to 13](laravel-12-to-13.md) (Requires PHP 8.4)

## Git Branching Strategy

```bash
# Create upgrade branch
git checkout -b upgrade-laravel-9

# After upgrade, tag and merge
git commit -m "Upgrade Laravel from 8 to 9"
git tag laravel-9
git push origin upgrade-laravel-9
```

## Troubleshooting

### Common Issues

1. **Package compatibility**: Check packagist for Laravel 9/10 compatible versions
2. **PHP version conflicts**: May require separate PHP installations
3. **Asset compilation**: Laravel Mix (v8) vs Vite (v9+) differences

### Debug Commands

```bash
# Check installed packages
composer show | grep laravel

# Check PHP extensions
php -m

# Validate configuration
php artisan config:check

# Run migration dry-run
php artisan migrate --pretend
```