# GaeSupportLaravel

Google App Engine (GAE) Standard and Flexible Environment support package for Laravel 5.5.

[![Latest Stable Version](https://poser.pugx.org/a1comms/gae-support-laravel/v/stable)](https://packagist.org/packages/a1comms/gae-support-laravel)
[![Monthly Downloads](https://poser.pugx.org/a1comms/gae-support-laravel/d/monthly)](https://packagist.org/packages/a1comms/gae-support-laravel)
[![Total Downloads](https://poser.pugx.org/a1comms/gae-support-laravel/downloads)](https://packagist.org/packages/a1comms/gae-support-laravel)
[![Latest Unstable Version](https://poser.pugx.org/a1comms/gae-support-laravel/v/unstable)](https://packagist.org/packages/a1comms/gae-support-laravel)
[![License](https://poser.pugx.org/a1comms/gae-support-laravel/license)](https://packagist.org/packages/a1comms/gae-support-laravel)

Based on original work for App Engine Standard by @shpasser https://github.com/shpasser/GaeSupportL5

This library is designed for homogeneous operation between the Standard Environment and the Flexible Environment.

## Functionality
* StackDriver Logging integration
* StackDriver Trace integration (see [docs/trace.md](https://github.com/a1comms/GaeSupportLaravel/blob/php72-laravel55/docs/trace.md))
* Blade View Pre-Compiler (optional, see [docs/blade-pre-compile.md](https://github.com/a1comms/GaeSupportLaravel/blob/php72-laravel55/docs/blade-pre-compile.md))
* Guzzle integration (optional, see [docs/guzzle.md](https://github.com/a1comms/GaeSupportLaravel/blob/php72-laravel55/docs/guzzle.md))

## Installation

Pull in the package via Composer.

```js
"require": {
    "a1comms/gae-support-laravel": "~5.5"
}
```

For Laravel, include the service provider within `config/app.php`:

```php
'providers' => [
    A1comms\GaeSupportLaravel\GaeSupportServiceProvider::class,
];
```
