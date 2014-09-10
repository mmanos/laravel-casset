<?php namespace Mmanos\Casset;

class Casset
{
	/**
	 * Array of container instances used by this class.
	 *
	 * @var array
	 */
	protected $containers = array();
	
	/**
	 * Retrieve the requested asset container object.
	 *
	 * @param string $container Name of container.
	 * 
	 * @return Container
	 */
	public function container($container = 'default')
	{
		if (!isset($this->containers[$container])) {
			$this->containers[$container] = new Container($container);
		}
		
		return $this->containers[$container];
	}
	
	/**
	 * Provide convenient access to methods on the default container.
	 *
	 * @param string $method
	 * @param array  $parameters
	 * 
	 * @return mixed
	 */
	public function __call($method, array $parameters)
	{
		return call_user_func_array(array($this->container(), $method), $parameters);
	}
}
