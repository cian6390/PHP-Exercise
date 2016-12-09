<?php require('partials/head.php') ?>

<h1>Hello <?= $name; ?></h1>
<h2>Try a Post!</h2>
<form action="/post" method="POST">
    <label for="title">Title：</label>
    <input type="text" name="title" id="title">
    <button type="submit">Submit</button>
</form>

<ul>
<?php foreach($users as $user) : ?>
    <li><?= $user->name; ?></li>
<?php endforeach; ?>
</ul>

<?php require('partials/footer.php') ?>
