<?php
namespace Api\Entity;

abstract class BaseEntity
{
	/**
	 * @return array
	 */
	public function toArray()
	{
		$arr = [];
		foreach ($this as $key => $val) {
			$arr[$key] = $val;
		}

		return $arr;
	}
}