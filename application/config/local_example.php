<?php

// example local override configs
$config['modules']['gii'] = array(
    'class' => 'system.gii.GiiModule',
    'password' => 'Enter Your Password Here',
    // If removed, Gii defaults to localhost only. Edit carefully to taste.
    'ipFilters' => array('127.0.0.1', '::1'),
);

$config['components']['log']['routes'][] = array(
    'class'=>'CWebLogRoute',
);

$config['components']['db']['username'] = 'root';
$config['components']['db']['password'] = '';
