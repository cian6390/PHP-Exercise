<?php
$app = [];

$app['db_config'] = require 'config/database.php';

require 'functions.php';
require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

$app['db'] = new QueryBuilder(
    Connection::make($app['db_config'])
);