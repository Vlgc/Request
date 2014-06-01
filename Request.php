<?php
/**
 * Copyright (c) 2014 Vlgc <vlgc@system-lords.de>
 * All rights reserved.
 *
 * @package   Request
 * @author    Vlgc <vlgc@system-lords.de>
 * @copyright Vlgc <vlgc@system-lords.de>, All rights reserved
 * @license   BSD License
 */
namespace Vlgc;

class Request
{
	/**
	 * Get $value for $key 
	 * 
	 * @param mixed $key
	 * @param mixed $defaultReturn [default: null]
	 * @return mixed $value
	 */
	public function get($key, $defaultReturn = null)
	{
		if (array_key_exists($key, $_REQUEST)) {
			return $_REQUEST[$key];
		}
		
		return $defaultReturn;
	}
	
	/**
	 * Get $params 
	 * 
	 * @return array $params
	 */
	public function getParams()
	{
		if (is_array($_REQUEST)) {
			return $_REQUEST;
		}
		
		return array();
	}
	
	/**
	 * Get $value for $key 
	 * 
	 * @param mixed $key
	 * @param mixed $defaultReturn [default: null] 
	 * @return mixed $value
	 */
	public function getServer($key, $defaultReturn = null)
	{
		if (array_key_exists($key, $_SERVER)) {
			return $_SERVER[$key];
		}
		
		return $defaultReturn;
	}
}
