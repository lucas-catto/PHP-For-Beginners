<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/'        => 'controllers/index.php',
    '/about'   => 'controllers/about.php',
    '/notes'   => 'controllers/notes.php',
    '/note'    => 'controllers/note.php',
    '/contact' => 'controllers/contact.php'
];

function abort($statuscode = 404) {

    http_response_code($statuscode);

    $message = '';
    $path = "views/errors/{$statuscode}.php";

    if (file_exists($path)) {
        require $path;
    } else {
        $message = 'File not found according to status code.';
    }

    die($message);
}

function routeToController($uri, $routes) {

    if (array_key_exists($uri, $routes)) {
        require_once $routes[$uri];
    } else {
        abort();
    }
}

routeToController($uri, $routes);
