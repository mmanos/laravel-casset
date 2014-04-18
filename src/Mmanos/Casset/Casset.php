<?php namespace Mmanos\Casset;

class Casset
{
	/**
	 * Array of container instances used by this class.
	 *
	 * @var array
	 */
	public static $containers = array();
	
	/**
	 * Retrieve the requested asset container object.
	 *
	 * @param string $container Name of container.
	 * 
	 * @return Container
	 */
	public static function container($container = 'default')
	{
		if (!isset(static::$containers[$container])) {
			static::$containers[$container] = new Container($container);
		}
		
		return static::$containers[$container];
	}
	
	/**
	 * Magic Method for calling methods on the default container.
	 *
	 * <code>
	 *		// Call the "add" method on the default container
	 *		Casset::add('js/jquery.js');
	 *		
	 *		// Or load an asset from a package
	 *		Casset::add('package::js/file.js')
	 * </code>
	 */
	public static function __callStatic($method, $parameters)
	{
		return call_user_func_array(array(static::container(), $method), $parameters);
	}
}
