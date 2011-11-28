<?php

include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'main.php');

$config['components']['fixture']['class'] = 'system.test.CDbFixtureManager';
// uncomment the following to provide test database connection
// $config['components']['db']['connectionString'] = 'DSN for test database';


if (is_file(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'local.php')) {
    include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'local.php');
}

return $config;