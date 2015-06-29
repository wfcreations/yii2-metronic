<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class AdminTheme4Asset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/admin/layout4/';
    public $css = [
        'css/themes/default.css',
        'css/custom.css',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\CoreAsset',
        'wfcreations\metronic\bundles\globalassets\MetronicAsset',
        'wfcreations\metronic\bundles\globalassets\ComponentsRoundedAsset',
        'wfcreations\metronic\bundles\globalassets\PluginsAsset',
        'wfcreations\metronic\bundles\admin\AdminLayout4Asset',
        'wfcreations\metronic\bundles\admin\QuickSidebarAsset',
    ];

}
