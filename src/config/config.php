<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Combining Assets
	|--------------------------------------------------------------------------
	|
	| Whether or not to combine the assets assigned to a container into a
	| single asset.
	|
	*/

	'combine' => false,

	/*
	|--------------------------------------------------------------------------
	| Minify Combined Assets
	|--------------------------------------------------------------------------
	|
	| Whether or not to minify combined asset files.
	|
	*/

	'minify' => false,

	/*
	|--------------------------------------------------------------------------
	| Casset Controller Route
	|--------------------------------------------------------------------------
	|
	| To enable the Casset controller and offload processing and combining asset
	| files, set this route. Otherwise, leave empty to skip the controller and
	| process files during page load.
	| 
	| This can be useful if you use a load balancer to distribute page requests
	| to more than one server, which may or may not have the compiled assets.
	|
	| Example value: assets/casset
	*/

	'route' => '',

	/*
	|--------------------------------------------------------------------------
	| Version Number For Controller URLs
	|--------------------------------------------------------------------------
	|
	| Specify an optional version number to append to each controller URL to
	| help with cache busting.
	| 
	| This only applies if the Casset Controller Route is enabled, otherwise
	| Casset auto-detects changes in files before generating their URLs.
	| 
	| Possible values:
	| - {string}  : will append whatever value is in this string
	| - {Closure} : will append whatever string is returned from this Closure
	|
	*/

	'controller_version' => '',

	/*
	|--------------------------------------------------------------------------
	| Assets Directory
	|--------------------------------------------------------------------------
	|
	| Directory, relative to the public path, that serves as the base
	| assets directory. All added assets should have a source relative to
	| this path.
	|
	*/

	'assets_dir' => 'assets',

	/*
	|--------------------------------------------------------------------------
	| Cache Directory
	|--------------------------------------------------------------------------
	|
	| Directory, relative to the public path, where cached files should
	| be stored. This path must be writable by the web server.
	|
	*/

	'cache_dir' => 'assets/cache',

	/*
	|--------------------------------------------------------------------------
	| CDN
	|--------------------------------------------------------------------------
	|
	| URL of CDN to use for assets.
	|
	*/

	'cdn' => '',

);
