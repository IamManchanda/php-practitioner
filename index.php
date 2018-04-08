<?php

// Functions
require 'functions/dd.php';

// Dependencies
require 'vendor/autoload.php';

// Bootstrap
$dbQuery = require 'bootstrap.php';

require Router::load('routes.php')
  -> direct(Request::uri(), Request::method());
