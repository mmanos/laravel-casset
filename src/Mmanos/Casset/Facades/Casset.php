<?php namespace Mmanos\Casset\Facades;

class Casset extends \Illuminate\Support\Facades\Facade
{
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() {
		return 'casset';
	}
}
