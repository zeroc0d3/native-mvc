<?php

define('PATH_CONFIG', 'config/');
define('PATH_CONTROLLER', 'app/controller/');
define('PATH_MODEL', 'app/model/');
define('PATH_VENDOR', 'vendor/');

// Make sure you have Composer's autoload file included
require(PATH_VENDOR . 'autoload.php');

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

/** Start Your Controller **/
require('app/routes.php');
