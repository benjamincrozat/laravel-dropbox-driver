<?php

use Illuminate\Support\Facades\Storage;

class DropboxDriverTest extends TestCase
{
    /** @test */
    function it_creates_and_removes_a_folder()
    {
        $this->assertNotNull(Storage::disk('dropbox')->directories('/'));
    }
}
