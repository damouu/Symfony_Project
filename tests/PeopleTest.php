<?php

namespace App\Tests;

use App\Entity\People;
use PHPUnit\Framework\TestCase;

class PeopleTest extends TestCase
{
    public function testSomething()
    {
        $this->assertTrue(true);
    }

    public function testPeople()
    {
        $people = new People();
        $this->assertIsObject($people);
    }
}
