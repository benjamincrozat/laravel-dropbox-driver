<?php

class DropboxDriverTest extends TestCase
{
    /** @test */
    public function it_adds_a_new_storage()
    {
        $this->assertInstanceOf('Illuminate\Filesystem\FilesystemAdapter', Storage::disk('dropbox'));
    }
}
