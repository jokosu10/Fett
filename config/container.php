<?php

namespace Config\Container;

use Dopesong\Slim\Error\Whoops as WhoopsError;

$container = $app->getContainer();

$capsule = new \Illuminate\Database\Capsule\Manager();
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function ($container) use ($capsule) {
    return $capsule;
};

// Error Handling
$container['phpErrorHandler'] = $container['errorHandler'] = function($c) {
    return new WhoopsError($c->get('settings')['displayErrorDetails']);
};
