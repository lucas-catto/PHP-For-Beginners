<h1><?= $heading ?></h1>

<?php require('partials/header.php') ?>

<ul>
    <?php foreach ($notes as $note): ?>
        <li>
            <a href="note?id=<?= $note['id'] ?>">
                <?= htmlspecialchars($note['body']) ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>

<a href="notes/create">Create Note</a>
