<?php

namespace BC\Laravel\DropboxDriver;

use Storage;
use League\Flysystem\Filesystem;
use Spatie\Dropbox\Client as DropboxClient;
use Spatie\FlysystemDropbox\DropboxAdapter;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot() : void
    {
        Storage::extend('dropbox', function ($app, $config) {
            return new Filesystem(
                new DropboxAdapter(
                    new DropboxClient($config['token'], $config['app_secret'])
                )
            );
        });
    }

    /**
     * Register the application services.
     */
    public function register() : void
    {
        //
    }
}
