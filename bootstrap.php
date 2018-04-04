<?php

// Config
$config = require 'config.php';

// Router
require 'core/Router.php';

// Classes
require 'core/Task.php';
require 'core/Request.php';

// Database
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

return new QueryBuilder(Connection::make($config['database']));

