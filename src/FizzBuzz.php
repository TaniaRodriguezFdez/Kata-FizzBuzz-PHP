<?php

namespace App;

class FizzBuzz {
    public function isDivisible(int $numb):string
    {
        if($numb % 3 === 0 && $numb % 5 === 0){
            return "FizzBuzz";
        }
        if($numb % 3 === 0){
            return "Fizz";
        }
        
        if($numb % 5 === 0){
            return "Buzz";
        }

        else{
            return $numb;
        }
    }

    public function isDivisibleOrContains(int $numb):string

    {
        if($numb === 3 || $numb % 3 === 0){
            return "Fizz";
        }
        if($numb === 5 || $numb % 5 === 0){
            return "Buzz";
        }
    }
}