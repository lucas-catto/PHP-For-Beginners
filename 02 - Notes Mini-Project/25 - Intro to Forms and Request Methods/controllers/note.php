<?php

$config = require('config.php');
$db = new Database($config['database']);

$id = $_GET['id'];

// SELECT * FROM notes WHERE user_id = :user_id AND id = :id

$note = $db
    ->query('SELECT * FROM notes WHERE id = :id', [':id' => $id])
    ->findOrFail();

if (!$note) {
    abort();
}

$currentUserId = 1;

authorize($note['user_id'] == $currentUserId);

$heading = 'Note';

require 'views/note-view.php';
