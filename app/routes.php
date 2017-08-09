<?php

$app->get('/', '\App\Controllers\HomeController:index')->setName('home');

$app->get('/auth/signup', '\App\Controllers\Auth\AuthController:getSignUp')->setName('auth.signup');

$app->post('/auth/signup', '\App\Controllers\Auth\AuthController:postSignUp');
