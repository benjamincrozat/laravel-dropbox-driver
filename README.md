[![Test](https://github.com/benjamincrozat/laravel-dropbox-driver/actions/workflows/test.yml/badge.svg)](https://github.com/benjamincrozat/laravel-dropbox-driver/actions/workflows/test.yml)
[![Latest Stable Version](https://poser.pugx.org/benjamincrozat/laravel-dropbox-driver/v/stable)](https://packagist.org/packages/benjamincrozat/laravel-dropbox-driver)
[![License](https://poser.pugx.org/benjamincrozat/laravel-dropbox-driver/license)](https://packagist.org/packages/benjamincrozat/laravel-dropbox-driver)
[![Total Downloads](https://poser.pugx.org/benjamincrozat/laravel-dropbox-driver/downloads)](https://packagist.org/packages/benjamincrozat/laravel-dropbox-driver)

# Laravel Dropbox Driver

Dropbox driver for Laravel.

Adding a new disk in the storage is pretty easy. The only things I did were to copy and paste code from the documentation and made it a package: https://laravel.com/docs/filesystem#custom-filesystems

## Requirements

- PHP 7.0+
- Laravel 5.1+

## Installation

```php
composer require benjamincrozat/laravel-dropbox-driver
```

## Usage

If you're on Laravel 5.4 and below, add the service provider in your ```config/app.php``` file:

```php
'providers' => [

    BC\Laravel\DropboxDriver\ServiceProvider::class,

],
```

Next, add the following in ```app/filesystems.php```:

```php
'disks' => [

    'dropbox' => [
        'driver' => 'dropbox',
        'token'  => env('DROPBOX_TOKEN'),
    ],

],
```

Then, in your ```.env``` file:

```
DROPBOX_TOKEN=your_access_token
```

**Dealing with Dropbox for the first time? Here's the [link](https://www.dropbox.com/developers/apps/create) to create your first application and generate your access token.**

## License

[WTFPL](http://www.wtfpl.net/about/)
