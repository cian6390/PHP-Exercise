<?php

$app['db']->insert('users', [
    'name' => $_POST['name']
]);

header('Location: /');