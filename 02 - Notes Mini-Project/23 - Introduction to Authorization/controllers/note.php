<?php

$config = require('config.php');
$db = new Database($config['database']);

$id = $_GET['id'];

// SELECT * FROM notes WHERE user_id = :user_id AND id = :id

$note = $db
    ->query('SELECT * FROM notes WHERE id = :id', [':id' => $id])
    ->fetch();

if (!$note) {
    abort();
}

$currentUserId = 1;

if ($note['user_id'] != $currentUserId) {
    abort(Response::FORBIDDEN);
}

$heading = 'Note';

require 'views/note-view.php';
