<?php

include(__DIR__ . '/main.php');

$config['components']['user']['allowAutoLogin'] = true;

$config['components']['errorHandler']['errorAction'] = 'site/error';

// uncomment the following to enable URLs in path-format
/*
$config['components']['urlManager'] = array(
    'urlFormat' => 'path',
    'rules' => array(
        '<controller:\w+>/<id:\d+>' => '<controller>/view',
        '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
        '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
    ),
);
*/

if (is_file(__DIR__ . '/local.php')) {
    include(__DIR__ . '/local.php');
}

return $config;