<?php

namespace Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase {
    public function testIsdivisibleBy3_returnFizz()
        {
            $fizzBuzz = new FizzBuzz;
           
            $result = $fizzBuzz->isDivisible(3);
           
            $this->assertEquals("Fizz",$result);
        }
    public function testIsdivisibleBy5_returnBuzz(){
           $fizzBuzz = new FizzBuzz;

           $result = $fizzBuzz->isDivisible(5);

           $this->assertEquals("Buzz",$result);
        }
    public function testIsdivisibleBy3and5_returnFizzBuzz(){
            $fizzBuzz = new FizzBuzz;

            $result = $fizzBuzz->isDivisible(15);

            $this->assertEquals("FizzBuzz",$result);
        }
    public function testIsDivisibleOrContains3returnFizz(){

          $fizzBuzz = new FizzBuzz;

          $result = $fizzBuzz->isDivisibleOrContains(5);

          $this->assertEquals("Fizz",$result);
    }
    public function testIsDivisibleOrContains5returnBuzz(){

        $fizzBuzz = new FizzBuzz;

        $result = $fizzBuzz->isDivisibleOrContains(25);

        $this->assertEquals("Buzz",$result);
  }
}
