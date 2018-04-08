<?php

$app = [];

// Config
$app['config'] = require 'config.php';

// Query Builder
$app['database'] = new QueryBuilder(
  Connection::make($app['config']['database'])
);

return $app['database'];

