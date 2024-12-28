<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'functions/functions.php';
require 'Database.php';

$config = require('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];

$query = "SELECT * FROM posts WHERE id = :id";

$posts = $db
    ->query($query, [':id' => $id])
    ->fetchAll(PDO::FETCH_ASSOC);

/*
$query = "SELECT * FROM posts WHERE id = ?";
$posts = $db
    ->query($query, [$id])
    ->fetchAll(PDO::FETCH_ASSOC);
*/

/* localhost:9090/?id=2; drop table users; */

dd($posts);

/*
foreach ($posts as $post) {
    echo "<li>{$post['title']}</li>";
}
*/
