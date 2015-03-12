<?php

namespace Tdd;

class StringToArray
{
	/**
	 * @param string $inputString
	 * @return array
	 */
	public function processStringToArray($inputString = '')
	{
		if (!is_string($inputString))
		{
			throw new \InvalidArgumentException('InvalidArgumentException');
		}

		$exploded = explode(',', $inputString);

		return $exploded;
	}
}
