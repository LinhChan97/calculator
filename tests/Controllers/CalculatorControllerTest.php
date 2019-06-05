<?php
namespace Linhchan\Calculator\Test;

use Tests\TestCase;
use Linhchan\Calculator\CalculatorController;

class CalculatorControllerTest extends TestCase
{
    protected $calculatorController;

    public function setUp() :void
    {
        parent::setUp();
        $this->calculatorController = new CalculatorController;
    }
    /**
     * @test
     * @add function
     */
    public function add_two_number_success()
    {
        $a = 223;
        $b = 223;
        $expected = $this->calculatorController->add($a, $b);
        $this->assertEquals($expected, $a + $b);
    }
       /**
     * @test
     * @sub function
     */
    public function sub_two_number_success()
    {
        $a = 223;
        $b = 223;
        $expected = $this->calculatorController->subtract($a, $b);
        $this->assertEquals($expected, $a - $b);
    }
}