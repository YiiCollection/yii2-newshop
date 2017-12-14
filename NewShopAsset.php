<?php
namespace hoaaah\Newshop;

use yii\web\AssetBundle;

/**
 * Universal Business AssetBundle
 */
class NewShopAsset extends AssetBundle
{
    public $sourcePath='@vendor/hoaaah/yii2-newshop/assets';
    public $baseUrl = '@web';

    public $css=[
        'css/style.css',
        'css/font-awesome.css',
        '//fonts.googleapis.com/css?family=Cagliostro',
        '//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300'
    ];

    public $js=[
        'js/main.js',
        'js/simpleCart.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'yii\jui\JuiAsset'
    ];

    public function init() {
        parent::init();
    }
}
