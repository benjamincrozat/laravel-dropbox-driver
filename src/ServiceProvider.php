<?php

namespace BC\Laravel\DropboxDriver;

/**
 * Adding a new disk in the storage is pretty easy. The only thing
 * I did were to copy & paste code from the doc & made it easy:
 * https://laravel.com/docs/filesystem#custom-filesystems
 */
class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        \Storage::extend('dropbox', function ($app, $config) {
            // Create a new instance of the Dropbox client from Spatie,
            // which is in charge of making requests to the service.
            $client = new \Spatie\Dropbox\Client($config['token']);

            // Let's teach Flysystem to interact with Dropdox,
            // thanks to an adapter made by Spatie as usual.
            $adapter = new \Spatie\FlysystemDropbox\DropboxAdapter($client);

            // Then, we return a new Flysystem instance,
            // initialized with the Dropbox adapter.
            return new \League\Flysystem\Filesystem($adapter);
        });
    }

    /**
     * Voluntarily empty, because it was an abstract method in Laravel 5.2 and below.
     */
    public function register()
    {
        //
    }
}
