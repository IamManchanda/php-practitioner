<?php

// Config
$config = require 'config.php';

// Database
require 'database/Connection.php';
require 'database/QueryBuilder.php';

return new QueryBuilder(Connection::make($config['database']));

