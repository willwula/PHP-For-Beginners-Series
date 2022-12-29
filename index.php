<?php
require 'function.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


//if ($uri === '/'){
//    require 'controllers/index.php';
//}elseif ($uri === '/about'){
//    require 'controllers/about.php';
//}elseif ($uri ==='/contact'){
//    require 'controllers/contact.php';
//}

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
];

if (array_key_exists($uri,$routes)) {
    require $routes[$uri];
}else{
    http_response_code(404);
    require 'views/404.php';
    die();
}
