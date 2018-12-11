<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        '/css/bootstrap.min.css',
        '/css/veneto-admin.min.css',
        '/css/demo.css',
        '/css/font-awesome/css/font-awesome.css',
        '/css/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css',
        '/css/plugins/rickshaw.min.css',
        '/css/plugins/morris.min.css',
    ];
    public $js = [
        '/css/libs/jquery/jquery.min.js',
        '/css/bs3/js/bootstrap.min.js',
        '/css/plugins/jquery-navgoco/jquery.navgoco.js',
        '/js/main.js',
        '/css/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js',
        '/css/plugins/jquery-jvectormap/maps/world_mill_en.js',
        '/css/plugins/flot/jquery.flot.js',
        '/css/plugins/flot/jquery.flot.resize.js',
        '/css/plugins/raphael/raphael-min.js',
        '/css/plugins/morris/morris.min.js',
        '/js/dashboard.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
