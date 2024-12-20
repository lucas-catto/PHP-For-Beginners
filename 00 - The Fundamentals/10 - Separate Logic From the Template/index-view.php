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
