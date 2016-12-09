<?php
$app = [];

$app['db_config'] = require 'config/database.php';

require 'functions.php';

$app['db'] = new QueryBuilder(
    Connection::make($app['db_config'])
);