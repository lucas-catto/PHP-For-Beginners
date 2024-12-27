<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'functions/functions.php';
require 'Database.php';

$db = new Database();

$posts = $db
    ->query('SELECT * FROM posts')
    ->fetchAll(PDO::FETCH_ASSOC);

dd($posts);

/*
foreach ($posts as $post) {
    echo "<li>{$post['title']}</li>";
}
*/
