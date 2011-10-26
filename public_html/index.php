<?php

$config = include(dirname(__FILE__) . '/../application/config/web.php');
if (YII_DEBUG) {
    require_once(dirname(__FILE__) . '/../yii/framework/YiiBase.php');

    class Yii extends YiiBase
    {
        /**
         * @static
         * @return WebApplication
         */
        public static function app()
        {
            return parent::app();
        }
    }
} else {
    require_once(dirname(__FILE__) . '/../yii/framework/yiilite.php');
}

Yii::createWebApplication($config)->run();

class WebApplication extends CWebApplication
{}

