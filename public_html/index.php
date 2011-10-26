<?php

// todo: определение продакшен и девелопмент хостов
// todo: слияние локального конфига
// todo: научить миграцию вносить изменения в тестовую бд
// todo: добавить экстеншен MaintenanceMode
// todo: добавить дебаг тулбар

// change the following paths if necessary
$config = include(dirname(__FILE__) . '/../application/config/main.php');
if (YII_DEBUG) {
    require_once(dirname(__FILE__) . '/../yii/framework/YiiBase.php');

    class Yii extends YiiBase
    {
        /**
         * @static
         * @return MyWebApplication
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

class MyWebApplication extends CWebApplication
{}

