<?php

namespace Bootstrap\App;

use Dotenv\Dotenv;
use Slim\App;

session_start();

$settingsConfig = [
    'settings' => [
        'displayErrorDetails' => getenv('DEBUG'),
        'db'                  => require __DIR__.'/../config/database.php',

    ],

];

$app = new App($settingsConfig);

// Container
require __DIR__.'/../config/container.php';

// Load Environment file
$dotenv = new Dotenv('../');
$dotenv->load();

require __DIR__.'/../app/routes.php';
