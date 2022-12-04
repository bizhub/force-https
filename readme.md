# Force https middleware for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bizhub/force-https.svg?style=flat-square)](https://packagist.org/packages/bizhub/inertia-query-filter) ![Packagist Downloads](https://img.shields.io/packagist/dt/bizhub/force-https?style=flat-square)

## Installation

### 1. Composer

Execute the following command to get the latest version of the package:

```terminal
composer require bizhub/force-https
```

### 2. Laravel

Add `Bizhub\ForceHttps\Middleware\ForceHttps::class` to `app/Http/Kernel.php`

```php
protected $middlewareGroups = [
    'web' => [
        // ...

        \Bizhub\ForceHttps\Middleware\ForceHttps::class
    ]
];
```