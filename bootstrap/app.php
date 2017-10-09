<?php

namespace Bootstrap\App;

session_start();

require __DIR__.'/../vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => getenv('DEBUG'),
        'db'                  => require __DIR__.'/../config/database.php',
    ],

]);

// Container
require __DIR__.'/../config/container.php';

// Load Environment file
$dotenv = new Dotenv\Dotenv('../');
$dotenv->load();

require __DIR__.'/../app/routes.php';
