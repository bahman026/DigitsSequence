<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use DigitsSequence\DigitsSequence;
use InvalidArgumentException;

class DigitsSequenceTest extends TestCase
{
    public function testDigitsSequenceZero()
    {
        $result = DigitsSequence::digitsSequence(0);
        $this->assertEquals(0, $result);
    }

    public function testDigitsSequenceOne()
    {
        $result = DigitsSequence::digitsSequence(1);
        $this->assertEquals(1, $result);
    }

    public function testDigitsSequenceGreaterThanOne()
    {
        $result = DigitsSequence::digitsSequence(10);
        $this->assertEquals(10, $result);
    }

    public function testNegativeInput()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Input must be a non-negative integer.");
        DigitsSequence::digitsSequence(-1);
    }

    public function testStringInput()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Input must be an integer.");
        DigitsSequence::digitsSequence("invalid");
    }

    public function testNullInput()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Input must be an integer.");
        DigitsSequence::digitsSequence(null);
    }

    public function testNonIntegerInput()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Input must be an integer.");
        DigitsSequence::digitsSequence(3.5);
    }
}
