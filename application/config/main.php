<?php
$productionHosts = array();

if (isset($_SERVER['HTTP_HOST']) && in_array($_SERVER['HTTP_HOST'], $productionHosts)) {
    defined('YII_DEBUG') or define('YII_DEBUG', false);
    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 1);
} else {
    defined('YII_DEBUG') or define('YII_DEBUG', true);
    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);
}

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
$config = array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'My Web Application',

    // preloading 'log' component
    'preload' => array('log'),

    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),

    'modules' => array(
    ),

    // application components
    'components' => array(
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=testdrive',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            ),
        ),
    ),

    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'params.php'),
);
