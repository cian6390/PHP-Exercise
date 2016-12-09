<?php require('partials/head.php') ?>

<form action="/user" method="POST">
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
