<?php namespace Kathi;

use InvalidArgumentException;

class Rechner {

	public function addieren($a, $b)
	{
		if ( ! is_int($a) or ! is_int($b))
		{
			throw new InvalidArgumentException("Es muss ein Integer uebergeben werden");
		}
		return $a + $b;
	}
}
