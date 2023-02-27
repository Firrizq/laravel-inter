<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Data\Bar;
use App\Data\Foo;

use function PHPUnit\Framework\assertEquals;

class DependencyInjectTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function TestDependencyInjection(){
        $foo = new foo();
        $bar = new bar($foo);

        assertEquals('fooand bar', $bar -> bar());
    }
}
