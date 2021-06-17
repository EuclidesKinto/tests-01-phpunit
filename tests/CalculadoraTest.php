<?php
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    public function testSoma()
    {
        $calc = new Calculadora();
        $this->assertEquals(2, $calc->soma(1, 1));
     }
    public function testSoma2()
    {
        $calc = new Calculadora();
        $this->assertEquals(-5, $calc->soma(-10, 5));
     }
    public function testSoma3()
    {
        $calc = new Calculadora();
        $this->assertEquals(11, $calc->soma(5, 5));
     }

    // public function somaDataProvider()
    // {
    //     return array(
    //         array(1, 2, 3),
    //         array(10, 20, 30),
    //         array(-100, -20, -80),
    //         array(10.5, 0.5, ),
    //     );
    // }
}
