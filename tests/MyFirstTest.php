<?php

use PHPUnit\Framework\TestCase;

class MyFirstTest extends TestCase
{
    /**
     * @test
     */
    function shouldWorkIfTrueIsTrue(){
        $this->assertTrue(true);
    }
}