<?php
/**
 * Clase calculadora que permite realizar varias operaciones
 * matemáticas simples
 * @author Miguel Ángel
 *
 */
class Calculadora {

	/**
	 * Realiza la suma de dos números
	 * @param number $a
	 * @param number $b
	 * @return number
	 */
	public function sumar($a, $b) {
		return $a + $b;
	}


	/**
	 * Realiza la resta de dos números
	 * @param number $a
	 * @param number $b
	 * @return number
	 */
	public function restar($a, $b) {
		return $a - $b;
	}


	/**
	 * Realiza la multiplicación de dos números
	 * @param number $a
	 * @param number $b
	 * @return number
	 */
	public function multiplicar($a, $b) {
		return $a * $b;
	}


	/**
	 * Realiza la división de dos números
	 * @param number $a
	 * @param number $b
	 * @return number
	 */
	public function dividir($a, $b) {
		return $a / $b;
	}

	/**
	 * Calcula el factorial de un número
	 * @param number $a
	 * @return number
	 */
	public function factorial($a) {
		if ($a < 2)
			return 1;

		return $a * $this->factorial($a - 1);
	}

}