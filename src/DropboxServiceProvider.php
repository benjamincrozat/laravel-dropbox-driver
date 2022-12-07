<?php

namespace BenjaminCrozat\Laravel\Dropbox;

use Spatie\Dropbox\Client;
use League\Flysystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Spatie\FlysystemDropbox\DropboxAdapter;
use Illuminate\Filesystem\FilesystemAdapter;

class DropboxServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        Storage::extend('dropbox', function ($app, $config) {
            $adapter = new DropboxAdapter(new Client(
                $config['token']
            ));

            return new FilesystemAdapter(
                new Filesystem($adapter, $config),
                $adapter,
                $config
            );
        });
    }
}
