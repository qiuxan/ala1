<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BlogTest extends TestCase
{
    use  RefreshDatabase;
    /** @test */
    public function it_has_a_path()
    {
         $blog=factory('App\Blog')->create();

         $this->assertEquals('/blogs/'.$blog->id,$blog->path());
    }
}
