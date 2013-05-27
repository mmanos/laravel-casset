Casset Package for Laravel 4
============================

Casset is an asset manager for Laravel 4 applications. Some of the main features include:

* Create one or more containers of assets.
* Compiles less files.
* Combines assets into one file.
* Minifies asset content.
* Accepts assets from Laravel package public directories. <code>"package::js/file.js"</code>

Installation via Composer
-------------------------

Add this to you composer.json file, in the require object;

    "mmanos/casset": "*"

After that, run composer install to install Casset.

Finally, add the service provider to `app/config/app.php`, within the `providers` array.

```php
'providers' => array(
	// ...
	'Mmanos\Casset\CassetServiceProvider',
)
```

Usage
-----

Add assets to the "default" container:

```php
Casset::add('js/jquery.js');
Casset::add('less/layout.less');
```

Add assets to a custom container:

```php
Casset::container('layout')->add('js/jquery.js');
Casset::container('layout')->add('less/layout.less');
```

Render HTML tags to load assets for a container:

```php
echo Casset::container('default')->styles();
echo Casset::container('layout')->scripts();
```
