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
        //User::truncate(); dd();

        $user = new User();

        $user->name = "Testname";
        $user->email = "testt@gmail.com";
        $user->password = "tetst";



        $this->assertTrue($user->save());
        echo "User created!";
    }

    public function testNameChange(){

        $user = User::inRandomOrder()->first();;
        $this->assertTrue($user->update(['name'=>'Steve Smith']));

        echo "\n\nName updated to Steve Smith";
    }

      public function testUserDelition(){

          $user = User::inRandomOrder()->first();;
          $this->assertTrue($user->delete());
          echo "\n\nRandom user deleted";

      }
//    public function testUserSeed(){
//        $count  = User::count();
//        $this->seed('UserTableSeeder');
//
//        $new_count = User::count();
//
//        $actual = $new_count - $count;
//
//        $this->assertEquals(50, $actual);
//    }



}
