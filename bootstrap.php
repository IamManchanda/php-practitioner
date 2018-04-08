<?php

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
  Connection::make(App::get('config')['database'])
));

// $config = App::get('config');

// // Query Builder
// $app['database'] = new QueryBuilder(
//   Connection::make($app['config']['database'])
// );

// return $app['database'];

