<?php

namespace BC\Laravel\DropboxDriver\Tests;

use Illuminate\Foundation\Application;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        if (file_exists(__DIR__ . '/../.env')) {
            (new \Dotenv\Dotenv(__DIR__ . '/..'))->load();
        }

        $app['config']->set('filesystems.disks.dropbox', [
            'driver' => 'dropbox',
            'token' => env('DROPBOX_TOKEN'),
        ]);
    }

    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            'BC\Laravel\DropboxDriver\ServiceProvider',
        ];
    }
}
