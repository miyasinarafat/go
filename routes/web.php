<?php

$router->get('/', function () use ($router) {
    return 'florianwartner.me Link-Shortener based on ' . $router->app->version();
});

$router->get('/r/{link}', 'RedirectController@getRedirect');
$router->get('/links', 'LinkController@getLinks');
$router->post('/links', 'LinkController@createNewLink');
