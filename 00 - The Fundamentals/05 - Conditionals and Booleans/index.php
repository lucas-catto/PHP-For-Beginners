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

        <?php
            error_reporting(E_ALL);
            ini_set('display_errors', 1);

            $name = "Dark Matter";
            $read = false;
            $message = "You have NOT read $name";

            if ($read) {
                $message = "You have read $name";
            }
        ?>

        <h1>
            <?php // echo $message; ?>
            <?= $message ?>
        </h1>
    </body>
</html>
