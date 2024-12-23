<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Demo</title>
        <style>
            body {
                display: grid;
                place-items: center;
                height: 100vh;
                margin: 0;
                font-family: sans-serif;
                background-color: gray;
            }
        </style>
    </head>
    <body>
        <h1>Recommended Books</h1>

        <?php
            $books = [
                [
                    'title'  => 'First Book',
                    'author' => 'First Author',
                    'buyUrl' => 'https://firstbook.com'
                ], [
                    'title'  => 'Second Book',
                    'author' => 'Second Author',
                    'buyUrl' => 'https://secondbook.com'
                ], [
                    'title'  => 'Third Book',
                    'author' => 'Third Author',
                    'buyUrl' => 'https://thirdbook.com'
                ], [
                    'title'  => 'Forth Book',
                    'author' => 'Forth Author',
                    'buyUrl' => 'https://forthbook.com'
                ]
            ];
        ?>

        <ul>
            <?php foreach ($books as $book): ?>
                <li>
                    <p>
                        <?= $book['title'] ?>
                    </p>
                    <p>
                        <?= $book['author'] ?>
                    </p>
                    <a href="#<?= $book['buyUrl'] ?>"><?= $book['title'] ?></a>
                </li>
            <?php endforeach ?>
        </ul>
    </body>
</html>
