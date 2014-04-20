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

	'cdn' => null,

);
