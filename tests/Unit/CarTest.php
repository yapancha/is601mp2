<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;


class CarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = new Car();

        $car->make = "Toyota";
        $car->model = "Camry";
        $car->year = 2012;



        $this->assertTrue($car->save());
        echo "Car created!";
    }

    public function testNameChange(){

        $car = Car::inRandomOrder()->first();;
        $this->assertTrue($car->update(['year'=>'2000']));

        echo "\n\nCar Year updated to 2000";
    }

      public function testCarDelition(){

          $car = Car::inRandomOrder()->first();;
          $this->assertTrue($car->delete());
          echo "\n\n{$car} deleted";

      }


}
