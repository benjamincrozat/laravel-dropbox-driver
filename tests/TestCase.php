<?php

abstract class TestCase extends Orchestra\Testbench\TestCase
{
    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('filesystems.disks.dropbox', [
            'driver' => 'dropbox',
            'app_secret' => 'app_secret',
            'token' => 'token',
        ]);
    }

    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            BC\LaravelDropboxDriver\ServiceProvider::class,
        ];
    }
}
