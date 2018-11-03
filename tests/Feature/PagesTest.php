<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PagesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample1()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);

        echo "\n\nRegister page sent code 200";
    }
    public function testExample2()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);

        echo "\n\nLogin page sent code 200";
    }
    public function testExample3()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);

        echo "\n\nContact page sent code 200";
    }
    public function testExample4()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);

        echo "\n\nAbout page sent code 200";
    }


}
