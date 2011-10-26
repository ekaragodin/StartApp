<?php

include(__DIR__ . '/main.php');

$config['name'] = 'My Console Application';
$config['components']['db']['connectionString'] = 'mysql:host=localhost;dbname=testdrive';
$config['components']['db']['user'] = 'root';
$config['components']['db']['password'] = '';

if (is_file(__DIR__ . '/local.php')) {
    include(__DIR__ . '/local.php');
}

return $config;