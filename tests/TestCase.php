<?php

use Illuminate\Foundation\Application;

abstract class TestCase extends Orchestra\Testbench\TestCase
{
    protected function getEnvironmentSetUp($app)
    {
        if (file_exists(__DIR__ . '/../.env')) {
            (new Dotenv\Dotenv(__DIR__ . '/..'))->load();
        }

        $app['config']->set('filesystems.disks.dropbox', [
            'driver' => 'dropbox',
            'token'  => env('DROPBOX_TOKEN'),
        ]);
    }

    protected function getPackageProviders($app)
    {
        return [
            BC\Laravel\DropboxDriver\ServiceProvider::class,
        ];
    }
}
