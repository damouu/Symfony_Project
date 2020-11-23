<?php

namespace App\Tests;

use App\Entity\People;
use PHPUnit\Framework\TestCase;

class PeopleTest extends TestCase
{
    public function testSomething(): void
    {
        $this->assertTrue(true);
    }

    public function testPeople(): void
    {
        $people = new People();
        $this->assertIsObject($people);
    }

    public function testPeopleAgeIsOver20(): void
    {
        $people = new People();
        $people->setAge(21);
        $this->assertGreaterThan(20, $people->getAge());
    }
}
