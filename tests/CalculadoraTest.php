<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculadoraTest extends TestCase
{
    function testCalculatorAttributes(){
        $this->assertClassHasAttribute('firstValue', Calculator::class);
        $this->assertClassHasAttribute('secondValue', Calculator::class);
        $this->assertClassHasAttribute('operator', Calculator::class);
        $this->assertClassHasAttribute('result', Calculator::class);
    }
}