<?php

$uri = match(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ) {
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    default => null
};

function currentUrlIs($uri){
    return $_SERVER['REQUEST_URI'] === $uri;
}

function routeToController($url){
    if($url)
        require $url;
    else //throw correct errror. I'm gonna go with 404 for now.
        abort(404);
}

function abort($code = 404){
    require "controllers/404.php";
    die();
}

routeToController($uri);