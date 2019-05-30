# Force https middleware for Laravel

WIP Testing

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