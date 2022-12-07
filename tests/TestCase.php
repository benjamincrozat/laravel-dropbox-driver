<?php

namespace BenjaminCrozat\Laravel\Dropbox\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use BenjaminCrozat\Laravel\Dropbox\DropboxServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            DropboxServiceProvider::class,
        ];
    }
}
