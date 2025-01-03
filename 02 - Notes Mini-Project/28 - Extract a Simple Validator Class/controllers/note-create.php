<?php

require 'Validator.php';

$heading = 'Create a Note';

// dd(Validator::email('sdfdfs@email.com'));

$config = require('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];

    $body = $_POST['body'];

    if (!Validator::string($body, 1, 100)) {
        
        $errors['body'][] = 'A body of no more than 100 characters is required.';
    }

    if (empty($errors)) {

        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            ':body' => $body,
            ':user_id' => 1
        ]);
    }
    
}

require 'views/note-create-view.php';
