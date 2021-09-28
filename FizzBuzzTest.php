<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testFizz(): void
    {
        $value = 3;
        $this->assertSame("Fizz", FizzBuzz::convert($value));
    }

    public function testBuzz(): void
    {
        $value = 5;
        $this->assertSame("Buzz", FizzBuzz::convert($value));
    }

    public function testFizzBuzz(): void
    {
        $value = 15;
        $this->assertSame("FizzBuzz", FizzBuzz::convert($value));
    }    
}

?>