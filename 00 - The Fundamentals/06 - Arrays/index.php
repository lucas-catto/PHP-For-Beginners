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
                "Do Androids Dream of Electricity Sheep",
                "The Langoliers",
                "Hail Mary",
                "Animal Farm"
            ];
        ?>

        <ul>
            <?php
                /*
                foreach ($books as $book) {
                    echo "<li>$book</li>";
                }
                */
            ?>

            <?php foreach ($books as $book): ?>
                <li>
                    <?= $book ?>
                </li>
            <?php endforeach ?>
        </ul>
    </body>
</html>
