<?php

namespace Bootstrap\App;

session_start();

require __DIR__.'/../vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => getenv('DEBUG'),
        'db'                  => [
            'driver'    => getenv('DB_DRIVER'),
            'host'      => getenv('DB_HOST', '127.0.0.1'),
            'database'  => getenv('DB_NAME'),
            'username'  => getenv('DB_USER'),
            'password'  => getenv('DB_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],
    ],

]);

// Container
require __DIR__.'/../config/container.php';

// Load Environment file
$dotenv = new Dotenv\Dotenv('../');
$dotenv->load();


require __DIR__.'/../app/routes.php';
