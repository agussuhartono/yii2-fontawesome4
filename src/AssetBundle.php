<?php

namespace agus\fontawesome4;

use yii\web\AssetBundle as BaseAssetBundle;

/**
 * FontAwesome AssetBundle
 */
class AssetBundle extends BaseAssetBundle
{
    public $sourcePath = '@vendor/bower-asset/font-awesome';
    public $css = [
        'css/font-awesome.css',
    ];
}
