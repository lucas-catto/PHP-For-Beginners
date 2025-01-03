
<?php require('partials/header.php') ?>

<h1><?= $heading ?></h1>

<form action="" method="post">
    
    <label for="body">Body</label>
    <br>
    <textarea name="body" id="body"><?= $_POST['body'] ?? '' ?></textarea>

    <?php if (isset($errors['body'])): ?>

        <?php foreach ($errors['body'] as $error): ?>
            <p>
                <?= $error ?>
            </p>
        <?php endforeach ?>

    <?php endif ?>

    <button type="submit">Create</button>
</form>
