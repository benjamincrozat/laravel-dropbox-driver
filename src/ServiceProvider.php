<?php

namespace BC\Laravel\DropboxDriver;

use League\Flysystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Spatie\Dropbox\Client as DropboxClient;
use Spatie\FlysystemDropbox\DropboxAdapter;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        Storage::extend('dropbox', function ($app, $config) {
            return new Filesystem(
                new DropboxAdapter(
                    new DropboxClient($config['token'])
                )
            );
        });
    }
}
