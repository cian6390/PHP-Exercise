<?php

$name = 'Cian.tw';

$users = $app['db']->selectAll('users');

require 'views/index.view.php';