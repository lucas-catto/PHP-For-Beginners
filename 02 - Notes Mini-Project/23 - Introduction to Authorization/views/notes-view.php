<h1><?= $heading ?></h1>

<?php require('partials/header.php') ?>

<ul>
    <?php foreach ($notes as $note): ?>
        <li>
            <a href="note?id=<?= $note['id'] ?>">
                <?= $note['body'] ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>
