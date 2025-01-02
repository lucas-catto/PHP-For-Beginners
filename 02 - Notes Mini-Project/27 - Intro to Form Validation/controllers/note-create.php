<?php

$heading = 'Create a Note';

$config = require('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];

    $body = $_POST['body'];

    if (strlen($body) == 0) {
        /*
         * body can have more than one error (body is the key to errors from body)
         * $errors['body'][] = 'A body is required.';
        */
        $errors['body'][] = 'A body is required.';
    }

    if (strlen($body) > 100) {
        $errors['body'][] = 'The body can not be more than 100 characters.';
    }

    if (empty($errors)) {

        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            ':body' => $body,
            ':user_id' => 1
        ]);
    }
    
}

require 'views/note-create-view.php';
