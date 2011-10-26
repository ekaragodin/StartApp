<?php

include(__DIR__ . '/main.php');

$config['components']['fixture']['class'] = 'system.test.CDbFixtureManager';
// uncomment the following to provide test database connection
// $config['components']['db']['connectionString'] = 'DSN for test database';


if (is_file(__DIR__ . '/local.php')) {
    include(__DIR__ . '/local.php');
}

return $config;