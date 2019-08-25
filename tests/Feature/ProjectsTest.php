<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectsTest extends TestCase
{

    use withFaker,RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */


    /** @test */

    public function a_admin_can_add_a_blog()
    {

        $this->withoutExceptionHandling();
        $attributes=[
           'title'=> $this->faker->sentence,
           'description'=>$this->faker->paragraph,

        ];

        $this->post('/blogs',$attributes)->assertRedirect('/blogs');

        $this->assertDatabaseHas('blogs',$attributes);


       // $this->get('/blogs')->assertSee($attributes['title']);
    }

    /** @test */
    public function a_blog_requires_a_title()
    {
        $attribute=factory('App\Blog')->raw(['title'=>'']);
        $this->post('/blogs',$attribute)->assertSessionHasErrors('title');
    }


    /** @test */
    public function a_blog_requires_a_description()
    {
        $attribute=factory('App\Blog')->raw(['description'=>'']);
        $this->post('/blogs',$attribute)->assertSessionHasErrors('description');
    }

    /** @test */
    public function a_user_can_view_a_project()
    {

        $this->withoutExceptionHandling();

        $blog=factory('App\Blog')->create();

        $this->get($blog->path())
            ->assertSee($blog->title)
            ->assertSee($blog->description);

    }
    


}
