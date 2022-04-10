<?php

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{
    private RomanNumerals $romanNumerals;

    protected function setUp(): void
    {
        parent::setUp();

        $this->romanNumerals = new RomanNumerals();
    }

    /**
     * @test
     **/
    public function converts_numbers()
    {
        $this->assertEquals("I", $this->romanNumerals->convert(1));
        $this->assertEquals("II", $this->romanNumerals->convert(2));
        $this->assertEquals("III", $this->romanNumerals->convert(3));
        $this->assertEquals("V", $this->romanNumerals->convert(5));
        $this->assertEquals("VI", $this->romanNumerals->convert(6));
//        $this->assertEquals("IV", $this->romanNumerals->convert(3));
//        $this->assertEquals("VII", $this->romanNumerals->convert(8));
//        $this->assertEquals("X", $this->romanNumerals->convert(10));
    }

}