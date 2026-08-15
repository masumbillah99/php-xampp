<?php

$routes = require('routes.php');


// function for handling uri to routes
function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}


// handle the anonymous/wrong url - 404
function abort($code = 404)
{
    http_response_code($code);

    require "views/{$code}.php";

    die();
}


// get the path from server
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToController($uri, $routes);
