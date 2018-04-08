<?php

$app = [];

// Config
$app['config'] = require 'config.php';

// Router
require 'core/Router.php';

// Classes
require 'core/Task.php';
require 'core/Request.php';

// Database
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

$app['database'] = new QueryBuilder(
  Connection::make($app['config']['database'])
);

return $app['database'];

