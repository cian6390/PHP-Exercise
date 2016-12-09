<?php require('partials/head.php') ?>

<h1>Hello <?= $name; ?></h1>
<h2>Try to save a name</h2>
<form action="/post" method="POST">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" placeholder="Enter A Name">
    <button type="submit">Submit</button>
</form>

<ul>
<?php foreach($users as $user) : ?>
    <li><?= $user->name; ?></li>
<?php endforeach; ?>
</ul>

<?php require('partials/footer.php') ?>
