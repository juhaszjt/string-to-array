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

		$explodedEnter = explode("\n", $inputString);

		$returnValue = array();

		foreach($explodedEnter as $oneExplodedEnter)
		{
			$returnValue[] = explode(',', $oneExplodedEnter);
		}
		return $returnValue;
	}
}
