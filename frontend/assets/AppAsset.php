<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        /*'libs/bootstrap/bootstrap.min.css',
        'libs/bootstrap/bootstrap-theme.css',*/
        'libs/font-awesome-4.2.0/css/font-awesome.min.css',
        'libs/owl-carousel/owl.carousel.css',
        'libs/owl-carousel/owl.theme.css',
        'css/fonts.css',
        'css/main.css',
        'css/media.css',
    ];
    public $js = [
        /*'libs/jquery/jquery-1.11.1.min.js',*/
        'libs/jquery-mousewheel/jquery.mousewheel.min.js',
        /*'js/bootstrap.min.js',*/
        'libs/owl-carousel/owl.carousel.min.js',
        'js/common.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset'
    ];
}
