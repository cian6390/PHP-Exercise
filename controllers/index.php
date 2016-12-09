<?php

$name = 'Cian.tw';

$users = App::get('database')->selectAll('users');

require 'views/index.view.php';