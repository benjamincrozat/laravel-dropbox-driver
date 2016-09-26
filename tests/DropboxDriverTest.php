<?php

class DropboxDriverTest extends TestCase
{
    /** @test */
    public function it_works()
    {
        $this->assertTrue(Storage::disk('dropbox')->makeDirectory('test'));
        $this->assertTrue(Storage::disk('dropbox')->deleteDirectory('test'));
    }
}
