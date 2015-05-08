<?php

namespace xj\js\easing;

use yii\web\AssetBundle;

class EasingAsset extends AssetBundle {

    public $sourcePath = '@bower/jquery.easing';
    public $basePath = '@webroot/assets';
    public $js = ['jquery.easing.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
