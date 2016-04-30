# Laravel Dropbox Driver

Dropbox driver for Laravel.

## Usage

First, install it:
```php
composer require benjamincrozat/laravel-dropbox-driver
```

In your ```config/app.php```, add the service provider:
```php
'providers' => [

    BC\LaravelDropboxDriver\ServiceProvider::class,

],
```

Next, add the following in ```app/filesystems.php```:
```php
'disks' => [

    'dropbox' => [
        'driver' => 'dropbox',
        'app_secret' => env('DROPBOX_APP_SECRET'),
        'token' => env('DROPBOX_TOKEN'),
    ],

],
```

Then, in your ```.env``` file:
```
DROPBOX_APP_SECRET=your_app_secret_key
DROPBOX_TOKEN=your_access_token
```

## License

[WTFPL](http://www.wtfpl.net/about/)
