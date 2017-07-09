<?php

// Create a connection, once only.
$config = array(
            'driver'    => getenv('APP_DRIVER'),    // Db driver
            'host'      => getenv('APP_HOST'),
            'database'  => getenv('APP_DATABASE'),
            'username'  => getenv('APP_USERNAME'),
            'password'  => getenv('APP_PASSWORD'),
            'charset'   => getenv('APP_CHARSET'),   // Optional
            'collation' => getenv('APP_COLLATION'), // Optional
            'prefix'    => getenv('APP_PREFIX'),    // Table prefix, optional
            'options'   => array( // PDO constructor options, optional
                    PDO::ATTR_TIMEOUT => 5,
                    PDO::ATTR_EMULATE_PREPARES => false
                ),
        );

$GLOBALS['config'] = $config;

new \Pixie\Connection('mysql', $config, 'QB');
