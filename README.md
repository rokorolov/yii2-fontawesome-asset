yii2-fontawesome-asset
=====================
Define asset bundle for iconic font and CSS framework - Font Awesome

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist rokorolov/yii2-fontawesome-asset "*"
```

or add

```
"rokorolov/yii2-fontawesome-asset": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
// Register the bundle on a view
rokorolov\fontawesome\FontAwesomeAsset::register($this);
```

or as dependency in your main application asset bundle:

```php
class AppAsset extends AssetBundle
{
    public $depends = [
        ...
        'rokorolov\fontawesome\FontAwesomeAsset'
    ];
}
```