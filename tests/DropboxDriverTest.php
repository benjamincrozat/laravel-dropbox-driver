<?php

use Illuminate\Support\Facades\Storage;

class DropboxDriverTest extends TestCase
{
    /** @test */
    public function it_works()
    {
        // Let's pretend a Dropbox token has been set up.
        config(['filesystems.disks.dropbox.token' => '']);

        // Just check that the disk is resolved. No need to ping
        // Dropbox, since spatie/flysystem-dropbox does it.
        $this->assertInstanceOf(Illuminate\Filesystem\FilesystemAdapter::class, Storage::disk('dropbox'));
    }
}
