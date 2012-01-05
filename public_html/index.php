<?php

$config = include(dirname(__FILE__) . '/../application/config/web.php');
if (YII_DEBUG) {
    require_once(dirname(__FILE__) . '/../yii/framework/yii.php');
} else {
    require_once(dirname(__FILE__) . '/../yii/framework/yiilite.php');
}

Yii::createWebApplication($config)->run();

