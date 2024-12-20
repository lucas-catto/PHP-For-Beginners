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
                    'buyUrl' => 'https://firstbook.com',
                    'year'   => 1968
                ], [
                    'title'  => 'Second Book',
                    'author' => 'Second Author',
                    'buyUrl' => 'https://secondbook.com',
                    'year'   => 1968
                ], [
                    'title'  => 'Third Book',
                    'author' => 'Third Author',
                    'buyUrl' => 'https://thirdbook.com',
                    'year'   => 2001
                ], [
                    'title'  => 'Fourth Book',
                    'author' => 'Fourth Author',
                    'buyUrl' => 'https://forthbook.com',
                    'year'   => 1997
                ]
            ];

            /*
            $filterByAuthor = function($books, $author) {

                $filteredBooks = [];

                foreach ($books as $book) {
                    if ($book['author'] === $author) {
                        $filteredBooks[] = $book;
                    }
                }

                return $filteredBooks;
            };

            $filteredBooks = $filterByAuthor($books, 'Fourth Author');
            */

            /*
            function filter($items, $key, $value) {

                $filteredItems = [];

                foreach ($items as $item) {
                    if ($item[$key] === $value) {
                        $filteredItems[] = $item;
                    }
                }

                return $filteredItems;
            }

            $filteredBooks = filter($books, 'author', 'Fourth Author');
            */

            /*
            function filter($items, $function) {

                $filteredItems = [];

                foreach ($items as $item) {
                    if ($function($item)) {
                        $filteredItems[] = $item;
                    }
                }

                return $filteredItems;
            }

            $filteredBooks = filter($books, function($book) {
                return $book['year'] == 1968;
            });
            */

            $filteredBooks = array_filter($books, function($book) {
                return $book['year'] == 1968;
            });
        ?>
        <ul>
            <?php foreach ($filteredBooks as $book): ?>
                <li>
                    <p>
                        <?= $book['title'] ?>
                    </p>
                    <p>
                        <?= $book['author'] ?>
                    </p>
                    <a href="#<?= $book['buyUrl'] ?>">
                        <?= $book['title'] ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </body>
</html>
