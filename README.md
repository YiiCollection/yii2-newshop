New Shop e-Commerce Template
============================
New Shop e-Commerce Template

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer require hoaaah/yii2-newshop "dev-master"
```

or add

```
"hoaaah/yii2-newshop": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php
use hoaaah\Newshop\NewShopAsset;

NewShopAsset::register($this);
$directoryAsset = \hoaaah\Newshop\NewShopAsset::register($this);
?>
<img src="<?= $directoryAsset->baseUrl ?>/images/bag.png" alt="" />
```

About Template
-----
New Shop Template are e-commerce template designed by [W3Layouts](http://w3layouts.com) licensed under [Creative Commons Attribution 3.0 Unported](http://creativecommons.org/licenses/by/3.0/)

For more information about New Shop Template License [read here](https://github.com/hoaaah/yii2-newshop/blob/master/assets/w3layouts-License.txt)