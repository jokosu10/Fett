<?php

/**
 * Register the autoloader
 */

require __DIR__.'/../vendor/autoload.php';

/**
 * Fett - A PHP API Framework based on Slim
 *
 * @package  Fett
 * @author  Dan Rovito <dan@danrovito.com>
 */

require __DIR__.'/../bootstrap/app.php';

/**
 * Start the application
 */

$app->run();
