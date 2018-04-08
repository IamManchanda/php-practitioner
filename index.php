<?php

use App\Core\{Router, Request, Task};

// Functions
require 'functions/dd.php';
require 'functions/view.php';
require 'functions/redirect.php';

// Dependencies
require 'vendor/autoload.php';

// Bootstrap
$dbQuery = require 'bootstrap.php';

Router::load('routes.php') -> direct(Request::uri(), Request::method());
