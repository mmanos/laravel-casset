Casset Package for Laravel 4
============================

Casset is an asset manager for Laravel 4 applications. Some things it can do:

* Create one or more asset containers.
* Compile less files.
* Combine assets into one file.
* Minify output.
* Accept assets from Laravel package public directories. `"package::/js/file.js"`
* Define dependencies for an asset.
* Define global dependencies for all assets of the same file type.
* Define an optional CDN for asset URLs.
* Optionally defer processing/combining assets to a controller (useful when distributing page requests across multiple servers).

Installation via Composer
-------------------------

Add this to your composer.json file, in the require object:

```javascript
"mmanos/laravel-casset": "dev-master"
```

After that, run composer install to install Casset.

Add the service provider to `app/config/app.php`, within the `providers` array.

```php
'providers' => array(
	// ...
	'Mmanos\Casset\CassetServiceProvider',
)
```

Add a class alias to `app/config/app.php`, within the `aliases` array.

```php
'aliases' => array(
	// ...
	'Casset' => 'Mmanos\Casset\Facades\Casset',
)
```

Finally, ensure the cache directory defined in the config file is created
and writable by the web server (defaults to public/assets/cache).

```console
$ mkdir public/assets/cache
$ chmod -R 777 public/assets/cache
$ touch public/assets/cache/.gitignore
```

Edit public/assets/cache/.gitignore.

```
*
!.gitignore
```

Upgrading to 1.3 from 1.2.x
---------------------------

Simply update the class alias in `app/config/app.php` to point to the new Facade:

```php
'aliases' => array(
	// ...
	'Casset' => 'Mmanos\Casset\Facades\Casset',
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

Add an asset with a dependency on another asset:

```php
Casset::add('less/variables.less');
Casset::add('less/layout.less', array(), array('less/variables.less'));
```

Add a global dependency for all assets (of the same file type):

```php
Casset::dependency('less/variables.less');
Casset::container('layout')->dependency('less/variables.less');
```

Add assets from a composer package (vendorName/packageName):

```php
Casset::add('frameworks/jquery::/jquery.min.js');
```

Render HTML tags to load assets for a container:

```php
{{ Casset::container('default')->styles() }}
{{ Casset::container('layout')->scripts() }}
```

Generate a URL to an asset on the CDN server:

```php
<img src="{{ Casset::cdn('logo.png') }}" />
```
