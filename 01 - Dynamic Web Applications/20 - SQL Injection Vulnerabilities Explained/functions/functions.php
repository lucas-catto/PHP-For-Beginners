<?php

function dd($value) {

    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    
    die();
}

function red($page) {
            
    $uri = $_SERVER['REQUEST_URI'];

    $color = ($page == $uri) ? 'red' : 'black';

    return "style='color:$color;'";
}
