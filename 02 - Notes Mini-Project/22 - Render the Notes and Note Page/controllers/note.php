<?php

$config = require('config.php');
$db = new Database($config['database']);

$id = $_GET['id'];

$note = $db
    ->query('SELECT * FROM notes WHERE id = ?', [$id])
    ->fetch(PDO::FETCH_ASSOC);

$heading = 'Note';

require 'views/note-view.php';
