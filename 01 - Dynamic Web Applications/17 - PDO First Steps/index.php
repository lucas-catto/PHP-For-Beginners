<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'functions/functions.php';
// require 'router.php';

/*
class Person
{
    public $name;
    public $age;

    public function breathe()
    {
        echo $this->name . " is breathing";
    }
}

$person = new Person();

$person->name = 'John Doe';
$person->age = 25;

$person->breathe();
*/

// Connect to MySQL database

$dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";

$pdo = new PDO($dsn, "root", "");

$statement = $pdo->prepare('SELECT * FROM posts');
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>{$post['title']}</li>";
}
