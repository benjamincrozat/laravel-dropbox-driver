<?php

namespace BC\Laravel\DropboxDriver;

use Storage;
use League\Flysystem\Filesystem;
use Dropbox\Client as DropboxClient;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use League\Flysystem\Dropbox\DropboxAdapter;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Storage::extend('dropbox', function ($app, $config) {
            $client = new DropboxClient($config['token'], $config['app_secret']);

            return new Filesystem(new DropboxAdapter($client));
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
