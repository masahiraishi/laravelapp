<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\withoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HelloTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);

        $arr = [];
        $this->assertEmpty($arr);

        $msg = "Hello";
        $this->assertEquals('Hello',$msg);

        $n = random_int(0,100);
        $this->assertLessThan(100,$n);
    }
}
