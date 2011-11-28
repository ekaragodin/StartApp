<?php

include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'main.php');

$config['name'] = 'My Console Application';
$config['components']['db']['connectionString'] = 'mysql:host=localhost;dbname=testdrive';
$config['components']['db']['username'] = 'root';
$config['components']['db']['password'] = '';

if (is_file(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'local.php')) {
    include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'local.php');
}

return $config;