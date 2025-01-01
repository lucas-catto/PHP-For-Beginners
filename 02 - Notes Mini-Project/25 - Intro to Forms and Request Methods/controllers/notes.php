<?php

$config = require('config.php');
$db = new Database($config['database']);

$notes = $db
    ->query('SELECT * FROM notes WHERE user_id = 1')
    ->get();

$heading = 'My Notes';

require 'views/notes-view.php';
