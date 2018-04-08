<?php

// Functions
require 'functions/dd.php';

// Bootstrap
$dbQuery = require 'bootstrap.php';

require Router::load('routes.php')
  -> direct(Request::uri(), Request::method());
