<?php

include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'main.php');

$config['name'] = 'My Console Application';
$config['components']['db']['connectionString'] = 'mysql:host=localhost;dbname=testdrive';
$config['components']['db']['username'] = 'root';
$config['components']['db']['password'] = '';

loadLocalConfig(__FILE__);

return $config;