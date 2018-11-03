<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;


class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = new User();

        $user->name = "Testname";
        $user->email = "testt@gmail.com";
        $user->password = "tetst";



        $this->assertTrue($user->save());
        echo "User created!";
    }
}
