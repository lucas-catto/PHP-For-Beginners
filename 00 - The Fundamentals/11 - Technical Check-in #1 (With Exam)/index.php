<?php

$name = 'laracasts';
$cost = 15;

$business = [
    'name' => 'Laracasts',
    'cost' => 15,
    'categories' => [
        'Testing',
        'PHP',
        'Javascript'
    ]
];

if ($business['cost'] > 99) {
    echo "Not interested.";
}

foreach ($business['categories'] as $category) {
    echo "<p>$category</p>";
}

function register($user) {
    // Create the user record in database
}

require 'index-view.php';
