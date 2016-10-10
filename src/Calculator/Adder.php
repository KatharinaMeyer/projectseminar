<?php namespace Calculator;

use InvalidArgumentException;

class Adder {

	public function add($a, $b)
	{
		if ( ! is_int($a) or ! is_int($b))
		{
			throw new InvalidArgumentException("the argument has to be an integer");
		}
		return $a + $b;
	}
}
