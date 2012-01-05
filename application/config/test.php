<?php

include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'main.php');

$config['components']['fixture']['class'] = 'system.test.CDbFixtureManager';
// uncomment the following to provide test database connection
// $config['components']['db']['connectionString'] = 'DSN for test database';

loadLocalConfig(__FILE__);

return $config;