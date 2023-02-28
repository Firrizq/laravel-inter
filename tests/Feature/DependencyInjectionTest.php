<?php

namespace Tests\Feature;

use App\Data\Foo;
use App\Data\Bar;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class DependencyInjectionTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function TestDependencyInjection(){
        $foo = new foo();
        $bar = new Bar($foo);

        assertEquals('fooand bar', $bar -> bar());
    }
}
