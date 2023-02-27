<?php

namespace Tests\Feature;

use App\Data\Bar;
use App\Data\Foo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class DependencyInjectTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function TestDependencyInject(){
        $foo = new foo();
        $bar = new bar($foo);

        assertEquals('foo and bar', $bar -> bar());
    }
}
