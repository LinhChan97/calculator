<?php

namespace Linhchan\Calculator\Test;

use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testApiCalculatorIndexTest()
    {
        $response = $this->get('/calculator');

        $response->assertStatus(200);
    }
    public function testApiAddNumberSuccessTest()
    {
        $a = 222;
        $b = 222;
        $response = $this->get('/add/'.$a.'/'.$b);

        $response->assertStatus(200);
    }
    public function testApiSubtractNumberSuccessTest()
    {
        $a = 222;
        $b = 222;
        $response = $this->get('/subtract/'.$a.'/'.$b);

        $response->assertStatus(200);
    }
}
