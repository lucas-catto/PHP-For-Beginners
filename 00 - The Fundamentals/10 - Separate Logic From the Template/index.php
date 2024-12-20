<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$books = [
    [
        'title'  => 'First Book',
        'author' => 'First Author',
        'buyUrl' => 'https://firstbook.com',
        'year'   => 1968
    ], [
        'title'  => 'Second Book',
        'author' => 'Second Author',
        'buyUrl' => 'https://secondbook.com',
        'year'   => 1968
    ], [
        'title'  => 'Third Book',
        'author' => 'Third Author',
        'buyUrl' => 'https://thirdbook.com',
        'year'   => 2001
    ], [
        'title'  => 'Fourth Book',
        'author' => 'Fourth Author',
        'buyUrl' => 'https://forthbook.com',
        'year'   => 1997
    ]
];

$filteredBooks = array_filter($books, function($book) {
    return $book['year'] == 1968;
});

require 'index-view.php';
