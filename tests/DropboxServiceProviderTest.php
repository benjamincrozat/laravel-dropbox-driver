<?php

use League\Flysystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Illuminate\Filesystem\FilesystemAdapter;

it('asserts true equals true', function () {
    config()->set('filesystems.disks.dropbox', [
        'driver' => 'dropbox',
        'token'  => '',
    ]);

    $this->assertInstanceOf(FilesystemAdapter::class, Storage::disk('dropbox'));
});
