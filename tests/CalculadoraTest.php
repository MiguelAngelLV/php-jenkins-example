<?php

class CalculadoraTest extends PHPUnit_Framework_TestCase {
	

	 public function testCalculadora() {

	 	$calculadora = new Calculadora();

        $this->assertEquals(10, $calculadora->sumar(4, 6));

        $this->assertEquals(10, $calculadora->multiplicar(2, 5));

        $this->assertEquals(24, $calculadora->factorial(4));

    }
}