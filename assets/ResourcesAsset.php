<?php

namespace app\assets;

class ResourcesAsset extends \luya\web\Asset
{
    public $sourcePath = '@app/resources';
    
    public $css = [
        '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css',
        '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css',
        'scss/main.css'
    ];

    public $js = [
        '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js',
        '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
        'js/main.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
