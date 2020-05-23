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

    /** @test */
    public function it_specifes_a_path_prefix_for_dropbox()
    {
        config(['filesystems.disks.dropbox.token' => '']);
        config(['filesystems.disks.dropbox.path_prefix' => 'path/to/rootFolder']);

        $adapter = Storage::disk('dropbox')->getAdapter();
        $this->assertEquals('path/to/rootFolder/', $adapter->getPathPrefix());
    }

    /** @test */
    public function it_allows_for_absence_of_path_prefix()
    {
        config(['filesystems.disks.dropbox.token' => '']);

        $adapter = Storage::disk('dropbox')->getAdapter();
        $this->assertNull($adapter->getPathPrefix());
    }
}
